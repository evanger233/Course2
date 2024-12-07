<?php

// app/Http/Controllers/Admin/ArticleController.php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // 显示所有文章
    public function list()
    {
        $articles = Article::all(); // 获取所有文章
        return view('admin.articles.index', compact('articles'));
    }

    // 显示创建文章的表单
    public function create()
    {
        return view('admin.articles.create');
    }

    // 存储新文章
    public function store(Request $request)
    {
       
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
        // 获取当前登录的管理员ID
        $adminId = Auth::guard('admins')->id(); // 或者 Auth::user()->id
        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'admin_id' => $adminId, // 将管理员ID作为 author_id
            'likes_count' => 0, // 默认值
        ]);
        return redirect()->route('admin.articles.list');
    }

    // 显示编辑文章的表单
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('admin.articles.edit', compact('article'));
    }

    // 更新文章
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        $article = Article::findOrFail($id);
        $article->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);
    
        return redirect()->route('admin.articles.list')->with('success', 'Article updated successfully.');
    }

    // 删除文章
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return redirect()->route('admin.articles.list');
    }
}
