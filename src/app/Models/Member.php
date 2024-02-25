<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;

class Member extends Model
{
    use HasFactory;

    // 代入可能な属性
    protected $fillable = ['user_id', 'name', 'nickname'];

    /**
     * 一覧情報の取得
     * ページネーション対応
     * @param int $userId
     * @param int $limit_count
     * @return LengthAwarePaginator<Member>
     */
    public function getPaginateByLimit(int $userId, int $limit_count = 50): LengthAwarePaginator
    {
        return $this->where('user_id', $userId)->orderBy('id', 'desc')->paginate($limit_count);
    }
}
