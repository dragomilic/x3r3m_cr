<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class articulo extends Model
{
    //
    protected $table = 'tbl_articulos';
    public $fillable = ['Titulo','Contenido'];
}
