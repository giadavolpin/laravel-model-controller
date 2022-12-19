@extends('layouts.app');

@section('titolo','Movies')

@section('content')
<h1>Film</h1>
    @forelse ($movies as $key=>$Movie )
        <p>{{$movies->title}}</p>
    @empty
        <p>No film</p>
    @endforelse
@endforelse