<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producer;

class ProducerController extends Controller
{
    public function index(){
        $producer= Producer::all();
        return view ('admin.producer.index',compact('producer'));

    }

}
