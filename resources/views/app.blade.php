@section('head')

    <!doctype html>

    <html lang="en">

    <head>

        <!-- Required meta tags -->

            <meta charset="utf-8">

            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <meta name="Description" content="Los mejores programas de turismo estan a un click de distancia, descubra Europa, Asia y Africa junto a nosotros">



            <!-- Bootstrap CSS -->

            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

            <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}" >

            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <title>Turismo Mediterraneo: Tour Operator</title>

    </head>

@show

  



@section('nav')

    <body>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/logo5.png') }}" class="logo" alt=""></a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

</button>



<div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

    <li class="nav-item active">

        <a class="nav-link" href="/"><i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>

    </li>

    

    <li class="nav-item dropdown">

        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

        <i class="fas fa-map"></i> Destinos

        </a>

        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

        <a class="dropdown-item" href="/destinos/asia">Asia</a>

        <a class="dropdown-item" href="/destinos/africa">Africa</a>

        <a class="dropdown-item" href="/destinos/europa">Europa</a>

        <a class="dropdown-item" href="/destinos/medio-oriente">Medio Oriente</a>

        <a class="dropdown-item" href="/destinos/destinos-lejanos">Destinos Lejanos</a>

        </div>

    </li>



    <li class="nav-item">

        <a class="nav-link" href="/nosotros"><i class="fas fa-users"></i> Nosotros</a>

    </li>



    <li class="nav-item">

        <a class="nav-link" href="/contacto"><i class="fas fa-envelope"></i> Contacto </a>

    </li>



    </ul>



    <ul class="navbar-nav right">

    <li class="nav-item">

        <a class="nav-link" href="http://turismomediterraneo.cl.psurfer.net/security/login.html"><i class="fas fa-globe-americas"></i> Hoteles Online</a>

    </li>

   

<ul>

</div>



            
            </div>

            

        </nav>

@show



@section('content')

    

@show



@section('js')



<section id="section-footer">

    <footer class="text-muted">

        <br>

    

      <div class="container col-md-8">

          <div class="row">

              <div class="col-md-4 col-xs-12">

                <h3 class="text-center footer-title">Nuestra empresa</h3>

                    <hr>

                <p>

                    {{$home->our_company}}

                </p>

                <img class="mx-auto d-block sello" src="{{ asset('images/sello.svg') }}" width="200px" alt=""> <br>

                © Turismo Mediterraneo - 2019 Todos los derechos reservados

              </div>

              <div class="col-md-4 col-xs-12">

                <h3 class="text-center footer-title">Redes Sociales</h3>

                <hr>

                <p>{{$home->social_networks}}</p>

                <p><a href="{{$home->facebook}}"><i class="fab fa-facebook"></i> Facebook</a></p>

                <p><a href="{{$home->instagram}}"><i class="fab fa-instagram"></i> Instagram</a></p>

                <p><a href="{{$home->linkedin}}"><i class="fab fa-linkedin"></i> LinkedIn</a></p>

                

              </div>

              <div class="col-md-4 col-xs-12">

                <h3 class="text-center footer-title">Contáctenos</h3>

                <hr>

                <p><i class="fas fa-phone"></i> <a href="tel:{{$home->phone}}"> {{$home->phone}} </a></p>

                <p><i class="fas fa-envelope"></i> <a href="mailto:{{$home->email}}"> {{$home->email}} </a></p>

                <p><i class="fas fa-map-marker"></i> {{$home->address}}</p>

                <p><i class="fas fa-clock"></i> Horario de Atención</p>

                <p class="grey">Lunes a Viernes - 09:00 a 14:00 Hrs - 15:00 a 18:30 Hrs</p>

              </div>

          </div>

       

        <br>

      </div>

    </footer>

</section>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5cacb545557d5f68515bb736/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->

  </body>

</html>

@show