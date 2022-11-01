<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    // Hemos de agregar esta propiedad para desproteger la asignacion masiva.
    // Esto se utiliza porque si hubiesen muchos campos, tendriamos que agregar a $fillable todos los campos del formulario.
    // De esta manera, desde el RequestForm permitimos que los campos que se envien a traves de la request sean los validados.  
    protected $guarded = [];

    // Sirve para mostrar la url con el campo URL de nuestra base de datos (por defecto utiliza la PK)
    public function getRouteKeyName()
    {
        return 'url';
    }

}
