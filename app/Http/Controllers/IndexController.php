<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Song;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $albums = Album::paginate(4);
        // dd($album->toArray());
        return view('Index', compact('albums'));
    }
    public function view_album(Request $request)
    {
        $id = decrypt($request->id);
        $album = Album::with('songs', 'comments.user')->orderBy('id', 'DESC')->find($id);
        return view('album_info', compact('album'));
    }

    public function songe_info(Request $request)
    {
        $id = decrypt($request->id);
        $song = Song::with('album', 'comments.user')->orderBy('id', 'DESC')->find($id);
        // dd($song->toArray());
        return view('song_info', compact('song'));
    }
}
