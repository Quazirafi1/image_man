@extends('layouts.admin')

@section('content')

    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Add images</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form name="frm" method="post" enctype="multipart/form-data" role="form">
            {{ csrf_field()  }}
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputFile">Select Files</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile" name="img[]" multiple>
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Select</label>
                    <select class="form-control" name="cat">
                        <option value="cars">Cars</option>
                        <option value="boats">Boats</option>
                        <option value="trucks">Trucks</option>
                    </select>
            </div>

            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" name="ok" class="btn btn-primary" value="Upload">Upload</button>
            </div>

        </form>
    </div>
    <div>
        @if(Session::has('msg'))
            {{ Session::get('msg') }}
        @endif
    </div>
    <!-- /.card -->
    <script src="{{asset('../../plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- AdminLTE App -->
    <script src="{{asset('../../dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('../../dist/js/demo.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            bsCustomFileInput.init();
        });
    </script>

    <script src="{{asset('../../plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
@endsection
