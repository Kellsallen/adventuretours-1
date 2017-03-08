<!DOCTYPE HTML>

<!--
Description: Adventurous Traveler's Company
Authors: Sarah Conway
Sarah Conway URI: http://sarahconway.com/
-->


<html>
	<head>
		<title>Adventurous Travelers @yield('title')</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
						<link rel="stylesheet" href="{{URL::to('assets/css/main.css')}}" />

		<link rel="stylesheet" href="{{URL::to('assets/css/button.css')}}" />
		<link rel="stylesheet" href="{{URL::to('assets/css/containers.css')}}" />
		<link rel="stylesheet" href="{{URL::to('assets/css/copyright.css')}}" />
		<link rel="stylesheet" href="{{URL::to('assets/css/forms.css')}}" />
		<link rel="stylesheet" href="{{URL::to('assets/css/grid.css')}}" />
		<link rel="stylesheet" href="{{URL::to('assets/css/images.css')}}" />
		<link rel="stylesheet" href="{{URL::to('assets/css/jcarousel.css')}}" />
		<link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}" />

		<link rel="stylesheet" href="{{URL::to('assets/css/custom.css')}}" />

		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		   @yield('stylesheets')
		   	<style type="text/css">
			html, body {
    max-width: 100%;
    overflow-x: hidden;
}

a{
    text-decoration: none !important;
    }
    @media screen and (max-width:700px){
    	.ad{
    		font-size:9px;
    	}
    	#contact-info{
    		font-size:10px;
    	}
    }
     
</style>
	</head>