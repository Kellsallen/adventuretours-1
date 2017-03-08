@extends('default')
@section('title')-Destinations @stop
@section('content')
@php 
$img='banners/'.$pic['photo'];
@endphp
<section class="module parallax" style="background-image: url({{$img}})">
</section>
@stop