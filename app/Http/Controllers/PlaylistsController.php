<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Playlist;

class PlaylistsController extends Controller
{
    public function index() {
      $playlists = Playlist::all();

      return view('index', compact('playlists'));
    }

    public function create() {
      return view ('create');
    }

    public function store() {
      $playlist = new Playlist;

      $playlist->Name = request('name');
      $playlist->Image = request('Image');
      $playlist->save();
      return redirect('/playlists');
    }

    public function current($id) {
      $playlist = Playlist::where('id', '=', $id)->first();

      if(is_null($id)) {
        abort(404);
      }

      return view ('id', ['id' => $id]);
    }
}
