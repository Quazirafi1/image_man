@extends('layouts.admin')

@section('content')
    <div align="center">
        <div class="card card-solid">
            <form method="post">
                {{ csrf_field()  }}
                <table align="center">
                    <tr>
                        <td colspan="2">
                            <img align="right" src="{{ asset('images/'. $img->name)}}" width="700px" height="600px" name="img">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><h5><i>Rotate</i></h5></td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button type="submit" name="size" type="button" class="btn btn-block btn-outline-primary btn-lg" value="-45">-45°</button>
                        </td>
                        <td align="center">
                            <button type="submit" name="size" type="button" class="btn btn-block btn-outline-primary btn-lg" value="45">45°</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
@endsection
