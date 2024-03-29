<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    public function cliente(){
        return $this->hashOne("App/Model/cliente");
    }
    use HasFactory;
    Protected $fillable=["nombre", "apaterno", "amaterno", "direccion","telefono", "correo", "fechareg", "status"];
}
