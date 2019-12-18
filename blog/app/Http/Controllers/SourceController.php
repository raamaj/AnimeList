<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Source;

class SourceController extends Controller
{
    public function index(){
        $source = Source::all();
        return view ('admin.source.index',compact('source'));
    }
}
