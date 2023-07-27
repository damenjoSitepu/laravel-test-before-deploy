<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RouteTest extends TestCase
{   
    /**
     * Route Test
     * 
     * @test
     */
    public function routeTest(): void
    {
        $response = $this->get("/dashboard");
        $response->assertStatus(200);
    }

    /**
     * Route Test For Profile
     * 
     * @test 
     */
    public function routeProfileTest()
    {
        $response = $this->get("profiles");
        $response->assertStatus(404);
    }
}
