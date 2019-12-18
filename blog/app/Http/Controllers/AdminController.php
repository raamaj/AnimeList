<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;

class AdminController extends Controller
{
    public function index(){
        $animes = Anime::all();
        return view('admin.anime.index', compact('animes'));
    }
}
