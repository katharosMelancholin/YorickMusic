<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MusicData;

class MusicDataController extends Controller
{
  public function index() {
    $upload = MusicData::all();

    return view('upl', compact('upload'));
  }

  public function create() {
    //
  }

  public function storeMusic(Request $request) {
    $music = new MusicData;

    $lastId = $music->id;
    if(request()->hasFile('music')) {
      $musicInfo = $request->file('music');

      if(!$musicInfo->isValid()) {
        return back()->with('error', $picInfo->getErrorMessage());
      }

      $musicName = $lastId.$musicInfo->getClientOriginalName();
      $folder = 'pMusic/';

      $musicInfo->move($folder, $musicName);
      $musicUrl = $folder.$musicName;
    } else {
      $musicUrl = NULL;
    }

    $music->Music = $musicUrl;
    //WORKING WITH MUSIC DB
    $music->Name = $request->Name;
    $music->Artist = $request->Artist;
    $music->Album = $request->Album;
    $music->isFavorite = $request->isFavorite;
    $music->Duration = request('dur');

    $music->save();

    return redirect('/upload');
  }

}
