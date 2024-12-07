<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    protected $table = 'admin'; // 设置表名为 'admin'

    // 其他属性或方法
    protected $fillable = [
        'name',
        'email',
        'password', // 如果需要存储密码字段，记得加入
    ];
}
