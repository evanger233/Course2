<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    // 显示文章列表
    public function index()
    {
      
        $articles = Article::All();  
    
        return view('index.articles', compact('articles'));
    }
     // 显示单篇文章详情
     public function show(Article $article)
     {
         return view('articles.show', compact('article'));
     }

    // 用户点赞功能
    public function like(Request $request, Article $article)
    {
        // 判断用户是否登录
        if (!Auth::check()) {
            return response()->json(['error' => 'You must be logged in to like an article.'], 403);
        }

        $user = Auth::user();

        // 判断用户今天是否已经点赞过
        $today = now()->toDateString();
        $existingLike = Like::where('user_id', $user->id)
                            ->where('article_id', $article->id)
                            ->whereDate('created_at', $today)
                            ->first();

        if ($existingLike) {
            return response()->json(['error' => 'You can only like an article once per day.'], 403);
        }

        // 用户没有点赞过，执行点赞
        Like::create([
            'user_id' => $user->id,
            'article_id' => $article->id
        ]);

        // 更新文章的点赞数
        $article->increment('likes_count');

        // 返回更新后的点赞数
        return response()->json(['likes_count' => $article->likes_count]);
    }

}
