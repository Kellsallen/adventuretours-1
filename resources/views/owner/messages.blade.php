@extends('owner.layout')
@section('title')Messages @stop
@section('page')All Messages @stop
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Manage All Messages Here</h3>
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
                            <th>Sender Name</th>
                            <th>Phone Number</th>
                            <th>Email Address</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($messages as $messages)

                            <tr>
                                <td>{{$messages->name}}</td>
                                <td>{{$messages->phone}}</td>
                                <td>{{$messages->email}}</td>
                                <td>{{$messages->message}}</td>
                                <td><a href="{{route('deleteMessage',['messages'=>$messages->id])}}" onclick="return confirm('Do you want to Delete ?')" class="btn btn-danger"><i class="
                            fa fa-window-close"></i> </a>
                                  </td>
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
