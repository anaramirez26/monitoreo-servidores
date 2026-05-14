<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servidor extends Model
{
    use HasFactory;

    protected $table = 'servidores';
    // fillable lo que hace es que Define los campos que se pueden asignar dinamicamente
    //, que es lo que espera a que se puedan modificar, 
    // para evitar que se modifiquen campos que no queremos que se modifiquen
    protected $fillable = [
        'nombre',
        'url',
        'user',
        'password',
    ];
}
