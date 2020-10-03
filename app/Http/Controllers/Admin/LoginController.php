<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\AdminModel;

class LoginController extends Controller
{
    public function login(){

        return view('admin/login');
    }

    public function logindo(request $request){

        $admin_name=$request->post('username');
        $password=$request->post('password');
        if(empty($admin_name)|empty($password)){
            return json_encode(['error'=>1,'msg'=>'不能为空']);
        }
        $user=AdminModel::where('admin_name','=',"$admin_name")->first();
        if($user){
            if($password!=$user['password']){
                return json_encode(['error'=>2,'msg'=>'密码错误']);
            }
            session(['user'=>$user]);
            return redirect('/admin/index');
//            return json_encode(['error'=>0,'msg'=>'OK']);
        }
        return json_encode(['error'=>3,'msg'=>'用户不存在']);

    }
}
