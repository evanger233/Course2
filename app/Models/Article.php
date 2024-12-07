<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // 指定表名
    protected $table = 'article';

    // 可批量赋值的字段
    protected $fillable = ['title', 'content', 'admin_id', 'likes_count'];

    // 获取点赞数
    public function getLikeCountAttribute()
    {
        return (int) $this->likes_count;
    }

    // 设置点赞数
    public function setLikeCountAttribute($value)
    {
        $this->attributes['likes_count'] = (int) $value;
    }
}
