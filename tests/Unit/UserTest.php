<?php

namespace Tests\Unit;

use App\Models\User;
use App\services\UserService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test user registration
     */
    public function test_register(): void
    {
        // Prepare test data
        $validData = [
           'name' => 'test',
           'email' => 'test@email.com',
           'role' => 'user',
           'password' => 'pasword@@231',
        ];

        // Create UserService directly
        $userService = $this->app->make(UserService::class);

        // Perform registration
        $result = $userService->register($validData);

        // Assert registration is successful
        $this->assertIsArray($result);
        $this->assertArrayHasKey('id', $result, 'Registration should return an array with an id');
        $this->assertArrayHasKey('name', $result, 'Registration should return an array with a name');
        $this->assertArrayHasKey('email', $result, 'Registration should return an array with an email');
        
        // Verify returned data matches input
        $this->assertEquals($validData['name'], $result['name'], 'Returned name should match input name');
        $this->assertEquals($validData['email'], $result['email'], 'Returned email should match input email');

        // Verify user was created in database
        $this->assertDatabaseHas('users', [
            'name' => $validData['name'],
            'email' => $validData['email'],
            'role' => $validData['role']
        ]);
    }
}
