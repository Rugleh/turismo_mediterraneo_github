@extends('app')

@section('content')

<section id="section-carousel">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            
            <div class="carousel-item img-container active">
				<img class="fitcover" src="{{ Voyager::image( $continent->image ) }}" alt="First slide">
				<div class ="front-image-text text-center">
					<h2 class="big-text">{{ $continent->name}}</h2>
					
				</div>
			</div>
			
		</div>
	</div>
</section>

<section id="section-usd">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="float-left">1 USD = {{$home->usd}} CLP</div>
            </div>

            <div class="col">
                <div class="float-right">{{date("j/n/Y")}}</div>
            </div>
        </div>
    </div>
</section>


<section id="section-countries">
	<br>

		<h2 class="text-center">Destinos</h2>
        <h5 class="text-center">Los mejores destinos en {{ $continent->name }} </h5>

    <br>
    <br>

	<div class="container">
        <div class="row">
			<div class="card-deck">
				@foreach($countries as $country)
				<div class="col-md-4 padding-b-30">
					<div class="card">
						<a href="{{$continent->slug}}/{{ $country->slug }}">
							<h3 class="front-image-text">{{ $country->name }}</h3>
							<img class="card-img-top card-img black-screen" src="{{ Voyager::image( $country->image ) }}" alt="{{ $country->name }}">
						</a>
					</div>
				</div>
				@endforeach
			</div>
           
        </div>

    </div>
</section>

<br>
<br>
	
@endsection