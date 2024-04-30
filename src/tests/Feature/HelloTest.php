<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    // メソッド名は「test〇〇」であること
    public function testHello()
    {
        // trueかチェック
        $this->assertTrue(true);

        // 空かチェック
        $arr = [];
        $this->assertEmpty($arr);

        // 等しいかチェック
        $msg = 'Hello';
        $this->assertEquals('Hello', $msg);

        // 小さいかチェック
        $n = random_int(0, 100);
        $this->assertLessThan(100, $n);
    }
}
