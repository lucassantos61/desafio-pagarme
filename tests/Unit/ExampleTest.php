<?php

namespace Tests\Unit;

use Tests\TestCase;
use fantasias\User;

use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->be(factory(User::class)->create());
        $data = [
            'name' => 'My name',
            'location' => 'Third Street Promenade',
        ];
        $response = $this->post('/user', $data);
        $response->assertSessionHasErrors(['email']);
     
    }
}
