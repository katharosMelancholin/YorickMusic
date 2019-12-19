@extends('layouts.app')

@section('content')
</div>
<p class="title-text">ALBUMS</p>
<a href="{{ url('/upload') }}" class="w3-btn w3-block btext w3-black">
  ADD ALBUM</a>
  <?php foreach ($albums as $album): ?>
    <div class="pcards">
        <div class="w3-card-4">
          <a class="linkhover" href="">
          <img class="preview" src="{{ $album->Image }}"></img>
            <div class="w3-container">
              <p class="ptext">{{$album->Name}}</p>
          </a>
            </div>
        </div>
    </div>
  <?php endforeach; ?>
</div>
@endsection
