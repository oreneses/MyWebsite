<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    // Hemos de agregar esta propiedad para permitir asignacion masiva.  
    protected $fillable = ['title', 'url', 'description'];

    public function getRouteKeyName()
    {
        return 'url';
    }

}
