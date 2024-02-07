<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameProduct',
        'brandProduct',
        'modelProduct',
        'productT',
    ];

    public function printers()
    {
        return $this->hasMany(Impresora::class);
    }

    public function escaners()
    {
        return $this->hasMany(Escaner::class);
    }

    public function proteccions()
    {
        return $this->hasMany(Proteccion::class);
    }

    public function reds()
    {
        return $this->hasMany(Red::class);
    }

    public function seguridads()
    {
        return $this->hasMany(Seguridad::class);
    }

    public function terminals()
    {
        return $this->hasMany(Terminal::class);
    }

    public function computos()
    {
        return $this->hasMany(Computo::class);
    }

    public function consumibles()
    {
        return $this->hasMany(Consumible::class);
    }
}
