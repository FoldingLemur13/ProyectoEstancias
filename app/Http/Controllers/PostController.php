<?php

namespace App\Http\Controllers;

use App\Models\Red;
use App\Models\Computo;
use App\Models\Escaner;
use App\Models\Product;
use App\Models\Terminal;
use App\Models\Impresora;
use App\Models\Seguridad;
use App\Models\Consumible;
use App\Models\Proteccion;
use Illuminate\Http\Request;
use PHPUnit\TextUI\Output\Printer;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('profile');
    }
    
    public function create()
    {
        return view('addProducts');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'nameProduct' => 'required|max:255',
            'brandProduct' => 'required|max:255',
            'modelProduct' => 'required|max:255',
            'descProduct' => 'required',
            'productT' => 'required',
            'productType' => 'required|max:100',
            'imagen' => 'required'
        ]);
        $product = Product::create([
            'nameProduct' => $request->nameProduct,
            'brandProduct' => $request->brandProduct,
            'modelProduct' => $request->modelProduct,
            'productT' => $request->productT,
        ]);
        //dd($product->id);
        switch($request->productT){
            case "Impresora": 
                Impresora::create([
                    'nameProduct'=>$request->nameProduct,
                    'brandProduct'=>$request->brandProduct,
                    'modelProduct'=>$request->modelProduct,
                    'descProduct'=>$request->descProduct,
                    'productT'=>$request->productT,
                    'productType'=>$request->productType,
                    'imagen'=>$request->imagen,
                    'products_id'=>$product->id,
                ]);
                break;
            case "Escaner":
                Escaner::create([
                    'nameProduct'=>$request->nameProduct,
                    'brandProduct'=>$request->brandProduct,
                    'modelProduct'=>$request->modelProduct,
                    'descProduct'=>$request->descProduct,
                    'productT'=>$request->productT,
                    'productType'=>$request->productType,
                    'imagen'=>$request->imagen,
                    'products_id'=>$product->id,
                ]);
                break;
            case "Consumibles":
                Consumible::create([
                    'nameProduct'=>$request->nameProduct,
                    'brandProduct'=>$request->brandProduct,
                    'modelProduct'=>$request->modelProduct,
                    'descProduct'=>$request->descProduct,
                    'productT'=>$request->productT,
                    'productType'=>$request->productType,
                    'imagen'=>$request->imagen,
                    'products_id'=>$product->id,
                ]);
                break;
            case "Seguridad":
                Seguridad::create([
                    'nameProduct'=>$request->nameProduct,
                    'brandProduct'=>$request->brandProduct,
                    'modelProduct'=>$request->modelProduct,
                    'descProduct'=>$request->descProduct,
                    'productT'=>$request->productT,
                    'productType'=>$request->productType,
                    'imagen'=>$request->imagen,
                    'products_id'=>$product->id,
                ]);
                break;
            case "Computo":
                Computo::create([
                    'nameProduct'=>$request->nameProduct,
                    'brandProduct'=>$request->brandProduct,
                    'modelProduct'=>$request->modelProduct,
                    'descProduct'=>$request->descProduct,
                    'productT'=>$request->productT,
                    'productType'=>$request->productType,
                    'imagen'=>$request->imagen,
                    'products_id'=>$product->id,
                ]);
                break;
            case "Redes":
                Red::create([
                    'nameProduct'=>$request->nameProduct,
                    'brandProduct'=>$request->brandProduct,
                    'modelProduct'=>$request->modelProduct,
                    'descProduct'=>$request->descProduct,
                    'productT'=>$request->productT,
                    'productType'=>$request->productType,
                    'imagen'=>$request->imagen,
                    'products_id'=>$product->id,
                ]);
                break;
            case "Proteccion_y_energia":
                Proteccion::create([
                    'nameProduct'=>$request->nameProduct,
                    'brandProduct'=>$request->brandProduct,
                    'modelProduct'=>$request->modelProduct,
                    'descProduct'=>$request->descProduct,
                    'productT'=>$request->productT,
                    'productType'=>$request->productType,
                    'imagen'=>$request->imagen,
                    'products_id'=>$product->id,
                ]);
                break;
            case "Terminal":
                Terminal::create([
                    'nameProduct'=>$request->nameProduct,
                    'brandProduct'=>$request->brandProduct,
                    'modelProduct'=>$request->modelProduct,
                    'descProduct'=>$request->descProduct,
                    'productT'=>$request->productT,
                    'productType'=>$request->productType,
                    'imagen'=>$request->imagen,
                    'products_id'=>$product->id,
                ]);
                break;
        }
        return redirect()->route('products');
    }

    public function destroy(Product $product)
    {
        switch($product->productT){
            case 'Impresora':
                $productoI = Impresora::where('products_id',$product->id)->get();
                break;
            case 'Escaner':
                $productoI = Escaner::where('products_id',$product->id)->get();
                break;
            case 'Consumibles':
                $productoI = Consumible::where('products_id',$product->id)->get();
                break;
            case 'Seguridad':
                $productoI = Seguridad::where('products_id',$product->id)->get();
                break;
            case 'Computo':
                $productoI = Computo::where('products_id',$product->id)->get();
                break;
            case 'Redes':
                $productoI = Red::where('products_id',$product->id)->get();
                break;
            case 'Proteccion_y_energia':
                $productoI = Proteccion::where('products_id',$product->id)->get();
                break;
            case 'Terminal':
                $productoI = Terminal::where('products_id',$product->id)->get();
                break;
        }
        //dd('Eliminando ',$product->id);
        $product->delete();
        $imagen_path = public_path('uploads/'.$productoI[0]->imagen);
        if(File::exists($imagen_path)){
            unlink($imagen_path);
        }
        return redirect()->route('products');
    }
}
