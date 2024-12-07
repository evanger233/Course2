<?php



namespace App\Http\Controllers\Admin;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    

    // 显示编辑about的表单
    public function edit()
    {
        $id = 1;
        $pages = Page::findOrFail($id);
    
        return view('admin.pages.edit', compact('pages'));
    }

    public function update(Request $request)
    {
        // 获取 id 为 1 的页面
        $page = Page::findOrFail(1);

        // 验证表单数据
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        // 更新页面
        $page->update($validated);

        // 重定向回编辑页面并显示成功消息
        return redirect()->route('admin.pages.edit')->with('success', 'Page updated successfully');
    }

}
