<?php
namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
     // 在构造函数中应用 guest 中间件
     public function __construct()
     {
         $this->middleware('guest')->except('logout');  // 确保未登录的用户能访问登录页面
     }
    // 显示登录页面
    public function showLoginPage()
    {
        return view('index.login');
    }

    // 处理登录逻辑
    public function login(Request $request)
    {
        // 验证输入
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // 尝试登录
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('index');  // 登录成功，跳转到首页
        }

        // 如果登录失败
        return redirect()->back()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');  // 登出后重定向到首页
    }

}
