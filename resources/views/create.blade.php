@extends('layouts.app')

@section('content')
<form action="/playlistscreate" method="post">
  @csrf
  <input type="text" name="name" placeholder="Name">
  <input type="file" name="Image" placeholder="Picture">
  <button type="submit">Add</button></a>
</form>
@endsection
