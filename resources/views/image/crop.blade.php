@extends('layouts.admin')

@section('content')
    <div align="center">
        <div class="card card-solid">
            <form method="post">
                {{ csrf_field()  }}
                <table align="center">
                    <tr>
                        <td colspan="5">
                            <img align="right" src="{{ asset('images/'. $img->name)}}" width="700px" height="600px" name="img">
                        </td>
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
@endsection
