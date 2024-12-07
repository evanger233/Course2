<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // 在构造函数中应用 guest 中间件
    public function __construct()
    {
        $this->middleware('guest')->except('logout');  // 只允许未登录的用户访问注册页面
    }
    // 显示注册页面
    public function showRegisterPage()
    {
        return view('index.register');
    }

    // 处理注册逻辑
    public function register(Request $request)
    {
        // 验证输入，去掉确认密码字段
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 创建用户
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect()->route('index');
    }
}
