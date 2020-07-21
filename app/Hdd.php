<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hdd extends Model
{
    protected $table  = 'hd';
    protected $fillable = ['marca','tipo','capacidade','modelo'];
}
