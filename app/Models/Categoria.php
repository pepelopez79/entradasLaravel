<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function entradas()
    {
        return $this->hasMany(Entrada::class, 'categoria_id');
    }
}
