<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proteccion extends Model
{
    use HasFactory;
    protected $fillable = [
        'nameProduct',
        'brandProduct',
        'modelProduct',
        'descProduct',
        'productT',
        'productType',
        'imagen',
        'products_id',
    ];
    
    public function produc()
    {
        return $this->belongsTo(Product::class);
    }
}
