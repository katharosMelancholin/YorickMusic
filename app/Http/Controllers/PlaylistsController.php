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

    public function store(Request $request) {
      $playlist = new Playlist;
      $lastId = $playlist->id;

      $playlist->Name = request('name');

      //WORKING WITH IMAGES
      if(request()->hasFile('pic')){
      $picInfo = $request->file('pic');
      if(!$picInfo->isValid()) {
        return back()->with('error', $picInfo->getErrorMessage());
      }
      $picName = $lastId.$picInfo->getClientOriginalName();

      $folder = 'pImage/';

      $picInfo->move($folder, $picName);
      $picUrl = $folder.$picName;
    } else {
      $picUrl = url('pImage/nopic.png');
    }

      $playlist->Image = $picUrl;

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
