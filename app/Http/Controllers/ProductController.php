<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Facultad;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductPost;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->id();
        //Para filtar por id//->where('id', '=', '2')->paginate(10);
        $products = Product::orderBy('created_at','desc')
        ->where('estado', '=', 'publico')
        ->where('user_id','!=',$id)
        ->paginate(10);
        return view('dashboard.product.index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $facultades = Facultad::pluck('id','title');
        //$user = auth()->id();
        //echo($user);
        return view('dashboard.product.create',['product'=>new Product(),'facultades'=>$facultades]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //cambio en el metodo guardar ahora si guarda con el id del usuario para hacer la relacion
    public function store(StoreProductPost $request)
    {

        $user = auth()->id();
        //echo($user);
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $product = new Product($data);
        $product->save();
        return view('dashboard.product.add-images',['product'=> $product]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    //Funcion ver  si el objeto existe me lo devuelve como un objeto, en las vistas se puede hacer uso de el, si no existe devulve el mensaje, creo que se puede mejorar y devolver una alerta
    public function show($id)
    {
        $product = Product::find($id);
        $facultades = Facultad::pluck('id','title');
        if(is_object($product)){
        return view('dashboard.product.show',['product'=> $product,'facultades',$facultades]);
        }else{
            return "Este producto no existe";

        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $facultades = Facultad::pluck('id','title');
        return view('dashboard.product.edit',['product'=> $product,'facultades',$facultades]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductPost $request,Product $product)
    {
        //
        $product->update($request->validated());
        return redirect()->back()->withSuccess('IT WORKS!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
        $product->delete();
        return back()->with('status','Producto eliminado con exito');
    }

    public function dataUser(Request $request){
        $request-> user();
        echo($request);

    }

    public function image(Request $request,Product $product )
    {
        $request->validate(['image'=>'required|mimes:jpeg,bmp,png,jpeg|max:10240',]);
        $filename=time().".".$request->image->extension();
        $request->image->move(public_path('storage').'/images',$filename);
        ProductImage::create(['image'=>$filename,'product_id'=>$product->id]);
        return back()->with('status','Imagen cargada con exito');
    }
}
