<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable = ['texto', 'icono_boton_1', 'texto_boton_1', 'style_boton_1', 'icono_boton_2', 'texto_boton_2', 'style_boton_2'];
}
