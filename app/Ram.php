<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ram extends Model
{
    protected $table='mem_ram';
    protected $fillable = ['marca','tipo','capacidade','modelo'];
}
