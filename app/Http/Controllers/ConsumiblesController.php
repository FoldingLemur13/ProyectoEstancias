<?php

namespace App\Http\Controllers;

use App\Models\Consumible;
use App\Models\Product;
use Illuminate\Http\Request;

class ConsumiblesController extends Controller
{
    //
    public function index($tipo)
    {
        $productos = Product::where('productT','Consumibles')->get();
        switch($tipo){
            case 'todos':
                $consumibles = Consumible::get();
                break;
            case 'etiquetas':
                $consumibles = Consumible::where('productType','Etiquetas')->get();
                break;
            case 'ribbon':
                $consumibles = Consumible::where('productType','Ribbon')->get();
                break;
            case 'toner_y_tinta':
                $consumibles = Consumible::where('productType','Toner y Tinta')->get();
                break;
            case 'tarjetas_pvc':
                $consumibles = Consumible::where('productType','Tarjetas PVC')->get();
                break;
                
        }
        return view('products.consumibles',[
            'consumibles'=>$consumibles,
            'productos'=>$productos,
        ]);
    }
}
