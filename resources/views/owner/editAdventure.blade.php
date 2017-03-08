@extends('owner.layout')
@section('title')Edit Adventure @stop
@section('page')Edit Adventure  details @stop
@section('content')
        <!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Update Adventure details</h3>


    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <form enctype="multipart/form-data" method="post" action="/editAdventure/{{$adventures->id}}">
                {{csrf_field()}}
                <div class="col-md-12">
                    <div class="form-group">
                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                                {{Session::get('error')}}
                            </div>
                        @endif
                        @if(Session::has('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="a_image" class="form-control" value="{{$adventures->a_image}}">
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Adventure Title</label>
                        <input type="text" name="title" class="form-control"  value="{{$adventures->title}}">
                    </div>
                    <!-- /.form-group -->

                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control " name="description">{{$adventures->description}}</textarea>
                    </div>

                    <!-- /.form-group -->
                    <div class="form-group">
                        <label>Other Details</label>
                        <textarea class="form-control " name="other_details" >{{$adventures->other_details}}</textarea>
                    </div>

                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6 col-md-offset-5">

                    <div class="form-group">

                        <button type="submit" class="btn btn-warning">Update Details</button>
                    </div>
                </div>

                <!-- /.form-group -->
            </form>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-body -->

</div>
<!-- /.box -->
@stop