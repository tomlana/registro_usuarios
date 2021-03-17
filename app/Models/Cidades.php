<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidades extends Model
{
    use HasFactory;
    protected $primaryKey = "id";

    public function endereco() {
        return $this->belongsTo(Endereco::class, "id", "cidade_id");
    }
}
