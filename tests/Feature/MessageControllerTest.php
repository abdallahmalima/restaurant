<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MessageControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_it_post_message()
    {
        $this->actingAs(\App\Models\User::first());
        $response = $this->post('/messages',[
            'name'=>'juma abdallah',
            'email'=>'jumaabdallah@gmail.com',
            'body'=>'this is the message from test',
        ]);
        

        $response->assertStatus(302);
    }
    public function test_it_update_message()
    {
        $this->actingAs(\App\Models\User::first());
        $response = $this->put('/cruds/1',[
            'title'=>'juma abdallah update',
            'description'=>'jumaabdallah@gmail.com',
           
        ]);
        

        $response->assertStatus(302);
    }

    public function test_it_list_messages()
    {
        $this->actingAs(\App\Models\User::first());
        $response = $this->get('/messages');
        $response->dump();

        $response->assertStatus(200);
    }


   
}
