<?php

namespace App\Http\Controllers;

use PayPal\Api\Payer;
use PayPal\Api\Amount;
use PayPal\Api\Payment;
use PayPal\Api\Transaction;
use PayPal\Rest\ApiContext;
use Illuminate\Http\Request;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Auth\OAuthTokenCredential;
use Illuminate\Support\Facades\Config;
use PayPal\Exception\PayPalConnectionException;


class PaymentController extends Controller
{
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
        //return $request->total;
        $payer = new Payer();
        $payer->setPaymentMethod('paypal');


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
           return  $status;
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        /** Execute the payment **/
        $result = $payment->execute($execution, $this->apiContext);

        if ($result->getState() === 'approved') {
            $status = 'Gracias! El pago a través de PayPal se ha ralizado correctamente.';
            //return redirect('welcome')->with(compact('status'));
            //return redirect('/results')->with(compact('status'));
            return  $status;
        }

        $status = 'Lo sentimos! El pago a través de PayPal no se pudo realizar.';
        //return redirect('/results')->with(compact('status'));
        return  $status;
    }
}
