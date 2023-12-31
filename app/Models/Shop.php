<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    // アプリ上の操作で変更可能にしたいカラムを追加
    protected $fillable = [
            'name',
            'content',
            'tel',
            'address',
            'sns',
            'photo'
    ];

    // リレーション設定
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
