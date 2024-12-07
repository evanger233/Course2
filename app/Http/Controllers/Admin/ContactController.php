<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 显示联系人列表
    public function index()
    {
        // 获取所有联系人
        $contacts = Contact::all();
        return view('admin.contacts.index', compact('contacts'));
    }

    // 删除联系人
    public function destroy(Contact $contact)
    {
        // 删除指定联系人
        $contact->delete();
        return redirect()->route('admin.contacts.index')->with('success', 'Contact deleted successfully');
    }
}
