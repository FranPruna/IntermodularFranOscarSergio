<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PreguntaFormulario extends Model
{
    use HasFactory;
    protected $fillable = ['id_formulario', 'id_pregunta', 'created_at', 'updated_at'];

    
    public function formulario() {
        return $this->belongsToMany(Formulario::class);
    }

    public function pregunta(){
        return $this->belongsToMany(Pregunta::class);
    }
}
