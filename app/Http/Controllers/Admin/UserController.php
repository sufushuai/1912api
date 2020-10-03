<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AdminModel;
use Illuminate\Support\Facades\Response;

class UserController extends Controller
{
    public function add(){
        return view('users/add');
    }

    public function adddo(){
        $admin_name = request()->post("admin_name");
        $password = request()->post("password");
        $where =[
            "admin_name"=>$admin_name,
            "password"=>$password
        ];
        $res=AdminModel::insert($where);
        if($res){
            return $this->response(200,'ok');
        }else{
            return $this->response(1,'fail');
        }

    }

    public function index(){
//        $admin_name = request()->admin_name;
        $where=[];
//        if($admin_name){
//            $where[]=['admin_name','like',"%$admin_name%"];
//        }
        $data=AdminModel::where($where)->get();
        $query = request()->all();
        return view('users/index',compact('data','query'));
    }

    public function delete($admin_id){

        $where=[
            ['admin_id','=',$admin_id]
        ];
        $res=AdminModel::where($where)->delete();
        if($res){
            return  redirect('/user/index');
        }else{
            return redirect('/user/index');
        }
    }
}
