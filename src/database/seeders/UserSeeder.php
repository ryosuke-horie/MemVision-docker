<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ユーザーを作成
        User::create([
            'name' => 'Admin',
            'email' => 'test@mail.com',
            'password' => 'password', // 本来はハッシュ化する
        ]);
    }
}
