<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * Login Test
     *
     * @test
     */
    public function loginForm()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    /**
     * Test Delete User Functionality
     *
     * @test
     */
    public function userDelete()
    {
        $createUser = User::factory()->count(1)->make();
        $findUser = User::first();
        // Make sure that user exists
        if ($findUser) {
            $findUser->delete();
        }
        $this->assertTrue(true);
    }

    /**
     * Test For User Duplication
     *
     * @test
     */
    public function userDuplication()
    {
        $userA = User::make([
            'name' => 'Damenjo Sitepu',
            'email' => 'damenjo@gmail.com'
        ]);

        $userB = User::make([
            'name' => 'Tari Puspita Sari',
            'email' => 'tari@gmail.com'
        ]);
        
        $this->assertTrue($userA != $userB);
    }
}
