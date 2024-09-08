<?php

namespace App\Http\Controllers;

use App\Http\Resources\CategoriaCollection;
use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    //

    public function index(){
        // return response()-> json(['categorias' => categoria::all()]);


        return new CategoriaCollection(categoria::all());
    }
}
