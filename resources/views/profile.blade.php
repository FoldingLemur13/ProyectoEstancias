@extends('layouts.app')

@section('titulo')
    Perfil
@endsection

@section('contenido')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 md:flex">
            <div class="md:w-8/12 lg:w-6/12">
                <p>Imagen</p>
            </div>
            <div class="md:w-8/12 lg:w-6/12">
                <p>{{auth()->user()->name}}</p>
            </div>
        </div>
    </div>
@endsection