<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\MusicData;

class AlbumsController extends Controller
{
  public function index() {
    $albums = Album::all();

    return view('album', compact('albums'));
  }

  public function storeAlbums(Request $request) {
      $albums = new Album;
      $music = new MusicData;
      $lastId = $albums->id;

      $albums->Name = request('Name');

      //WORKING WITH IMAGES
      if(request()->hasFile('pic')){
      $picInfo = $request->file('pic');
      if(!$picInfo->isValid()) {
        return back()->with('error', $picInfo->getErrorMessage());
      }
      $picName = $lastId.$picInfo->getClientOriginalName();

      $folder = 'pImage_a/';

      $picInfo->move($folder, $picName);
      $picUrl = $folder.$picName;
    } else {
      $picUrl = url('pImage_a/nopic.png');
    }

      $albums->Image = $picUrl;
      $albums->Artist = request('Artist');
      $albums->save();
      return redirect('/albums');
    }
}
