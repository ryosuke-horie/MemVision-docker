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
     * ユーザーIDに紐づくメンバー情報を全件取得
     * @param string $userId
     * @return array<Member>
     */
    public function getAllMemberByUserId(string $userId): array
    {
        return $this->where('user_id', $userId)->get()->toArray();
    }
}
