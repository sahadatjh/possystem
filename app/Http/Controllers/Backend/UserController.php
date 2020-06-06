<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function index(){
        $data['users']=DB::table('users')->get();
        return view('backend.user.userlist',$data);
    }

    public function view($id){
        return view('backend.user.profile');
    }
    public function add(){
        return view('backend.user.add');

    }
    public function store(Request $request){
        // $data=array();
		// $data['department_name']=$request->department_name;
		// $data['publication_status']=$request->publication_status;
		// $department=DB::table('departments')->insert($data);
		// return response()->json($request);
		// echo '<pre>';
		// print_r($data);

    }
    public function edit($id){}
    public function update($id){}
    public function delete($id){}
}
