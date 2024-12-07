<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;  // 导入 Article 模型


class HomeController extends Controller
{
    public function index()
    {
      

        // 获取最新的 3 条文章
        $articles = Article::latest()->take(3)->get();

        // 传递数据到视图
        return view('index', compact( 'articles'));
    }
}
