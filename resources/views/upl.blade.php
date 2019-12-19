  @extends('layouts.app')

  @section('content')
  <div class="w3-panel w3-black">
      <p class="uploadtext"> Add Music </p>
  </div>
  <form action="/uploadmusic" method="post" enctype="multipart/form-data">
    <div class="card-body">
      <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="form-group row">
              <label for="Name" class="col-md-4 col-form-label text-md-right">TRACK NAME</label>

              <div class="col-md-6">
                  <input type="text" class="form-control" name="Name" placeholder="TrackName">

          </div>
          </div>
          <div class="form-group row">
              <label for="Album" class="col-md-4 col-form-label text-md-right">ALBUM</label>

              <div class="col-md-6">
                  <input type="text" class="form-control" name="Album" placeholder="AlbumName">

              </div>

          </div>
          <div class="form-group row">
              <label for="Artist" class="col-md-4 col-form-label text-md-right">ARTIST</label>

              <div class="col-md-6">
                  <input type="text" class="form-control" name="Artist" placeholder="Artist">

              </div>

          </div>
          <div class="form-group row">
              <label for="Name" class="col-md-4 col-form-label text-md-right">IS FAVORITE</label>

              <div class="col-md-6">
                  <input type="text" class="form-control" name="isFavorite" placeholder="isFav">

              </div>

          </div>
          <div class="form-group row">
              <label for="Name" class="col-md-4 col-form-label text-md-right">DURATION</label>

              <div class="col-md-6">
                  <input type="text" class="form-control" name="dur" placeholder="Duration">

              </div>

          </div>
          <div class="form-group row">
            <label for="Name" class="col-md-4 col-form-label text-md-right">Music File</label>
              <div class="col-md-6">
                  <input type="file" class="form-control" name="music">
                  <button type="submit" class="btn btn-primary" style="margin: 10px;
                  font-size: 16px; font-family: Open Sans Condensed;">Upload [ADD] New track</button>
              </div>
          </div>
    </div>
</form>

<div class="w3-panel w3-black">
    <p class="uploadtext"> Add Albums </p>
</div>

<div class="card-body">
    <form action="/uploadalbums" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group row">
          <label for="Name" class="col-md-4 col-form-label text-md-right">ALBUM NAME</label>

      <div class="col-md-6">
          <input type="text" class="form-control" name="Name" placeholder="Album">
      </div>
      </div>
      <div class="form-group row">
          <label for="Name" class="col-md-4 col-form-label text-md-right">ARTIST</label>

      <div class="col-md-6">
          <input type="text" class="form-control" name="Artist" placeholder="Artist">
      </div>
      </div>
      <div class="form-group row">
          <label for="Name" class="col-md-4 col-form-label text-md-right">Album Preview</label>

      <div class="col-md-6">
          <input type="file" class="form-control" name="pic" placeholder="Picture">
          <button type="submit" class="btn btn-primary" style="margin: 10px;
          font-size: 16px; font-family: Open Sans Condensed;">Upload [ADD] New Album</button>
      </div>
      </div>
    </form>
</div>
  @endsection
