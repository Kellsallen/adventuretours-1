@extends('default')
@section('title')- Contact Us
@stop
@section('content')
@php 
$img='banners/'.$pic['photo'];
@endphp
<section class="module parallax" style="background-image: url({{$img}})">
</section>
<!--
<section class="wrapper style5">
<div class="container">
<header>
</header>
</div>
</section>-->
<!-- Main -->
<div id="main-wrapper">
<div id="main" class="container">

<!-- Row 1 -->
<section class="wrapper style1 special">
<div class="container"><br>
<header class="major">
<br>
<h2>~ Get In Touch ~</h2>
</header>
<div class="jumbotron" style="background: #FFFFFF; border-radius:0px;">
<h3 class="text-center">Thoughts? Questions? Concerns? Kuddos?<br>We'd love to hear from you!</h3>
<br>
<br>
<form class="form-horizontal" method="post" action="/contact">
	{{csrf_field()}}
	<div class="form-group">
		<div class="col-sm-8 col-sm-offset-2">
		@if(Session::has('success'))
			<div class="alert alert-success">
				{{Session::get('success')}}
			</div>
		@endif
	
			</div>
	</div>
<div class="form-group {{$errors->has('name') ? 'has-error':''}}">
<div class="col-sm-8 col-sm-offset-2">
<input type="text" name="name"  class="form-control" placeholder="Name">
@if($errors->has('name'))
<span class="help-block">{{$errors->first('name')}}</span>
@endif
</div>
</div>

<div class="form-group">
<div class="col-sm-8 col-sm-offset-2">
<input type="email" name="text" class="form-control" placeholder="Phone # (optional)">
</div>
</div>
	<div class="form-group {{$errors->has('email') ? 'has-error':''}}">
		<div class="col-sm-8 col-sm-offset-2">
			<input type="email" name="email"  class="form-control" placeholder="Email Address">
			@if($errors->has('email'))
<span class="help-block">{{$errors->first('email')}}</span>
@endif
		</div>
	</div>
<div class="form-group {{$errors->has('name') ? 'has-error':''}}">
<div class="col-sm-8 col-sm-offset-2">
<textarea name="message" placeholder="Message" class="form-control" ></textarea>
	@if($errors->has('message'))
<span class="help-block">{{$errors->first('message')}}</span>
@endif

	
</div>
</div>
<div class="form-group">
<div class="col-sm-8 col-sm-offset-2">
	<p style="
    text-align: left;
    margin: 0;
    padding: 1em 0 0 0;
">We'll be in touch within 24 hours!</p>
</div>
</div>
<div class="form-group">
<div class="col-sm-8 col-sm-offset-2">
<button type="submit" class="button btn btn-primary">Send Message</button>
</div>
</div>
</form>
<div class="container" >
<hr>
<h3 class="text-center">Contact Info</h3><br>
<p id="contact-info"><i class="fa fa-phone" aria-hidden="true"></i>619-962-7622</p>
<p id="contact-info"><i class="fa fa-envelope"></i>info@adventuroustravelers.net</p>
<p id="contact-info"><i class="fa fa-envelope-o" aria-hidden="true"></i>771 Jamacha Rd. #316 El Cajon, CA 92019</p>
<hr>
</div>
<div class="container">
<h3 class="text-center">Follow us/stay connected!</h3>
<br>
<p id="contact-info"><i class="fa fa-facebook-official"></i><a href="https://www.facebook.com/theadventuroustravelers/">https://www.facebook.com/theadventuroustravelers/</a></p>
<p id="contact-info"><i class="fa fa-instagram" ></i><a href="https://www.instagram.com/adventuroustravelers/">https://www.instagram.com/adventuroustravelers/</p></a>
<br>
</div>
</div><!--end row-->
</div>
</section>
</div>

</div>
</div>
</section>

<!-- end main -->
</div>
<!-- CTA -->
<section id="cta" class="wrapper style3">
<div class="container">
<header>
<h2 class="ad">Fit enough for your trip?
<a href="#">Click to get fit</a></h2>
</header>
</div>
</section>
</div><!--end main-->

@stop