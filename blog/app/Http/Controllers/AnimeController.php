<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Anime;
class AnimeController extends Controller
{
    public function index(){
        $animes = Anime::all();
        return view('admin.anime.index', compact('animes'));
    }

    public function insert(Request $request){
        $anime = new Anime;
        $anime->title = $request->title;
        $anime->type = $request->type;
        $anime->episode = $request->episode;
        $anime->status = $request->status;
        $anime->start_aired = $request->start_aired;
        $anime->finish_aired = $request->finish_aired;
        $anime->genres = implode(',',$request->genre);
        $anime->premiered = $request->permiered;
        $anime->studio_id = $request->studio_id;
        $anime->source_id = $request->source_id;
        $anime->duration = $request->duration;
        $anime->rating = $request->rating;

        if ($anime->save()) {
            return redirect('/')->with(['success' => 'Data berhasil ditambah.']);
        }else{
            return redirect('/')->with(['error' => 'Data gagal ditambah.']);
        }

        return redirect('/')->with(['lain' => 'Terjadi kesalahan.']);
    }
}
