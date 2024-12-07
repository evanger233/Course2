<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    // 显示后台登录页面
    public function displayLoginForm()
    {
         // 判断管理员是否已经登录，如果已登录则重定向到后台首页
         if (Auth::guard('admins')->check()) {
            return redirect()->route('admin.dashboard'); // 重定向到后台首页
        }
        return view('admin.login');
    }

    // 处理后台登录
  

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('admins')->attempt($credentials)) {
            // 登录成功，跳转到后台首页
            return redirect()->intended('admin/admins');
        } else {
            // 登录失败，返回错误
            return back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        }
    }
    

    // 退出登录
    public function logout()
    {
        Auth::guard('admins')->logout(); // 使用 admins guard 登出
        return redirect()->route('admin.login'); // 重定向到登录页面
    }
}
