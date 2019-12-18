<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Premiered extends Model
{
    protected $table= "premiered";
    protected $fillable= ["id","premiered_time"];
}
