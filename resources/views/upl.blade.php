@extends('layouts.app')

@section('content')
<form action="{{url('upload')}}" method="post">
  @csrf
  <input type="text" name="Name" placeholder="Track name">
  <input type="text" name="Artist" placeholder="Artist">
  <input type="text" name="Album" placeholder="Album">
  <a href="{{route('submit')}}"><button type="submit">Submit</button></a>
</form>
@endsection
