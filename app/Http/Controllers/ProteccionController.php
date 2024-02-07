<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Proteccion;
use Illuminate\Http\Request;

class ProteccionController extends Controller
{
    //
    public function index($tipo)
    {
        $productos = Product::where('productT','Proteccion_y_energia')->get();
        switch($tipo){
            case 'todos':
                $protecciones = Proteccion::get();
                break;
            case 'baterias':
                $protecciones = Proteccion::where('productType','Baterias')->get();
                break;
            case 'pdu_ups_respaldos':
                $protecciones = Proteccion::where('productType','PDU/UPS/Respaldos')->get();
                break;
            case 'lamparas_de_emergencia':
                $protecciones = Proteccion::where('productType','Lamparas de Emergencia')->get();
                break;
            case 'fuentes_de_poder':
                $protecciones = Proteccion::where('productType','Fuentes de Poder')->get();
                break;
        }
        return view('products.proteccion',[
            'protecciones' => $protecciones,
            'productos' => $productos,
        ]);
    }
}
