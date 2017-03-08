@extends('default')
@section('title')- Gallery
@stop
@section('content')
@php 
$img='banners/'.$pic['photo'];
@endphp
<section class="module parallax" style="background-image: url({{$img}})">
</section>

<div id="main-wrapper">
<div id="main" class="container">

<!-- Row 1 -->
<section class="wrapper style1 special">
<div class="container"><br>
<header class="major">
<br>
<h2>~ Gallery ~</h2>
</header>
<div class="row">
<div class="col-sm-12">
<section class="box feature" style="height:auto;">
<div class="adventure itinerary" style="height:auto">
<!-- SnapWidget -->
<script src="https://snapwidget.com/js/snapwidget.js"></script>
<iframe src="{{$urls->url_link}}" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>
</div>
</section>
</div>

</div>
</div>
</section>

<!-- end main -->
</div>

@stop