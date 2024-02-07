<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Red;
use Illuminate\Http\Request;

class RedesController extends Controller
{
    //
    public function index($tipo)
    {
        $productos = Product::where('productT','Redes')->get();
        switch($tipo){
            case 'todos':
                $redes = Red::get();
                break;
            case 'cableado_estructurado':
                $redes = Red::where('productType','Cableado Estructurado')->get();
                break;
            case 'servidores':
                $redes = Red::where('productType','Servidores')->get();
                break;
            case 'accesorios':
                $redes = Red::where('productType','Accesorios')->get();
                break;
            case 'equipo_wlan_inalambrico':
                $redes = Red::where('productType','Equipo WLAN/Inalambrico')->get();
                break;
            case 'networking':
                $redes = Red::where('productType','Networking')->get();
                break;
        }
        return view('products.redes',[
            'redes'=>$redes,
            'productos'=>$productos,
        ]);
    }
}
