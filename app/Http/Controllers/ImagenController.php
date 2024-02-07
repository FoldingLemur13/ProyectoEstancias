<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;



class ImagenController extends Controller
{
    //

    public function store(Request $request){
        $imagen = $request->file('file');
        $nombreImagen = Str::uuid().".".$imagen->extension();
        //$path = $imagen->store('uploads');
        $imagenServidor = Image::make($imagen);
        $imagenServidor->fit(200,200);
        $imagenPath = public_path('uploads').'/'.$nombreImagen;
        $imagenServidor->save($imagenPath);
        //return "Archivo guardado en: " . $path;
        return response()->json(['imagen'=>$nombreImagen]);
    }
}