<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    // 使用 middleware 确保只有管理员可以访问
    public function __construct()
    {
        $this->middleware('auth:admins'); // 需要登录才能访问
    }

    public function index()
    {
        // 返回后台的 dashboard 视图
        return view('admin.dashboard');
    }
}
