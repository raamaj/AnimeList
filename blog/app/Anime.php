<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anime extends Model
{
    protected $table = 'anime';
    protected $fillable = ['title','type','episode','status','start_aired','end_aired','premiered','studio_id','source_id','genres','duration','rating']; 
}
