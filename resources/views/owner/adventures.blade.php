@extends('owner.layout')
@section('title')Adventures @stop
@section('page')All Adventures @stop
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Manage All Adventures</h3>
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
                            <th>Image</th>
                            <th>Adventure Title</th>
                            <th>Description</th>
                            <th>Other Details</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($adventures as $adventures)

                            <tr>
                                <td><img src="{{url('uploads/adventures/'.$adventures->a_image)}}" class="d_image img-responsive"></td>
                                <td>{{$adventures->title}}</td>
                                <td style="width:300px;">{{$adventures->description}}</td>
                                <td>{{$adventures->other_details}}</td>
                                <td><a href="{{route('deleteAdventure',['adventures'=>$adventures->id])}}" onclick="return confirm('Do you want to Delete ?')" class="btn btn-danger"><i class="
                            fa fa-window-close"></i> </a>
                                    <a href="/editAdventure/{{$adventures->id}}" class="btn btn-info"><i class="
                            fa fa-edit"></i></a></td>
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