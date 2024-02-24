<?php

namespace Tests\Unit\Http\Controllers;

use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class MemberControllerTest extends TestCase
{
    #[Test]
    public function 未ログイン時、Login画面にリダイレクトされることをテスト()
    {
        $response = $this->get('/members');
        $response->assertRedirect('/login');
    }

    #[Test]
    public function ログイン後会員情報の各エンドポイントにアクセスできることをテスト()
    {
        $this->login();
        $response = $this->get('/members');
        $response->assertOk();
    }
}
