<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;


class Libros extends Model
{
    //
    protected $table = 'libros';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'autor',
        'editorial',
        'fk_categoria',
        'año'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'fk_categoria');
    }

}
