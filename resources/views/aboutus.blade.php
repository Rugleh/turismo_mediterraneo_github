@extends('app')


@section ('content')

<section id="section-carousel">

    <div id="carousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

            

            <div class="carousel-item img-container active">

            <img class="fitcover" src="{{ Voyager::image( $aboutus->image ) }}" alt="{{$aboutus->name}} ">

				<div class ="front-image-text text-center">

					<h2 class="big-text">Nosotros</h2>

					

				</div>

			</div>
 
			

		</div>

	</div>

</section>


<div class="container">
<div class="row">
    <div class="col-sm-8 offset-sm-2 aboutus">
    <br>
    <br>
    <br>
    <h2 class="text-center">Turismo Mediterraneo</h2>
    <br>
        <p>
        {{ $aboutus->text }}

        </p> 
        
        
    </div>
    <br>
    <br>
    
</div>
</div>




@endsection