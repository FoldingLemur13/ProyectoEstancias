<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Seguridad;
use Illuminate\Http\Request;

class SeguridadController extends Controller
{
    //
    public function index($tipo)
    {
        $productos = Product::where('productT','Seguridad')->get();
        switch($tipo){
            case 'todos':       
                $seguridad = Seguridad::get();
                break;
            case 'control_de_acceso':
                $seguridad = Seguridad::where('productType','Control de Acceso')->get();
                break;
            case 'cctv':
                $seguridad = Seguridad::where('productType','CCTV')->get();
                break;
            case 'videoporteros':
                $seguridad = Seguridad::where('productType','VideoPorteros')->get();
                break;
            case 'alarmas':
                $seguridad = Seguridad::where('productType','Alarmas')->get();
                break;
            case 'proteccion_perimetral':
                $seguridad = Seguridad::where('productType','Proteccion Perimetral')->get();
                break;
            case 'radiocomunicacion':
                $seguridad = Seguridad::where('productType','RadioComunicacion')->get();
                break;
        }
        return view('products.seguridad',[
            'seguridades'=>$seguridad,
            'productos'=>$productos,
        ]);
    }
}
