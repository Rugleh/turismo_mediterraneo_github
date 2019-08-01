@extends('app')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h1>{{ $tour->name }}</h1>
				<img src="{{ Voyager::image( $tour->image ) }}" style="width:100%">
				<p>{!! $tour->description !!}</p>

			</div>
		</div>
	</div>

@endsection