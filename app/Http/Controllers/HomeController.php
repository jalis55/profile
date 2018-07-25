<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.home');
    }
    public function change_pp()
    {
        
         $content=view('profile.uplaod');
         return view('profile.home')->with('admin_content',$content);
        
    }
    public function upload_pp(Request $request){
        //dd($request->id);
        $data = array();
        $id=$request->id;
         $image=($request->file('userImage'));
         //("image foung");
         if($image){
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
             if($success) {
                $data['profile_picture'] = $image_url;
                DB::table('abouts')->where('id',$id)->update($data);
                //die("update");
                Session::flash('message', 'Image uplaod successfully');
                return Redirect::to('/change-pp');
            }
            

         }
         else{
            echo"something wrong";
         }
        
    }
    public function skill()
    {
        return Redirect::to('view-skill');

        $content=view('profile.skill');
        return view('profile.home')->with('admin_content',$content);
    }
    public function work_exprience()
    {
        die("comming soon");
    }
    public function education()
    {
        die("comming soon");
    }
}
