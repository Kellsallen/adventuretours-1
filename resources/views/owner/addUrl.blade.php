@extends('owner.layout')
@section('title') Gallery URL @stop
@section('page') Add Gallery URL @stop
@section('content')
        <!-- SELECT2 EXAMPLE -->
<div class="box box-default">
    <div class="box-header with-border">
        <h3 class="box-title">Fill in the form below to add a Gallery URL</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <form method="post" action="{{route('postUrl')}}">
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
                <div class="col-md-12">
                <div class="form-group {{$errors->has('url_link') ? 'has-error':''}}">
                        <label>Page Name</label>
                <input type="url" name="url_link" class="form-control" placeholder="Gallery URL">
                        @if($errors->has('url_link'))
            <span class="help-block">{{$errors->first('url_link')}}</span>
                         @endif
                    </div>
                    <!-- /.form-group -->
                    

                </div>
                <!-- /.col -->

                <div class="col-md-6 col-md-offset-5">

                    <div class="form-group">

                        <button type="submit" class="btn btn-success" >Submit</button>
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