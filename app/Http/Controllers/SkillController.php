<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Skill;

class SkillController extends Controller
{
    public function view_skill(){
    	$data = Skill::all();
    	$content=view('profile.skill')->with('data',$data);
        return view('profile.home')->with('admin_content',$content);
    }
    public function add_skill(Request $request)
    {

            $data = new Skill();
            $data->skill_name = $request->skill_name;
            $data->skill_rate=$request->skill_rate;
            $data->save();
            return Redirect::to('/skills');
        
    }
    public function update_skill(Request $request)
    {
    	$id=$request->id;
    	$skill_name=$request->skill_name;
    	$skill_rate=$request->skill_rate;
    	$data=Skill::find($id);
    	$data->skill_name=$skill_name;
    	$data->skill_rate=$skill_rate;
    	$data->save();
    	return Redirect::to('/skills');

    }
    public function delete_skill($id)
    {
    	$data=Skill::find($id);
    	$data->delete();
    	return Redirect::to('/skills');

    }
}
