<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table = 'categorias';
    protected $fillable = [ 'id','nombre', 'descripcion'];

    public function libros()
    {
        return $this->hasMany(Libros::class, 'fk_categoria');
    }

}
