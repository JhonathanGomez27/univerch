<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Facultad;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProductPost;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Para filtar por id//->where('id', '=', '2')->paginate(10);
        $products = Product::orderBy('created_at','desc')->paginate(10);
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
        return view('dashboard.product.create',['product'=>new Product(),'facultades'=>$facultades]);
  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPost $request)
    {
        //
        Product::create($request->validated());
        return back()->with('status','Framework creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return back()->with('status','Post actualizado con exito');
    
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
        return back()->with('status','Post eliminado con exito');
    }
}
