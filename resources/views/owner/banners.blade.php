@extends('owner.layout')
@section('title') Pages and Banners @stop
@section('page') All Pages Banners @stop
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Page Banners</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Page Name</th>
                            <th>Banner Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($banners as $banners)

                            <tr>
                    <td style="width:100px;">{{$banners->page_name}}</td>
            <td style="width:500px;"><img src="{{url('banners/'.$banners->photo)}}" class="img-responsive"></td>
            <td><a href="/editbanner/{{$banners->id}}" class="btn btn-info"><i class="
                            fa fa-edit"></i>Update Banner Image</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@stop
