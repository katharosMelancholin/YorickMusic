@extends('layouts.app')

@section('content')
<div class="w3-panel w3-black">
    <p class="uploadtext"> CREATE PLAYLIST </p>
</div>
<form action="/playlistscreate" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">PLAYLIST NAME</label>

      <div class="col-md-6">
          <input type="text" class="form-control" name="name" placeholder="Playlist">
  </div>
  </div>
  <div class="form-group row">
      <label for="name" class="col-md-4 col-form-label text-md-right">PLAYLIST PREVIEW</label>

      <div class="col-md-6">
          <input type="file" class="form-control" name="pic" placeholder="Playlist">
            <button type="submit" class="btn btn-primary" style="margin: 10px;
            font-size: 16px; font-family: Open Sans Condensed;">Create New Playlist</button>
  </div>
  </div>
</form>
@endsection
