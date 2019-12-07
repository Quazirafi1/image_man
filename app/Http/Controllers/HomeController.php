<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\User;


class HomeController extends Controller
{
    function index(Request $request){

/*    	$data = ['id'=>'10-11111-1', 'name'=>'XYZ', 'cgpa'=>'4'];
    	return view('home.index', $data);*/

    	/*return view('home.index')
    			->with('id', '12-22222-1')
    			->with('name', 'ABC')
    			->with('cgpa', 3);*/

      	/*return view('home.index')
    			->withId('12-22222-1')
    			->withName('ABC')
    			->withCgpa(3);*/

/*		$v = view('home.index');
    	$v->withId('12-22222-1');
    	$v->withName('ABC');
    	$v->withCgpa(3);*/

    	/*$name = "test";
    	$id ="1111-1111";
    	$cgpa = "222";
    	return view('home.index', compact('name', 'id', 'cgpa'));*/

    	//$request->session()->put('name', 'AIUB');
    	/*$request->session()->get('name');
    	$request->session()->forget('name');
    	$request->session()->flush();

    	$request->session()->flash('cgpa', 4);
    	$request->session()->keep('cgpa');
    	$request->session()->reflash();
    	$request->session()->has('name');
    	$request->session()->pull('name');
    	$request->session()->all();*/

    	//$name =$request->name;
    	//$id =$request->id;
    	//$cgpa = "222";


        $value = $request->session()->get('id');

        $user = User::find($value);

    	if($request->session()->has('id')){
    		//$users = User::all();
            //$kangaroo=session('id')
            //echo "kasmd";
    		//$user = User::where('userId', $kangaroo)
            //       					->get();
            $usernamesend=$user->username;
    		return view('home.index', compact('id','usernamesend'));
    	}else{
    		return redirect('/login');
    	}

    }
}





