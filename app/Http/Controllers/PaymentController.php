<?php

namespace App\Http\Controllers;

use Cart;
use App\Models\Order;
use PayPal\Api\Payee;
use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PhpParser\Node\Expr\New_;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Config;
use PayPal\Exception\PayPalConnectionException;

class PaymentController extends Controller
{
    public $compra ="";
    private $apiContext;
    public function __construct()
    {
        $payPalConfig = Config::get('paypal');

        $this->apiContext = new ApiContext(
            new OAuthTokenCredential(
                $payPalConfig['client_id'],
                $payPalConfig['secret']
            )
        );
         $this->apiContext->setConfig($payPalConfig['settings']);
    }


    public function payWithPayPal(Request $request)
    {
        ///Recibo el request que me trae la informacion necesaria para hacer una venta, id producto, precio, total, vendedor etc
        //echo($request->compra);
       //$algo = Cart::getContent();


     /*  for ($i =  1; $i <= count(Cart::getContent()); $i++) {
            $ids[] = $i->id;
            $vendedores[] = $i->vendedor;
            $subtotales [] = $i->price * $i->quantity;
        }
        return*/

        $cont = 0;
        foreach (Cart::getContent() as $item)
        {
            //vendedor','comprador','producto','precio_unitario','cantidad','total','estado
            $vendedores = $item->vendedor;
            $comprador = auth()->id();
            $ids = $item->id;
            $precios = $item->price;
            $cantidad = $item->quantity;
            //return  $cantidad;
            $subtotales  = $item->price * $item->quantity;
            $data['vendedor'] =  $vendedores;
            $data['comprador'] =  $comprador;
            $data['producto'] =  $ids;
            $data['precio_unitario'] = $precios;
            $data['cantidad'] =  $cantidad;
            $data['total'] =  $subtotales;
            $data['estado'] =  "creado";

            $order = new Order( $data);
            $order->save();

        }
        //return;



       //
        $payer = new Payer();

        //$payer_info =auth()->id();
        $payer->setPaymentMethod('paypal');
        //$user = auth()->id();
        //return $user;
        //$payer->setPayerInfo($user);
        //$algo =$payer-> getPayerInfo();
        //return $algo;

        //return $payer;
        //$payee = New Payee();
        //$payee_info = $request;
        //$dato = json_decode($request, true);
       //echo(Var_dump($request->compra));

        //echo ( json_decode(stripslashes($request), true));
        //return  $request->Vendedor;


        //en el amount ingreso el total de la venta
        $amount = new Amount();
        $amount->setTotal($request->total);

        $amount->setCurrency('USD');
        //return $amount;
        $transaction = new Transaction();
        $transaction->setAmount($amount);
        $transaction->setDescription('Gracias Por usar  Univerch');





        $callbackUrl = url('/paypal/status');

        $redirectUrls = new RedirectUrls();
        $redirectUrls->setReturnUrl($callbackUrl)
            ->setCancelUrl($callbackUrl);

        $payment = new Payment();
        $payment->setIntent('sale')
            ->setPayer($payer)

            ->setTransactions(array($transaction))
            ->setRedirectUrls($redirectUrls);
            //return $payer;

        try {
            $payment->create($this->apiContext);
            return redirect()->away($payment->getApprovalLink());
        } catch (PayPalConnectionException $ex) {
            echo $ex->getData();
        }
    }


    public function payPalStatus(Request $request)
    {
        $paymentId = $request->input('paymentId');
        $payerId = $request->input('PayerID');
        $token = $request->input('token');

        if (!$paymentId || !$payerId || !$token) {
            $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
           // return redirect('/paypal/failed')->with(compact('status'));
           $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        foreach (Cart::getContent() as $item)
        {
            //vendedor','comprador','producto','precio_unitario','cantidad','total','estado
            $ids = $item->id;
                $estado = "creado";
                $vendedores = $item->vendedor;
                $comprador = auth()->id();
                $precios = $item->price;
                $cantidad = $item->quantity;
                $subtotales  = $item->price * $item->quantity;
                $order = Order::orderBy('created_at','desc')
                ->where('producto', '=', $ids)
                ->where('estado','=',$estado)
                ->where('vendedor','=',$vendedores)
                ->where('comprador','=',$comprador)
                ->where('cantidad','=',$cantidad)
                ->where('total','=',$subtotales)
                ->where('precio_unitario','=',$precios);
                 $data['estado'] =  "rechazado";
            $order->update( $data);


        }
        Cart::clear();
           return  $status;
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);
        //return $result;

        if ($result->getState() === 'approved') {

           // = "";
            foreach (Cart::getContent() as $item)
            {
                //vendedor','comprador','producto','precio_unitario','cantidad','total','estado
                $ids = $item->id;
                $estado = "creado";
                $vendedores = $item->vendedor;
                $comprador = auth()->id();
                $precios = $item->price;
                $cantidad = $item->quantity;
                $subtotales  = $item->price * $item->quantity;
                $order = Order::orderBy('created_at','desc')
                ->where('producto', '=', $ids)
                ->where('estado','=',$estado)
                ->where('vendedor','=',$vendedores)
                ->where('comprador','=',$comprador)
                ->where('cantidad','=',$cantidad)
                ->where('total','=',$subtotales)
                ->where('precio_unitario','=',$precios);
                $data['estado'] =  "aprovado";
                $order->update( $data);
                //$pasar = $order;
            }
            //return  $order;
            $compra = Cart::getContent();
            //return $compra;
            Cart::clear();

            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';
            return view('dashboard.paypal.success', ['compra'=> $compra]);
            //return  $status;
        }

        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        foreach (Cart::getContent() as $item)
        {
            //vendedor','comprador','producto','precio_unitario','cantidad','total','estado
            $ids = $item->id;
            $estado = "creado";
            $vendedores = $item->vendedor;
            $comprador = auth()->id();
            $precios = $item->price;
            $cantidad = $item->quantity;
            $subtotales  = $item->price * $item->quantity;
            $order = Order::orderBy('created_at','desc')
            ->where('producto', '=', $ids)
            ->where('estado','=',$estado)
            ->where('vendedor','=',$vendedores)
            ->where('comprador','=',$comprador)
            ->where('cantidad','=',$cantidad)
            ->where('total','=',$subtotales)
            ->where('precio_unitario','=',$precios);
            $data['estado'] =  "rechazado";
            $order->update( $data);


        }
        Cart::clear();
        return  $status;
    }
}
