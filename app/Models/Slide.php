<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    protected $table = 'slide';  // 指定表名（如果表名与模型名不一致）
    
    protected $fillable = ['images'];  // 允许批量赋值的字段
}
