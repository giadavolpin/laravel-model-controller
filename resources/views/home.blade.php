@extends('layouts.app');

@section('title')
		<section class="container">
  			  <ul>
   			     @foreach
                 {{route('film')}}
                {{--  ($movies as $movie)
       			     	<li>{{$movie->title}}</li> --}}
        		 @endforeach
   			 </ul>
		</section>
	@endsection