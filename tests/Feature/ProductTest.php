<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{
    /**
     * Accessing Main View
     *
     * @test
     */
    public function accessMainView(): void 
    {
        $response = $this->get("/products");
        $response->assertStatus(200);
    }
}
