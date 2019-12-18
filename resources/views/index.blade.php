@extends('layouts.app')

@section('content')
</div>
<p class="title-text">PLAYLISTS</p>
        <a href="{{route('pcreate')}}" class="w3-btn w3-block btext w3-black">
          CREATE PLAYLIST</a>
      <?php foreach ($playlists as $playlist): ?>
        <div class="pcards">
            <div class="w3-card-4">
              <a href="{{ url('/playlists', $playlist->id) }}">
              <img src="{{ $playlist->Image }}"></img>
                <div class="w3-container">
                  <p class="ptext">{{$playlist->Name}}</p>
              </a>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
</div>
@endsection
