@extends('app')

@section('content')

<section id="section-carousel">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            
            <div class="carousel-item img-container active">
				<img class="fitcover" src="{{ Voyager::image( $country->image ) }}" alt="{{$country->name}} ">
				<div class ="front-image-text text-center">
					<h2 class="big-text">{{ $country->name}}</h2>
					<hr size="30" class="country-hr">
					<h3 class="country-continent">{{$continent->name}} </h3>
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

<br>

<section id = "description">
	<br>
	<div class="container text-center">
		<h3 class="grey">{{$country->subtitle}} </h3>
		<br>
		<p>{{$country->description}}</p>
		<br>
		<hr>
	</div>
	
</section>


<br>
<br>


<section id="tours">
	<div class="container">

	<br>

	<div class="row">
			<div class="card-deck">
				@foreach($tours as $tour)
				<div class="col-md-4 padding-b-30">
					<div class="card">
						<?php
							$data = $tour->program;
							$split = explode('"', $data);
							$download_final = @$split[3];
						?>
						<a href="/storage/{{ $download_final }}">
							<img class="card-img-top card-img" src="{{ Voyager::image( $tour->image ) }}" alt="Card image cap">
						</a>
						<div class="card-body">
							<h5 class="card-title align-left"><b>{{$tour->name}}</b></h5>
							<p class="gray">{{$country->name}}</p>
							<p class="card-text">{{$tour->route}} </p>
							<p class="gray"><i class="fas fa-sun"></i> {{$tour->days}} días - {{$tour->nights}} noches</p>
							<p class="gray"><i class="fas fa-calendar-day"></i> {{$tour->dates}} </p>
							<div class="row">
								<div class="col">
									<i class="fas fa-plane"></i> 
                                        @if ($tour->eur != null)
											€{{ $tour->eur}} EUR 
                                        @elseif($tour->usd != null)
                                            ${{$tour->usd}} USD
                                        @else
                                            por definir 
                                        @endif
                                        </b>
                                     </p>

								</div>
								<div class="col">
									<a href="/storage/{{ $download_final }}" target="_blank" class="card-footer btn btn-red text-center white">
										Más información
									</a>
								</div>
							</div>
						</div>

					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	</div>
</section>

@endsection