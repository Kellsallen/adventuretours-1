@extends('owner.layout')
@section('title') Gallery URL @stop
@section('page') Gallery URL @stop
@section('content')
    <div class="row">
        <div class="col-xs-12">

            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Gallery URL</h3>
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
                            <th>Photo Gallery URL</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($urls as $urls)

                            <tr>
                    <td >{{$urls->url_link}}</td>
            <td><a href="/editUrl/{{$urls->id}}" class="btn btn-info"><i class="
                            fa fa-edit"></i>Update Gallery URL</a></td>
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
