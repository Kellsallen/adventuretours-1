@extends('owner.layout')
@section('title')Dashboard @stop
@section('page')Dashboard @stop
@section('content')
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                    <a href="{{route('Destination')}}">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-map-marker"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Destinations</span>
                            <span class="info-box-number">{{count($destinations)}}</span>
                        </div>
                        <!-- /.info-box-content -->
                        </a>
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                    <a href="{{route('Adventure')}}">
                        <span class="info-box-icon bg-red"><i class="fa fa-globe"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Adventures</span>
                            <span class="info-box-number">{{count($adventures)}}</span>
                        </div>
                        <!-- /.info-box-content -->
                        </a>
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                    <a href="{{route('Message')}}">

                        <span class="info-box-icon bg-green"><i class="fa fa-envelope-square"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Messages</span>
                            <span class="info-box-number">{{count($messages)}}</span>
                        </div>
                        <!-- /.info-box-content -->
                        </a>
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                    <a href="{{route('User')}}">
                        <span class="info-box-icon bg-teal"><i class="fa fa-user-circle"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Users</span>
                            <span class="info-box-number">{{count($users)}}</span>
                        </div>
                        <!-- /.info-box-content -->
                        </a>
                    </div>
                    <!-- /.info-box -->
                </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                    <a href="{{route('banners')}}">
                        <span class="info-box-icon bg-orange"><i class="fa fa-id-badge"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Banners</span>
                            <span class="info-box-number">{{count($banners)}}</span>
                        </div>
                        <!-- /.info-box-content -->
                        </a>
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    @stop




