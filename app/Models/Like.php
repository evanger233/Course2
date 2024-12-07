<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    // 定义表名
    protected $table = 'likes';

    // 定义可批量赋值的字段
    protected $fillable = ['user_id', 'article_id'];

    // 禁用时间戳自动管理
    public $timestamps = true;
}
