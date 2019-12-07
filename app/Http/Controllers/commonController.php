<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class commonController extends Controller
{
    //
    public function index(){
        $image = DB::table('image')->get();
        return view('common.index')->with('image', $image);
        //$day=today();
        //echo $day;
    }

    public function index1(){
        $image = DB::table('image')->get();
        return view('common.indexlist')->with('image', $image);
        //$day=today();
        //echo $day;
    }

    function filter(Request $req){

        //find student form array

        $image = DB::table('image')->where('category', $req->cat)->get();
        return view('common.index')->with('image', $image);
        //echo $id;
    }

    function filter1(Request $req){

        //find student form array

        $image = DB::table('image')->where('category', $req->cat)->get();
        return view('common.indexlist')->with('image', $image);
        //echo $id;
    }
}
