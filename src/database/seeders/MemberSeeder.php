<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // ユーザーを作成
        Member::create([
            'user_id' => 1,
            'name' => 'テスト太郎',
            'nickname' => 'テストニックネーム',
        ]);

        Member::create([
            'user_id' => 1,
            'name' => 'テスト次郎',
            'nickname' => 'テストニックネーム2',
        ]);

        Member::create([
            'user_id' => 1,
            'name' => 'テスト三郎',
            'nickname' => 'テストニックネーム3',
        ]);
    }
}
