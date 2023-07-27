<?php

namespace Tests\Unit;

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
}
