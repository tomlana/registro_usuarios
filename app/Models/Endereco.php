<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public function cidade(){
       return $this->hasMany(Cidades::class, "id", "cidade_id");
    }

    public function estado(){
        return $this->hasMany(Estados::class, "id", "estado_id");
    }

    public function usuario(){
        return $this->belongsTo(Usuario::class, "id","endereco_id");
    }
}
