@extends('owner.layout')
@section('title')Add Banner @stop
@section('page')Add Banner @stop
@section('content')
        <!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Fill in the form below to create a new Page banner</h3>


    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <form enctype="multipart/form-data" method="post" action="{{route('postBanner')}}">
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
                <div class="form-group {{$errors->has('page_name') ? 'has-error':''}}">
                        <label>Page Name</label>
                <input type="text" name="page_name" class="form-control" placeholder="page name">
                        @if($errors->has('page_name'))
            <span class="help-block">{{$errors->first('page_name')}}</span>
                         @endif
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group {{$errors->has('photo') ? 'has-error':''}}">
                        <label>Photo</label>
                        <input type="file" name="photo" class="form-control" >
                        @if($errors->has('photo'))
              <span class="help-block">{{$errors->first('photo')}}</span>
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