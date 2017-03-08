@extends('owner.layout')
@section('title')Add Destination @stop
@section('page')Add a Destination @stop
@section('content')
        <!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Fill the form below to create a new destination</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <form enctype="multipart/form-data" method="post" action="{{route('postDestination')}}">
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
                <div class="form-group {{$errors->has('d_image') ? 'has-error':''}}">
                    <label>Image</label>
                    <input type="file" name="d_image" class="form-control" >
                        @if($errors->has('d_image'))
              <span class="help-block">{{$errors->first('d_image')}}</span>
                       @endif
                </div>
                <!-- /.form-group -->
                <div class="form-group {{$errors->has('name') ? 'has-error':''}}">
                    <label>Destination Name</label>
<input type="text" name="name" class="form-control" placeholder="Name of Destination">
@if($errors->has('name'))
            <span class="help-block">{{$errors->first('name')}}</span>
                         @endif
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col -->
            <div class="col-md-6">
                <!-- /.form-group -->
                <div class="form-group {{$errors->has('description') ? 'has-error':''}}">
                    <label>Description</label>
                    <textarea class="form-control " name="description"></textarea>
                    @if($errors->has('description'))
          <span class="help-block">{{$errors->first('description')}}</span>
                         @endif
                </div>

                <!-- /.form-group -->
                <div class="form-group {{$errors->has('other_details') ? 'has-error':''}}">
                    <label>Other Details</label>
                    <textarea class="form-control " name="other_details"></textarea>
                    @if($errors->has('other_details'))
      <span class="help-block">{{$errors->first('other_details')}}</span>
              @endif
                </div>

                <!-- /.form-group -->
            </div>
            <!-- /.col -->
                <div class="col-md-6 col-md-offset-5">

                <div class="form-group">

                    <button type="submit" class="btn btn-primary" >Submit Details</button>
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