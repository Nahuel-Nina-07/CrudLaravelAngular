<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'PRODUCTO',
        'DESCRIPCION',
        'ESTADO',
        'CANTIDAD',
        'NRO_VISITAS',
        'PRECIO_REGULAR',
        'PRECIO_PREFERENCIAL'
    ];
}
