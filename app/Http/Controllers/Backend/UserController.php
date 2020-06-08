<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    public function index(){
        $data=array();
        $data['users']=DB::table('users')->get();
        return view('backend.user.userlist',$data);
    }

    public function view($id){
        $user=DB::table('users')->where('id',$id)->first();
        return view('backend.user.profile',['user'=>$user]);
    }
    public function add(){
        return view('backend.user.add');

    }
    public function store(Request $request){
        $request->validate([
	        'name' => 'required|max:200|min:4',
	        'mobile' => 'required|max:13|min:11',
	        'email' => 'required|email|max:100',
	        'image' => 'mimes:jpeg,jpg,png,gif|max:1000',
        ]);
        
        $data=array();
		$data['name']=$request->name;
		$data['email']=$request->email;
		$data['mobile']=$request->mobile;
		$data['password']= Hash::make($request->password);
		$data['access_level']=$request->access_level;
		$data['address']=$request->address;
		$image=$request->file('image');
    	if ($image) {
    		$image_name=hexdec(uniqid());
            $ext=strtolower($image->getClientOriginalExtension());
            // echo $ext;
    		$image_full_name=$image_name.'.'.$ext;
    		$upload_path='public/backend/images/';
    		$image_url=$upload_path.$image_full_name;
    		$success=$image->move($upload_path,$image_full_name);
			$data['image']=$image_url;
			
    		DB::table('users')->insert($data);
            return redirect()->route('user.list')->with('success','data inserted successfully!!!');
    	} else {
    		DB::table('users')->insert($data);
            return redirect()->route('user.list')->with('success','data inserted successfully!!!');
			
    	}
    }
    public function edit($id){
        $user=DB::table('users')->where('id',$id)->first();
        return view('backend.user.edit',['user'=>$user]);
    }
    public function update(Request $request){
        $request->validate([
	        'name' => 'required|max:200|min:4',
	        'mobile' => 'required|max:13|min:11',
	        // 'email' => 'required|email|max:100',
	        'image' => 'mimes:jpeg,jpg,png,gif|max:1000',
        ]);

	    $data=array();
		$id=$request->id;
		$data['name']=$request->name;
		// $data['email']=$request->email;
		$data['mobile']=$request->mobile;
		$data['password']= Hash::make($request->password);
		$data['access_level']=$request->access_level;
		$data['address']=$request->address;
		$image=$request->file('image');
	   if ($image) {
		   $image_name=hexdec(uniqid());
		   $ext=strtolower($image->getClientOriginalExtension());
		   $image_full_name=$image_name.'.'.$ext;
		   $upload_path='public/backend/images/';
		   $image_url=$upload_path.$image_full_name;
		   $success=$image->move($upload_path,$image_full_name);
		   $data['image']=$image_url;
		   if($request->oldphoto){
		   	unlink($request->oldphoto);
		   }
		   DB::table('users')->where('id',$id)->update($data);
           return redirect()->route('user.list')->with('success','data updated successfully!!!');
	   }else{
            $data['image']=$request->oldphoto;
            
			DB::table('users')->where('id',$id)->update($data);
            return redirect()->route('user.list')->with('success','data inserted successfully!!!');
	   }
    }
    public function delete($id){}
}
