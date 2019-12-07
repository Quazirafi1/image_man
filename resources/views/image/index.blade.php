@extends('layouts.admin')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ALL IMAGES</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image Name</th>
                                <th>Image Size</th>
                                <th>Category</th>
                                <th>ACTION</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($image as $s)
                                <tr>
                                    <td>{{$s->image_id}}</td>
                                    <td>{{$s->title}}</td>
                                    <td>{{$s->name}}</td>
                                    <td>{{$s->size}}</td>
                                    <td>{{$s->category}}</td>
                                    <td>
                                        <a href="{{route('image.edit', $s->image_id)}}">Edit</a> |
                                        <a href="{{route('image.crop', $s->image_id)}}">Crop</a> |
                                        <a href="{{route('image.rotate', $s->image_id)}}">Rotate</a> |
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->


                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection
