@extends('default')
@section('title')- Home 
@stop
@section('content')
@php 
$img='banners/'.$pic['photo'];
@endphp
<section class="module parallax " style="background-image: url({{$img}})">
<span class="parallax img"><img src="./images/AdventurousCircle.png" alt="" /></span>
<h1>Adventurous Travelers</h1>
</section>

<!-- Main -->
<div id="main-wrapper">
<div id="main" class="container"><a name="features">
<!-- Gigantic Heading -->
<section class="wrapper style2">
<div class="container">
<header class="major">
<a href="#features"<span class="arrow"><img src="./images/arrow.jpg" alt="" /></span></a>
<p>The more active and affordable guided adventure travel company.<br></p><p style="font-weight:initial;">Our passion is simple; to get you active outside - disconnected from electronics, work, stress and reconnected with nature, yourself and eachother; all affordably so you have more to play more.</p>
</header>
</div>
</section>

<!-- Row 1 -->
<section class="wrapper style1 special">
<div class="container">
<h2 class="major"><span>Featured Destinations</span></h2></div>
<div class="row">
  @foreach($destinations as $destinations)
<div class="col-sm-4">
	<div class="margin-1-bottom">
		<section class="box feature">
			<a href="#" class="image featured"><img src="{{url('uploads/destinations/'.$destinations->d_image)}}" alt=""  style="height:300px;"/></a>
		</section>
	</div>
	<div>
		<section class="box feature" style="height:auto;">
			<br>
			<h3>{{$destinations->name}}</h3>
			<div>
				<p>
					{{$destinations->description}}
				</p>
			</div>
			<a href="{{url('/')}}" class="button"><p>{{$destinations->other_details}}</p></a>
		</section>
	</div>
</div>
		@endforeach

<!--end row-->
</div>
</section>
<!-- END 12 columns -->
</div>
<!-- END outer row -->
</div>
<!-- CTA -->
<section id="cta" class="wrapper style3">
<div class="container">
<header>
<h2 class="ad">Fit enough for your trip?
<a href="./fitness/fitness.html">Click to get fit</a></h2>
</header>
</div>
</section>
</div><!--end main-->
@stop