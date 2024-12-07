<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Page;

class AboutController extends Controller
{
    // 显示 about 页面
    public function show()
    {
        // 假设我们只有一篇 "关于" 页面，获取该页面的内容
        $about = Page::where('id', '1')->first(); // 根据标题查找页面

        return view('index.about', compact('about'));
    }
}
