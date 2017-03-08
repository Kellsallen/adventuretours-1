@extends('default')
@section('title')- Adventures
@stop
@section('content')
@php 
$img='banners/'.$pic['photo'];
@endphp
<section class="module parallax" style="background-image: url({{$img}})">
</section>

<!-- Main -->
<div id="main-wrapper">
<div id="main" class="container">

<!-- Row 1 -->
<section class="wrapper style1 special">
<div class="container"><br>
	<header class="major">
		<br>
		<h2>~ Adventures ~</h2>
		<p>These tours get your heart pumping; challenging your body and mind. These adventures are designed for the fit travelers looking to get a workout whilst exploring their destination.</p>
	</header>
	<div class="row">
     @foreach($adventures as $adventures)
		<span class="4u 12u(mobile)">
			<div class="margin-1-bottom">
				<section class="box feature">
					<a href="#" class="image featured"><img src="/uploads/adventures/{{$adventures->a_image}}"  style="height:300px;"alt=""/></a>
				</section>
			</div>
			<div>
				<section class="box feature" style="height:auto;">
					<br>
					<h3 class="adventures">{{$adventures->title}}</h3>
					<hr class="adventures">
					<div>
						<p>
							{{$adventures->description}}
						</p>
					</div>
					<a href="../adventures/active/catalina.html" class="button"><p>{{$adventures->other_details}}</p></a>
				</section>
			</div>
		</span>
		@endforeach

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
		<a href="../fitness/fitness.html">Click to get fit</a></h2>
	</header>
</div>
</section>
</div><!--end main-->

@stop