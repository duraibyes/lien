<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\Support\TestConstants;

class AuthApiTest extends TestCase
{
    use RefreshDatabase;
    /**
     * Run master seeders before each test
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->seed();
    }

    /**
     * POST /api/register
     */
    public function test_user_can_register()
    {
        $payload = [
            'email' => 'testuser@mail.com',
            'password' => TestConstants::DEFAULT_PASSWORD,
            'password_confirmation' => TestConstants::DEFAULT_PASSWORD,
        ];

        $response = $this->postJson('/api/signup', $payload);

        $response->assertStatus(201)
            ->assertJsonStructure([
                'message',
                'user' => [
                    'id',
                    'name',
                    'email',
                ],
            ]);

        $this->assertDatabaseHas('users', [
            'email' => 'testuser@mail.com',
        ]);
    }

    /**
     * POST /api/login
     */
    public function test_user_can_login()
    {
        User::factory()->create([
            'email' => 'login@mail.com',
            'password' => Hash::make(TestConstants::DEFAULT_PASSWORD),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => 'login@mail.com',
            'password' => TestConstants::DEFAULT_PASSWORD,
        ]);

        $response->assertStatus(200)
            ->assertJsonStructure([
                'token',
                'user' => [
                    'id',
                    'email',
                ],
            ]);
    }

    /**
     * POST /api/login (wrong password)
     */
    public function test_login_fails_with_invalid_credentials()
    {
        $user = User::factory()->create([
            'password' => Hash::make(TestConstants::DEFAULT_PASSWORD),
        ]);

        $response = $this->postJson('/api/login', [
            'email' => $user->email,
            'password' => 'wrong-password',
        ]);

        $response->assertStatus(422);
    }

    /**
     * POST /api/logout
     */
    public function test_user_can_logout()
    {
        $auth = $this->authenticate();

        $response = $this->postJson('/api/logout', [], $auth['headers']);

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Logged out successfully',
            ]);
    }
}
