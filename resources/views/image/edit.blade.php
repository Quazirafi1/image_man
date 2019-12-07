@extends('layouts.admin')

@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <form method="post">
            {{ csrf_field()  }}
        <section class="content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Add Title & Description</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="inputName">Title</label>
                                <input type="text" name="title" class="form-control" value="{{$img->title}}">
                            </div>
                            <div class="form-group">
                                <label for="inputDescription">Description</label>
                                <textarea id="inputDescription" class="form-control" rows="4" name="desc">{{$img->description}}</textarea>
                            </div>

                            <div class="col-12" aria-colspan="2" align="center">
                                <input type="submit" name="submit" value="Save Changes" class="btn btn-success float-right">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </form>
    </div>




    <!-- jQuery -->
    <script src="{{asset('../../plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('../../dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('../../dist/js/demo.js')}}"></script>


@endsection
