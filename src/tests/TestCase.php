<?php

namespace Tests;

use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use PHPUnit\Framework\Attributes\Test;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function setUp(): void
    {
        parent::setUp();
    }


    protected function login()
    {
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    #[Test]
    public function テスト環境で実行されることをテスト()
    {
        $this->assertEquals('testing', config('app.env'));
    }
}
