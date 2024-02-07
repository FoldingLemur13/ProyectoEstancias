<?php

namespace App\Http\Controllers;

use App\Models\Escaner;
use App\Models\Product;
use Illuminate\Http\Request;

class EscanersController extends Controller
{
    //
    public function index($tipo)
    {
        $productos = Product::where('productT','Escaner')->get();
        switch($tipo){
            case 'todos': 
                $escaners = Escaner::get();
                break;
            case 'uso_general':
                $escaners = Escaner::where('productType','Uso general')->get();
                break;
            case 'industrial':
                $escaners = Escaner::where('productType','Industrial')->get();
                break;
            case 'montaje_fijo':
                $escaners = Escaner::where('productType','Montaje Fijo')->get();
                break;
        }
        return view('products.escaners',[
            'escaners' => $escaners,
            'productos' => $productos,
        ]);
    }
}
