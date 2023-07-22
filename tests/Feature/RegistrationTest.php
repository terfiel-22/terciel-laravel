<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use WithoutMiddleware;
    use RefreshDatabase;
 
    public function test_user_can_be_created_on_valid_data()
    {
        $userDataForRegistrationForm = [
            'name' => 'Terciel Kenway',
            'email' => 'terciel@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ];
        $response = $this->json('POST','/register', $userDataForRegistrationForm);
        $response->assertCreated();

        $userDataOnDatabase = [
            'name' => 'Terciel Kenway',
            'email' => 'terciel@example.com',
        ];
        $this->assertDatabaseHas('users',$userDataOnDatabase);
    }

    public function test_user_can_not_be_created_on_invalid_data()
    {
        $userData = [
            'name' => 'John Doe',
            'email' => 'johexampleom',
            'password' => 'password123',
            'password_confirmation' => 'passwford123',
        ];
        
        $response = $this->json('POST','/register', $userData);
        $response->assertUnprocessable();
    }

}