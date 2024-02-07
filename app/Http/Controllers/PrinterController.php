<?php

namespace App\Http\Controllers;

use App\Models\Impresora;
use App\Models\Product;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    //
    public function index($tipo)
    {
        //dd($tipo);
        $productos = Product::where('productT','Impresora')->get();
        switch($tipo){
            case 'todos':
                $impresoras = Impresora::get();
                break;
            case 'portatiles':
                $impresoras = Impresora::where('productType','Portatiles')->get();
                break;
            case 'escritorio':
                $impresoras = Impresora::where('productType','Escritorio')->get();

                break;
            case 'industriales':
                $impresoras = Impresora::where('productType','Industriales')->get();

                break;
            case 'punto_de_venta':
                $impresoras = Impresora::where('productType','Punto De Venta')->get();

                break;
            case 'de_oficina':
                $impresoras = Impresora::where('productType','De oficina')->get();
                
                break;
        }
        //($impresoras);
        return view('products.impresoras',[
            'impresoras'=>$impresoras,
            'productos'=>$productos
        ]);
        
    }
}
