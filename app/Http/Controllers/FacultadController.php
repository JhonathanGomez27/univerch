<?php

namespace App\Http\Controllers;

use App\Models\Facultad;
use Illuminate\Http\Request;
use App\Http\Requests\StoreFacultadPost;

class FacultadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $facultades = Facultad::orderBy('created_at','desc')->paginate(4);
        return view('dashboard.facultad.index',['facultades'=>$facultades]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.facultad.create',['facultad'=>new Facultad()]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFacultadPost $request)
    {
        //
        Facultad::create($request->validated());
        return back()->with('status','Facultad creada con exito');
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
    public function edit(Facultad $facultad)
    {
        //

        return view('dashboard.facultad.edit',["facultad" => $facultad]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFacultadPost $request, Facultad $facultad)
    {
        //
        $facultad->update($request->validated());
        return back()->with('status','Facultad actualizada con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Facultad $facultad)
    {
        //
        $facultad->delete();
        return back()->with('status','Facultad eliminado con exito');
    }
}
