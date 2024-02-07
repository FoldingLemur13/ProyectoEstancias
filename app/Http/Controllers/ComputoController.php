<?php

namespace App\Http\Controllers;

use App\Models\Computo;
use App\Models\Product;
use Illuminate\Http\Request;

class ComputoController extends Controller
{
    //
    public function index($tipo)
    {
        $productos = Product::where('productT','Computo')->get();
        switch($tipo){
            case 'todos':
                $computos = Computo::get();
                break;
            case 'laptops':
                $computos = Computo::where('productType','Laptops')->get();
                break;
            case 'computadora':
                $computos = Computo::where('productType','Computadora')->get();
                break;
            case 'accesorios':
                $computos = Computo::where('productType','Accesorios')->get();
                break;
            case 'insumos':
                $computos = Computo::where('productType','Insumos')->get();
                break;
            case 'gaming':
                $computos = Computo::where('productType','gaming')->get();
                break;
        }
        return view('products.computo',[
            'computos' => $computos,
            'productos'=>$productos
        ]);
    }
}
