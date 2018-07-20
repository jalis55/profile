<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
{
    public function index(){
    	//die("hellow profile");
    	$data['about']=DB::table('abouts')->get();
    	$data['skill']=DB::table('skills')->get();
    	$data['experience']=DB::table('expriences')->get();
    	$data['education']=DB::table('educations') ->orderByRaw('id DESC')->get();
    	// dd($a);
    	// die("123");

    	return view('profile.profile')->with('data',$data);
    }
}
