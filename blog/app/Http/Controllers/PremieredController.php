<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Premiered;

class PremieredController extends Controller
{
    public function index(){
        $premiered =  Premiered::all();
        return view ('admin.premiered.index',compact('premiered'));
    }
}
