<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public $fillable = [
        "nome",
        "senha",
        "endereco_id"
    ];

    public function endereco(){
        $this->hasMany(Endereco::class);
    }
}
