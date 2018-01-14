<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RoutesTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRoutePoint()
    {
        $this->get('/')->assertStatus(200);
        $this->get('produto/shoppingCart')->assertStatus(200);
        $this->get('/checkout')->assertStatus(200);
        
    }

    public function testAddProductCart()
    {
        $response = $this->get('/addCart/1');
        
        $response->assertStatus(302);
    }

    public function testRemoveProductCart()
    {
        $response = $this->get('/remove/1');
        
        $response->assertStatus(302);
    }
}
