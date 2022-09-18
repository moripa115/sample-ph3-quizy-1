<?php

namespace Tests\Feature;

use App\BigQuestion;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IndexTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $data = factory(BigQuestion::class)->create();
        $response = $this->get('/');

        $response->assertStatus(200);


        // dd($data->name);

        $response->assertSee($data->name);
    }
}
