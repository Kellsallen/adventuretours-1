<body class="homepage">
		<div id="page-wrapper">

			<!-- Header
				<header id="header">
					<div class="logo container">
						<div>
						</div>
					</div>
				</header> -->
				<!--
				<div id='cssmenu'>
				<ul>
				   <li class="active"><a href='./index.html'><span>Home</span></a></li>
					 <li><a href='./about/about.html'><span>About</span></a></li>
				   <li><a href='./destinations/destinations.html'><span>Destinations</span></a></li>
					 <li><a href='./adventures/adventures.html'><span>Adventures</span></a></li>
					 <li><a href='./fitness/fitness.html'><span>Fitness</span></a></li>
					 <li><a href='./gallery/gallery.html'><span>Gallery</span></a></li>
				   <li class='last'><a href='./contact/contact.html'><span>Contact</span></a></li>
				</ul>
			</div>-->
 
	<nav id="nav" class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
	        <i class="sr-only">Toggle navigation</i>
	        <i class="icon-bar"></i>
	        <i class="icon-bar"></i>
	        <i class="icon-bar"></i>
	      </button>
	    </div>
		{{-- <a href="#nav" title="Show navigation">Show navigation</a> --}}
		{{-- <a href="#" title="Hide navigation">Hide navigation</a> --}}
		<div class="navbar-collapse collapse" id="collapseExample">
	      <ul class="nav navbar-nav">
			{{-- <ul class="clearfix"> --}}
				<li class="{{Request::is('index') ? "active":""}}"><a href="{{route('index')}}">Home</a></li>
				<li class="{{Request::is('about') ? "active":""}}"><a href="{{route('about')}}" aria-haspopup="true"><span>About&nbsp;&nbsp;&nbsp;</span></a>
					<ul>
						<li><a href="{{route('about')}}{{'#whyus'}}">Why Us</a></li>
						<li><a href="{{route('about')}}{{'#ourpartners'}}">Our Partners</a></li>
						<li><a href="{{route('about')}}{{'#yourguide'}}">Meet Your Guide</a></li>
					</ul>
				</li>
				<li class="{{Request::is('destinations') ? "active":""}}">
					<a href="{{route('destinations')}}" aria-haspopup="true"><span>Destinations</span></a>
					<ul>
						<li><a href="./destinations/sandiego.html">San Diego</a></li>
						<li><a href="./destinations/costarica.html">Costa Rica</a></li>
						<li><a href="./destinations/hawaii.html">Hawaii</a></li>
					</ul>
				</li>
				<li class="{{Request::is('adventures') ? "active":""}}">
					<a href="{{route('adventures')}}"><span>Adventures</span></a>
				</li>
				<li class="{{Request::is('fitness') ? "active":""}}"><a href="{{route('fitness')}}">Fitness</a></li>
				<li class="{{Request::is('gallery') ? "active":""}}"><a href="{{route('gallery')}}">Gallery</a></li>
				<li class="{{Request::is('contact') ? "active":""}}"><a href="{{route('contact')}}">Contact</a></li>
			</ul>
		</div>
	</div>	
</nav> 
