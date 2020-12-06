<?php

namespace App\Http\Controllers;

use App\Models\PQR; 
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StorePQRPost;

class PQRController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Para filtar por id//->where('id', '=', '2')->paginate(10);
        $id = Auth()->id();
        $user =User::find($id);
        if(is_object($user)){
        
            if ($user->email!='admin@admin.com') {
                # code...
                
                $pqrs = Pqr::orderBy('created_at','desc')->where('id','=',$id)->paginate(10);
        
                return view('dashboard.pqr.index',['pqrs'=>$pqrs,'tipo'=>2]);
            } else {
                $pqrs = Pqr::orderBy('created_at','desc')->paginate(10);
        
                return view('dashboard.pqr.index',['pqrs'=>$pqrs,'tipo'=>1]);
            }
            
            

        } else{
            echo('Este Perfil No existe');
        }
            //$pqrs = Pqr::orderBy('created_at','desc')->where('user_id', '=', id)->paginate(10);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$products = Products::pluck('id','title');
        //$user = auth()->id();
        //echo($user);
        return view('dashboard.pqr.create',['pqr'=>new PQR()]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //cambio en el metodo guardar ahora si guarda con el id del usuario para hacer la relacion
    public function store(Request $request)
    {
        
        $user = auth()->id();
        //echo($user);
        $data = $request->all();
        $data['user_id'] = auth()->id();
        $data['product_id'] ='1';
        $data['status']= 'review';
        foreach ($data as $prueba => $value) {
            # code...
            echo($prueba.' \n ');
        }
        //$pqr = new PQR($data);
        //$pqr->save();
        //return back()->with('status','PQR creada con exito');
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
        
        $pqr = pqr::find($id);
        
        if(!is_object($pqr)){
            return "Este pqr no existe";
        }
        $id = Auth()->id();
        $user =User::find($id);
        
        if(is_object($user)){
            echo($user->email);
        
            if ($user->email!='admin@admin.com') {
                $tipo = 2;
                return view('dashboard.pqr.show',['pqr'=> $pqr,'tipo'=>$tipo]);
            } else {
                $tipo = 1;
                return view('dashboard.pqr.show',['pqr'=> $pqr,'tipo'=>$tipo]);
            }
            
            

        } else{
            echo('Este Perfil No existe');
        }


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(pqr $pqr)
    {
        $id = Auth()->id();
        $user =User::find($id);
        if(is_object($user)){
            if ($user->email!='admin@admin.com') {
                # code...
                return back()->with('error','No tienes permisos');
            } else {   
                return view('dashboard.pqr.edit',['pqr'=> $pqr]);
            }
        } else{
            echo('Este Perfil No existe');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePQRPost $request,pqr $pqr)
    {

        $id = Auth()->id();
        $user =User::find($id);
        if(is_object($user)){
            
            if ($user->email!='admin@admin.com') {
                # code...
                return back()->with('error','No tienes permisos');
            } else {
                
                $data=$request->all();
                
                $pqr->update($request->validated());
                return back()->with('status','Actualizado con exito');
            }
            
            

        } else{
            echo('Este Perfil No existe');
        }
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(pqr $pqr)
    {
        //
        return back()->with('status','No se pueden eliminar las PQR enviadas');
    }

    public function image(Request $request,pqr $pqr )
    {
        $request->validate(['image'=>'required|mimes:jpeg,bmp,png,jpeg|max:10240',]);
        $filename=time().".".$request->image->extension();
        $request->image->move(public_path('storage').'/images',$filename);
        pqrImage::create(['image'=>$filename,'pqr_id'=>$pqr->id]);
        return back()->with('status','Imagen cargada con exito');
    }
}