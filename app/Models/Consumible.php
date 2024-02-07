<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumible extends Model
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
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
