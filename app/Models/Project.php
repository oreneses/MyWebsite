<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory; 
    protected $guarded = [];

    // Sirve para mostrar la url con el campo URL de nuestra base de datos (por defecto utiliza la PK)
    public function getRouteKeyName()
    {
        return 'url';
    }

}
