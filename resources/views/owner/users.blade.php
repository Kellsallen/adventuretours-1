@extends('owner.layout')
@section('title')Users @stop
@section('page')All Users @stop
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Manage All Users Here</h3>
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
                            <th>Full Name</th>
                            <th>Email Address</th>
                            <th>Date Joined</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $users)

                            <tr>
                                <td>{{$users->name}}</td>
                                <td>{{$users->email}}</td>
                                <td>{{$users->created_at}}</td>
                                
                                <td><a href="{{route('deleteUser',['users'=>$users->id])}}" onclick="return confirm('Do you want to Delete ?')" class="btn btn-danger"><i class="
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
