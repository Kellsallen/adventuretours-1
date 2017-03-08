@extends('default')
@section('title')- About Us 
@stop
@section('content')
@section('scripts')
<script src="../assets/js/doubletaptogo.js"></script>
<script>
$( function()
{
$( '#nav li:has(ul)' ).doubleTapToGo();
});
</script>
@stop
@php 
$img='banners/'.$pic['photo'];
@endphp
<section class="module parallax" style="background-image: url({{$img}})">
</section>


<!-- Main -->
<div id="main-wrapper">
<div id="main" class="container">
<!-- Gigantic Heading -->
<section class="wrapper style2">
<div class="container">
<br>
<header class="major">
<br>
<h2>~ Our Passion ~</h2>
<p>Our passion is simple; to get you outside, disconnected from electronics, work, and stress, and re-connected with nature, yourself, and each other.</p>
</header>
</div>
</section>
<!--	<div class="row">
<div class="12u(mobile)">
<section class="center">
<div class="featureimage"><img src="../images/offer.png" alt="" /></div>
<p>

</p>
</section>
</div>
</div>-->
<div class="row"><a name="whyus"></a>
<div class="12u(mobile)">
<section>
<div class="featureimage"><img src="../images/why.png" alt="" /></div>
<p>
Our purpose is to offer more active and affordable guided adventure packages to make it easier for you to explore more things. When you have more, you can create more. We are passionate about what you are passionate about - exploring new terrain whilst experiencing & quenching a thirst for life through adventures. We are committed to providing you with more active and affordable adventures that gets you enjoying more of the outdoors. We do this by keeping our costs low, building relationships, supporting locally owned businesses, obtaining unique and rugged accomodations for overnight adventures, and working smarter so you can enjoy the benefits.
</p>
<a name="ourpartners"></a>
<h3 style="text-align:center;"><b>Our Partners</b></h3><br>
<p>
<img src="../images/oologo.jpg" class="floatedleftsmall" alt=""/>
<b>We are proud to announce that we donate 5% of sales to the company Outdoor Outreach!</b><br>
"Our mission is to connect youth to the transformative power of the outdoors. Our vision is that youth everywhere will be inspired by the outdoors to play, learn, serve and share.""
</p>
<p>
<img src="../images/tourguideassociation.jpg" class="floatedleftsmall" alt=""/>
<b>Lindsay is a proudly certified member of the San Diego Professional Tour Guide Association.</b><br>
<b>Mission:</b>
"To enhance the visitor's experience in the San Diego region by ensuring a high standard of professionalism within the tour guide industry. (We accomplish this by providing certified tour guides and field staff who are experts in the San Diego region)."
</p>
</section>
</div>
</div>
<div class="row"><a name="yourguide"></a>
<div class="12u(mobile)">
<section>
<div class="featureimage"><img src="../images/guide.png" alt="" /></div>
<div class="image box">
<div class="floatedleft"><img src="../images/1.jpg" alt="" /></div>
<p>
A well traveled entrepreneur, Lindsay was born and raised in San Diego, California making her an expert guide in her own back yard. Lindsay's lust for adventure, the outdoors and new experiences grew at a young age and has traveled all over the US and international destinations. Lindsay has swam with sharks, conquered grueling terrain on some of the most dangerous trails, summitted breath-taking peaks and lived with locals in Costa Rica. Lindsay has been a certified trail guide since 2011 and you can rest assure that you will be safe on your trips knowing that you are traveling with a certified Wilderness First Responder which involves medical and evacuation training in remote locations and includes CPR certification.
Lindsay is passionate about getting people active in the outdoors. Lindsay can even get you fit for your outdoor excursion, big or small, as Lindsay is also a certified personal trainer.
Lindsay likes to help people live and not just exist. Her mantra/motto: "Life is a series of experiments; experiment adventurously!"
Book a trip with her today!
</p>
</div>
</section>
</div>
</div>
<!--end main-->
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