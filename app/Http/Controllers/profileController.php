<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    public function getPerfil( $id )
    {
        $user =User::find($id);
        if(is_object($user)){
            //echo($user);
            return view('profile',['user'=> $user]);

        } else{
            echo('Este Perfil No existe');


        }


        //return response() -> json($data, $data['code']);


    }
}
