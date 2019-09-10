<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticia extends Model
{
    protected $filable = ['titulo', 'descricao', 'conteudo', 'path_image'];
}
