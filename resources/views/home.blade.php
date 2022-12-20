<<<<<<< HEAD
@extends('layout.app')
	@section('content')
		<h1> prova
	@endsection
=======
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

{{-- 
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> --}}
>>>>>>> e7fb1cd381c749f4cd1813226d3cc843b99f0b4b
