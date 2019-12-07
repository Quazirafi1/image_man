<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use Illuminate\Support\Facades\DB;
class ImageController extends Controller
{
    function index(){

        //$users = User::all();
        $image = DB::table('image')->get();

    	return view('image.index')->with('image', $image);
    }
    /*
    function details($id){

    	//your task finding student from array
        $user = User::find($id);
    	//$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
    	return view('student.details')->with('std', $user);
    }



*/
    function edit(Request $req, $id){

    	//find student form array

        $image = DB::table('image')->where('image_id', $id)->first();
        return view('image.edit')->with('img', $image);
        //echo $id;
    }

    function crop(Request $req, $id){

        //find student form array
        //$ima = User::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        //return view('student.edit')->with('std', $user);
        $image = DB::table('image')->where('image_id', $id)->first();
        return view('image.crop')->with('img', $image);
        //echo "kangaroo";
    }

    function cropup(Request $req, $id){


        $x=$req->size;
        //echo $x;
        //$image = DB::table('image')->where('image_id', $id)->first();
        $image = image::find($id);
        $path=public_path('images/'.$image->name);
        $images=\Intervention\Image\Facades\Image::make(public_path('images/'. $image->name))->crop($x,$x)->save($path);
        //return view('image.edit')->with('img', $image);
        /*if($req->hasFile('img'))
        {
            $image->update(['img'=> $n->store('images','public')
            ]);
        }
        $image->save();*/
        return redirect()->route('image.crop',$id);
    }

    function rotate(Request $req, $id){

        //find student form array
        //$ima = User::find($id);
        //$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
        //return view('student.edit')->with('std', $user);
        $image = DB::table('image')->where('image_id', $id)->first();
        return view('image.rotate')->with('img', $image);
    }

    function rotateup(Request $req, $id){

        $x=$req->size;
        echo $x;
        //$image = DB::table('image')->where('image_id', $id)->first();
        $image = image::find($id);
        $path=public_path('images/'.$image->name);
        $images=\Intervention\Image\Facades\Image::make(public_path('images/'. $image->name))->rotate($x)->save($path);
        //return view('image.edit')->with('img', $image);
        /*if($req->hasFile('img'))
        {
            $image->update(['img'=> $n->store('images','public')
            ]);
        }
        $image->save();*/
        return redirect()->route('image.rotate',$id);
        //return redirect('/image/rotate/',$id);

    }

	function update(Request $req, $id){
        //$image= new image;
        //$images = DB::table('image')->where('image_id', $id)->first();
        $title = $req->title;
        $description = $req->desc;
        DB::table('image')->where('image_id', $id)->update(['title' => $title]);
        DB::table('image')->where('image_id', $id)->update(['description' => $description]);
        //$images->title = $req->title;
        //$images->description = $req->desc;
        //$images->save();
        //print_r($image);
    	return redirect()->route('image.man');
    }
/*
    function delete($id){

    	//find student form array
        $user = User::find($id);
    	//$std = ['id'=>'12-111-2', 'username'=>'xyz', 'password'=>'test'];
    	return view('student.delete')->with('std', $user);
    }

    function destroy($id){

    	//delete student from array and send the updated array in userlist
        $user = User::find($id);
        if($user->delete()){
                    return redirect()->route('student.index');
                }else{
                    return view('student.delete')->with('std', $user);;
                }
    	//return redirect()->route('student.index');
    }
*/
    function add(){

        return view('image.addimage');
    }

    function upload(Request $req){

        if($req->hasFile('img'))
        {
            $images_array = $req -> file('img');

            $array_len = count($images_array);
            //echo $array_len;
            for($i=0; $i<$array_len; $i++)
            {
                $images_size = $images_array[$i]->getClientSize();
                $images_ext = $images_array[$i]->getClientOriginalExtension();
                $new_images_name = rand(123456,999999).".".$images_ext;
                $destination_path = public_path('/images');
                $images_array[$i]->move($destination_path,$new_images_name);

                $image = new image;
                $image->size = $images_size;
                $image-> name = $new_images_name;
                $image-> category = $req->cat;
                $image->save();
            }
            return redirect()->back()->with('msg','All images uploaded successfully');
        }
        else
        {
            return back()-> with('msg', 'Please choose at least one file');
        }
    }
}
