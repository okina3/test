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
        // 未ログイン状態で'/login'にアクセス
        $response = $this->get('/login');
        // ステータスコードが200か？
        $response->assertStatus(200);

        // ログイン処理
        // テストユーザーを生成
        $user = User::factory()->create();
        // ログイン
        $this->actingAs($user);
        // ログインした状態で'/login'にアクセス
        $response = $this->get('/login');
        // ステータスコードが302か？
        $response->assertStatus(302);
    }
}
