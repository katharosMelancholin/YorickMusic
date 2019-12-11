@extends('layouts.app')

@section('content')
<div class="Quotes">
<p id="QuoteText">"Crazy, but that's how it goes
millions of people living as foes
maybe it's not too late
to learn how to love and forget how to hate.
<br>
Mental wounds not healing
Life's a bitter shame
I'm going off the rails on a crazy train."</p>
<p id="AuthorText">Ozzy Osbourne</p>
</div>
      <div class="table-container">
        <table>
          <tr>
            <th> #ID </th>
            <th> TRACK </th>
            <th> ARTIST </th>
            <th> ALBUM </th>
            <th> DURATION </th>
          </tr>
      <?php foreach ($MusicData as $key => $data): ?>
        <tr class="Songs">
          <th id="column-data">{{$data->id}}</th>
          <th id="column-data">{{$data->Name}}</th>
          <th id="column-data">{{$data->Artist}}</th>
          <th id="column-data">{{$data->Album}}</th>
          <th id="column-data">{{$data->Duration}}</th>
      <?php endforeach; ?>
      </div>

@endsection
