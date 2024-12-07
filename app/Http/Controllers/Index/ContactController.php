<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail; // 你可以选择使用邮件通知

class ContactController extends Controller
{
    // 显示联系页面
    public function showContactForm()
    {
        return view('index.contact');
    }

    // 处理联系表单提交
    public function submitContactForm(Request $request)
    {
        // 表单验证
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'userEmail' => 'required|email|max:255',
            'message' => 'required|string',
        ]);
    
        // 保存到数据库（如果需要）
        Contact::create([
            'name' => $validated['name'],
            'email' => $validated['userEmail'],
            'message' => $validated['message'],
        ]);
    
        // 返回成功消息
        return back()->with('success', 'Your message has been sent!');
    }
    
}
