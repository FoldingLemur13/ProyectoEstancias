<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Terminal;
use Illuminate\Http\Request;

class TerminalesController extends Controller
{
    //
    public function index($tipo)
    {
        $productos = Product::where('productT','Terminal')->get();
        switch($tipo){
            case 'todos':
                $terminales = Terminal::get();
                break;
            case 'uso_general':
                $terminales = Terminal::where('productType','Uso General')->get();
                break;
            case 'industriales':
                $terminales = Terminal::where('productType','Industriales')->get();
                break;
            case 'tabletas':
                $terminales = Terminal::where('productType','Tabletas')->get();
                break;
            case 'rfid':
                $terminales = Terminal::where('productType','RFID')->get();
                break;
            case 'almacen':
                $terminales = Terminal::where('productType','Almacen')->get();
                break;
        }
        return view('products.terminales',[
            'terminales'=>$terminales,
            'productos'=>$productos,
        ]);
    }
}
 