<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class HelloTest extends TestCase
{
    // テスト後にデータベースをリセットする
    use RefreshDatabase;

    // メソッド名は「test〇〇」であること
    public function testHello()
    {
        // レコードが0件かチェック
        $this->assertDatabaseCount('users', 0);

        // テストユーザーを生成
        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'test@example.com',
            'email_verified_at' => '2023-04-05 20:39:44',
            'password' => Hash::make('12345678'),
        ]);

        // レコードが1件かチェック
        $this->assertDatabaseCount('users', 1);
    }
}
