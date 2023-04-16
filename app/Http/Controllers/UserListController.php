<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DB;
class UserListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


        public function userlist(){
            $all=DB::table('users')
             ->get();
             return view('layouts.userlist',compact('all'));
        }
        public function formu(){
            return view ('layouts.formu');
        }
        public function insertuser(Request $request){
            $data=array();
            $data['name']= $request->name;
            $data['email']= $request->email;
            $data['role']= $request->role;
            $data['password']= Hash::make($request->password);
            $data['created_at']= date('Y-m-d H:i:s');
            $data['updated_at']= date('Y-m-d H:i:s');

            $insert =DB::table('users')->insert($data);
            if($insert){
                echo "SUDAH KENEK DIKIRIM";
            }
            else{
                echo "Kapok Gak Kenek !!";
            }
        }
        public function edituser($id){
            $edit=DB::table('users')->where('id',$id)->first();
            return view ('layouts.edituser',compact('edit'));
        }

        public function updateuser(Request $request,$id){
            $data=array();
            $data['name']= $request->name;
            $data['email']= $request->email;
            $data['role']= $request->role;
            $data['password']= Hash::make($request->password);
            $data['created_at']= date('Y-m-d H:i:s');
            $data['updated_at']= date('Y-m-d H:i:s');

            $update =DB::table('users')->where('id',$id)->update($data);
            if($update){
                echo "SUDAH KENEK DIKIRIM";
            }
            else{
                echo "Kapok Gak Kenek !!";
            }

        }
        public function deleteuser($id){
            $delete = DB::table('users')->where('id',$id)->delete();
            if ($delete){
                echo "KENEK HAPUS WES AN";
            }
            else{
                echo "Kapok Gak Kenek !!";
            }
        }

    }

