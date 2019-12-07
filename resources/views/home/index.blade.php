@extends('layouts.admin')

@section('content')
    <table align="center">
        <tr>
            <td align="center" colspan="2"><h1 align="center"> Welcome Admin!</h1></td>
        </tr>
        <tr>
            <td colspan="2"><br/></td>
        </tr>
        <tr>
            <td><h5 align="left">ID: </h5></td>
            <td><h5 align="left">{{session('id')}}</h5></td>
        </tr>
    </table>
@endsection
