@extends('owner.layout')
@section('title')Update Banner @stop
@section('page')Update Banner @stop
@section('content')
        <!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Fill in the form below to Update Banner</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <form enctype="multipart/form-data" method="post" action="/editbanner/{{$banners->id}}">
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
                        <label>Page Name</label>
                <input type="text" name="page_name" class="form-control" value="{{$banners->page_name}}" disabled>
                       
                    </div>
                    <!-- /.form-group -->
                    <div class="form-group {{$errors->has('photo') ? 'has-error':''}}">
                        <label>Photo</label>
                        <input type="file" name="photo" class="form-control" value="{{$banners->photo}}">
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