@extends('owner.layout')
@section('title')Add Adventure @stop
@section('page')Add Adventure @stop
@section('content')
        <!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Fill in the form below to create a new Adventure</h3>


    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <form enctype="multipart/form-data" method="post" action="{{route('postAdventure')}}">
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
                    <div class="form-group {{$errors->has('a_image') ? 'has-error':''}}">
                        <label>Image</label>
                        <input type="file" name="a_image" class="form-control" >
                        @if($errors->has('a_image'))
              <span class="help-block">{{$errors->first('a_image')}}</span>
                       @endif
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group {{$errors->has('title') ? 'has-error':''}}">
                        <label>Adventure Title</label>
                        <input type="text" name="title" class="form-control" placeholder="title of Adventure">
                        @if($errors->has('title'))
            <span class="help-block">{{$errors->first('title')}}</span>
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

                        <button type="submit" class="btn btn-info" >Submit Details</button>
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