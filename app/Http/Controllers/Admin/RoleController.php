<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Model\RoleModel;

class RoleController extends Controller
{
    public function add(){
        return view('role/add');
    }

    public function adddo(request $request){
        //角色表添加
        $role_name=$request->post("role_name");//接收角色名称
        $data=[
            "role_name"=>$role_name
        ];
        //角色和权限关联添加
       // $based_id=$request->post("based_id");
        $res=RoleModel::insert($data);


        if($res){

            return $this->response(200,'ok');
        }else{
            die("添加失败");
        }
    }

    public function index(){
        return view('role/add');
    }
}
