<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicio extends Model
{
    use HasFactory;
    protected $table = 'servicios';

    public function categorias()
    {
        return $this->belongsToMany(Categoria::class, 'categoriaServicio', 'id_servicio', 'id_categoria');
    }
}
