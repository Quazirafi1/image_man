@extends('layouts.admin')

@section('content')
    <link rel="stylesheet" href="{{ asset('css/croppie.min.css') }}">
    <script src="{{ asset('js/croppie.js') }}"></script>
    <div align="center">
        <div class="card card-solid">
            <form method="post">
                {{ csrf_field()  }}
                <table align="center">
                    <tr>
                        <div id="upload-demo">
                        <td colspan="5">
                            <img align="right" src="{{ asset('images/'. $img->name)}}" width="700px" height="600px" name="img">
                        </td>
                        </div>
                    </tr>
                    <tr>
                        <td colspan="5" align="center"><h5><i>Select Crop Ratio</i></h5></td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button type="submit" name="size" type="button" class="btn btn-block btn-outline-primary btn-lg" value="100">100x100</button>
                        </td>
                        <td align="center">
                            <button type="submit" name="size" type="button" class="btn btn-block btn-outline-primary btn-lg" value="200">200x200</button>
                        </td>
                        <td align="center">
                            <button type="submit" name="size" type="button" class="btn btn-block btn-outline-primary btn-lg" value="300">300x300</button>
                        </td>
                        <td align="center">
                            <button type="submit" name="size" type="button" class="btn btn-block btn-outline-primary btn-lg" value="400">400x400</button>
                        </td>
                        <td align="center">
                            <button type="submit" name="size" type="button" class="btn btn-block btn-outline-primary btn-lg" value="500">500x500</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>


    <script type="text/javascript">

            $.ajaxSetup({
            headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
    var resize = $('#upload-demo').croppie({
    enableExif: true,
    enableOrientation: true,
    viewport: { // Default { width: 100, height: 100, type: 'square' }
    width: 200,
    height: 200,
    type: 'square' //square
    },
    boundary: {
    width: 300,
    height: 300
    }
    });
            $('#image_file').on('change', function () {
                var reader = new FileReader();
                reader.onload = function (e) {
                    resize.croppie('bind',{
                        url: e.target.result
                    }).then(function(){
                        console.log('jQuery bind complete');
                    });
                }
                reader.readAsDataURL(this.files[0]);
            });
    </script>
@endsection
