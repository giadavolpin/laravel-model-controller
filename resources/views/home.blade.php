@extends('layouts.app');

@section('content')
	<section class="container">
		<ul>
			@foreach ($movies as $movie)
				<li>{{$movie->title}}{{$movie->date}}</li> 
			@endforeach
		</ul>
	</section>
@endsection

