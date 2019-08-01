@extends('app')



@section('content')



<section id="section-carousel">

    <div id="carousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

            <?php $first = true; ?>

            @foreach($tours as $tour)

            @if($first)

            <div class="carousel-item img-container active">

                <?php $first = false; ?>

            @else

                <div class="carousel-item img-container">

            @endif

                    <?php

                        $data = $tour->program;

                        $split = explode('"', $data);

                        $download_final = @$split[3];

                    ?>

                    <a href="/storage/{{ $download_final }}">

                        <img class="fitcover" target="_blank" src="{{ Voyager::image( $tour->image ) }}" alt="First slide">

                        <div class ="front-image-text text-center">

                            <div class="row">

                                <div class="col-md-12">

                                    <h2 class="home-tour-title">{{ $tour->name}}</h2>

                                    <hr size="30" class="country-hr">

                                    <h3 class="home-tour-route">{{$tour->route}}</h3>

                                </div>

                            </div>

                            <hr size="30" class="country-hr">

                            <div class="row home-tour-others">

                                <div class="col-md-4">

                                    <p> <b> <i class="fas fa-arrow-down green">
                                    </i> Desde 
                                        @if ($tour->eur != null)
                                            €{{ $tour->eur}} EUR 
                                        @elseif($tour->usd != null)
                                            ${{$tour->usd}} USD
                                        @else
                                            por definir 
                                        @endif
                                        </b>
                                            <br> Valor por persona en habitación doble </p>

                                </div>

                                <div class="col text-center">

                                    <p> <b><i class="fas fa-sun"></i> {{$tour->days}} días </b>  </p>
                                    <p> <b><i class="fas fa-moon"></i> {{$tour->nights}} noches</b>  </p>


                                </div>

                                <div class="col align-right">

                                    <p> <b> <i class="fas fa-calendar-day"></i>  {{ $tour->dates}} </b> </p>

                                </div>

                            </div>

                        </div>

                    </a>

                    

                </div>

                @endforeach



            </div>

            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">

                <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                <span class="sr-only">Previous</span>

            </a>



            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">

                <span class="carousel-control-next-icon" aria-hidden="true"></span>

                <span class="sr-only">Next</span>

            </a>

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



<section id="section-offer">



    <br>

    <br>



    <div class="container">



        <h2 class="text-center">{{$home->title_1}}</h2>

        <p class="text-center">{{$home->subtitle_1}}</p>



        <br>



        <div class="row">

            <div class="col">

                <div class="card-deck">

                    @foreach($offers as $offer)



                    <div class="card">

                        <?php

                            $data = $offer->program;

                            $split = explode('"', $data);

                            $download_final = @$split[3];

                        ?>

                        <a href="/storage/{{ $download_final }}">

                            <img class="card-img-top card-img" src="{{ Voyager::image( $offer->thumbnail('cropped'))}}" alt="Card image cap">

                        </a>

                        <div class="card-body">

                            <h5 class="card-title align-left"><b>{{$offer->name}}</b></h5>

                            <p class="card-text">{{$offer->route}} </p>

                            

                        </div>



                        <div class="card-footer">


                            <p class="gray"><i class="fas fa-sun"></i> {{$offer->days}} días - {{$offer->nights}} noches</p>

                            <p class="gray"><i class="fas fa-calendar-day"></i> {{$offer->dates}} </p>

                            <div class="row">

                            <div class="col">

                                <i class="fas fa-arrow-down green"></i>  
                                        @if ($offer->eur != null)
                                            €{{ $offer->eur}} EUR 
                                        @elseif($offer->usd != null)
                                            ${{$offer->usd}} USD
                                        @else
                                            $ a definir 
                                        @endif

                            </div>

                            </div>
                            <br>
                            <div class="row">

                                <a href="/storage/{{ $download_final }}" target="_blank" class=" w-100 card-footer btn btn-red text-center white">

                                    Más información

                                </a>

                            </div>
                            

                        </div>


                    </div>



                    @endforeach

                </div>

            </div>

        </div>



    </div>



    <br>



    <section id="section-subscribe">

        <br>

        <div class="container">

            <div class="card w-100">

                <div class="card-body">

                    <div class="row">

                        <div class="col-md-3 text-center">

                        <br>

                            <img src="{{ asset('images/imac.svg') }}" width="50%" alt="">

                        </div>

                        <div class="col-md-5">

                            <br>
                            <br>

                            <h5 class="card-title padding-top">Mantente Actualizado</h5>

                            <p>Suscríbete y recibe emails con las últimas tendencias y ofertas en programas de turismo.</p>

                        </div>

                        <div class="col-md-4">

                            <br>

                        <!-- <form class="form-inline "> -->

                            <!-- <input class="form-control no-border w-100-mobile" type="search" placeholder="tu correo@mail.com" aria-label="correo@mail.com">

                            <button class="btn btn-primary no-border w-100-mobile" type="submit">¡Suscríbeme!</button> -->

                            <!-- Begin Mailchimp Signup Form -->
                                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                                <style type="text/css">
                                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                                    /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                                    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                                </style>
                                <div id="mc_embed_signup">
                                <form action="https://turismomediterraneo.us19.list-manage.com/subscribe/post?u=4c456368d00800dcbbdef2861&amp;id=d94cc19e49" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate form-inline" target="_blank" novalidate>
                                    <div id="mc_embed_signup_scroll">

                                <div class="mc-field-group">
                                    <label for="mce-EMAIL">Correo<span class="asterisk">*</span>
                                </label>
                                    <input type="email" value="" name="EMAIL" class="form-control no-border w-100-mobile required email" id="mce-EMAIL">
                                </div>
                                <div class="mc-field-group" hidden>
                                    <label for="mce-FNAME">Nombre</label>
                                    <input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
                                </div>
                                <div class="mc-field-group" hidden>
                                    <label for="mce-PHONE">Teléfono </label>
                                    <input type="text" name="PHONE" class="form-control" value="" id="mce-PHONE">
                                </div>
                                <div class="mc-field-group" hidden>
                                    <label for="mce-COMENTARIO">Comentario </label>
                                    <textarea class="form-control" rows="5" type="text" value="" name="COMENTARIO" id="mce-COMENTARIO">
                                    </textarea>
                                </div>
                                <div class="mc-field-group" hidden>
                                    <label for="mce-ORIGEN">Origen </label>
                                    <input type="text" name="ORIGEN" class="form-control" value="/Home" id="mce-ORIGEN">
                                </div>

                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px; width: 100%;" aria-hidden="true"><input type="text" name="b_4c456368d00800dcbbdef2861_d94cc19e49" tabindex="-1" value=""></div>
                                    <div class="clear"><input type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-primary no-border w-100-mobile"></div>
                                    </div>
                                </form>
                                </div>
                                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[4]='PHONE';ftypes[4]='phone';fnames[2]='COMENTARIO';ftypes[2]='text';fnames[3]='ORIGEN';ftypes[3]='text'; /*
                                * Translated default messages for the $ validation plugin.
                                * Locale: ES
                                */
                                $.extend($.validator.messages, {
                                });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                                <!--End mc_embed_signup-->


                       <!--  </form> -->

                        </div>

                    </div>

                    

                </div>

            </div>

            

        </div>

        <br>

    </section>

</section>



<section id="section-continents">

    <!-- <h1 class="text-center"><small> Destinos </small></h1> -->

    <br>

    <br>



    <div class="container">



        <div class="row">

            <div class="col">

                <div class="card-deck">

                    @foreach($continents as $continent)

                    <div class="card img-container">

                        <a href="/destinos/{{ $continent->slug }}">

                            <h3 class="front-image-text">{{ $continent->name }}</h3>

                            <img class="card-img-top card-img" src="{{ Voyager::image( $continent->thumbnail('cropped') ) }}" alt="{{ $continent->name }}">

                        </a>

                    </div>

                    @endforeach

                </div>

            </div>

        </div>



    </div>



</section>

<br>

<br>



@endsection