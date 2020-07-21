<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    protected $table = 'lap';
    protected $fillable = ['marca','geracao','modelo','polegadas','cap_ram','tipo_ram','cap_hdd','tipo_hdd','grafica','cap_grafica','duracao_bateria','volts_carregador','problema'];
}
