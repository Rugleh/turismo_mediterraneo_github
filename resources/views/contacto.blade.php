@extends('app')


@section ('content')

<section id="section-carousel">

    <div id="carousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner">

            

            <div class="carousel-item img-container active">

            <img class="fitcover" src="{{ Voyager::image( $contact->image ) }}" alt="{{$contact->page}} ">

				<div class ="front-image-text text-center">

					<h2 class="big-text">Contacto</h2>

					

				</div>

			</div>

			

		</div>

	</div>

</section>


<div class="container">
<div class="row">
    <div class="col-md-6">
    <br>
    <br>
    <br>
        {{$contact->text }}
    <br>
    <br>
        <p><b>¿Desea reservar uno de nuetros programas?</b></p>
       
        <p>Puedo hacerlo directamente en este formulario, escribiendos al correo <a href="mailto:reservas@turismomediterraneo.cl"> reservas@turismomediterraneo.cl </a> o llamándonos al <a href="tel:+56222363298"> +(562)22363298 </a></p>

        <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3329.9100846010683!2d-70.61851458480123!3d-33.42558848078113!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cf638d2284bb%3A0x73ca5f34d3d220a1!2sPadre+Mariano+103%2C+Providencia%2C+Regi%C3%B3n+Metropolitana!5e0!3m2!1ses!2scl!4v1558404797215!5m2!1ses!2scl" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <br>
    <br>
    <div class="col-sm-4 offset-sm-1 contact-form"> 
    <!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://turismomediterraneo.us19.list-manage.com/subscribe/post?u=4c456368d00800dcbbdef2861&amp;id=d94cc19e49" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	<br>
<div class="indicates-required"><span class="asterisk">*</span> Requerido</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Correo<span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-FNAME">Nombre</label>
	<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-PHONE">Teléfono </label>
	<input type="text" name="PHONE" class="form-control" value="" id="mce-PHONE">
</div>
<div class="mc-field-group">
	<label for="mce-COMENTARIO">Comentario </label>
    <textarea class="form-control" rows="5" type="text" value="" name="COMENTARIO" id="mce-COMENTARIO">
    </textarea>
</div>
<div class="mc-field-group" hidden>
	<label for="mce-ORIGEN">Origen </label>
	<input type="text" name="ORIGEN" class="form-control" value="/Contacto" id="mce-ORIGEN">
</div>

	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_4c456368d00800dcbbdef2861_d94cc19e49" tabindex="-1" value=""></div>
    <div class="clear"><input width="100%" type="submit" value="Enviar" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[4]='PHONE';ftypes[4]='phone';fnames[2]='COMENTARIO';ftypes[2]='text';fnames[3]='ORIGEN';ftypes[3]='text'; /*
 * Translated default messages for the $ validation plugin.
 * Locale: ES
 */
$.extend($.validator.messages, {
  required: "Este campo es obligatorio.",
  remote: "Por favor, rellena este campo.",
  email: "Por favor, escribe una dirección de correo válida",
  url: "Por favor, escribe una URL válida.",
  date: "Por favor, escribe una fecha válida.",
  dateISO: "Por favor, escribe una fecha (ISO) válida.",
  number: "Por favor, escribe un número entero válido.",
  digits: "Por favor, escribe sólo dígitos.",
  creditcard: "Por favor, escribe un número de tarjeta válido.",
  equalTo: "Por favor, escribe el mismo valor de nuevo.",
  accept: "Por favor, escribe un valor con una extensión aceptada.",
  maxlength: $.validator.format("Por favor, no escribas más de {0} caracteres."),
  minlength: $.validator.format("Por favor, no escribas menos de {0} caracteres."),
  rangelength: $.validator.format("Por favor, escribe un valor entre {0} y {1} caracteres."),
  range: $.validator.format("Por favor, escribe un valor entre {0} y {1}."),
  max: $.validator.format("Por favor, escribe un valor menor o igual a {0}."),
  min: $.validator.format("Por favor, escribe un valor mayor o igual a {0}.")
});}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

    </div>
</div>
</div>




@endsection