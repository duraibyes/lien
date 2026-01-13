<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\Support\TestConstants;
use Tests\TestCase;

class SubUserApiTest extends TestCase
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
     * GET /api/sub-users/datatable
     */
    public function test_subuser_datatable()
    {
        $auth = $this->authenticate();

        // create sub users
        User::factory()->count(3)->create([
            'parent_id' => $auth['user']->id,
            'password'  => Hash::make(TestConstants::DEFAULT_PASSWORD),
        ]);

        $response = $this->getJson(
            '/api/sub-users/datatable',
            $auth['headers']
        );

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data',
                'meta' => [
                    'current_page',
                    'per_page',
                    'total',
                    'last_page',
                ],
            ]);
    }
    /**
     * GET /api/sub-users/{id}
     */
    public function test_view_subuser()
    {
        $auth = $this->authenticate();

        $subUser = User::factory()->create([
            'parent_id' => $auth['user']->id,
            'password'  => Hash::make(TestConstants::DEFAULT_PASSWORD),
        ]);

        $response = $this->getJson(
            "/api/sub-users/{$subUser->id}",
            $auth['headers']
        );

        $response->assertStatus(200)
            ->assertJsonStructure([
                'data' => [
                    'id',
                    'name',
                    'email',
                ],
            ]);
    }

    /**
     * POST /api/sub-users
     */
    public function test_create_subuser()
    {
        $auth = $this->authenticate();

        $company = \App\Models\Company::factory()->create([
            'user_id' => $auth['user']->id,
        ]);

        $stateId = \DB::table('states')->value('id');

        $payload = [
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'email'      => 'subuser@mail.com',
            'user_name'  => 'subuser1',
            'password'   => TestConstants::DEFAULT_PASSWORD,
            'password_confirmation'   => TestConstants::DEFAULT_PASSWORD,
            'phone'      => '9876543210',
            'address'    => 'Test address',
            'city'       => 'Chennai',
            'state_id'   => $stateId,
            'zip_code'   => 35004,
            'country'    => 'India',
            'company_id' => $company->id
        ];

        $response = $this->postJson(
            '/api/sub-users',
            $payload,
            $auth['headers']
        );

        $response->assertStatus(201)
            ->assertJson([
                'message' => 'Sub user created successfully',
            ]);

        $this->assertDatabaseHas('users', [
            'email' => 'subuser@mail.com',
            'parent_id' => $auth['user']->id,
        ]);
    }

    public function test_update_subuser()
    {
        $auth = $this->authenticate();

        // create parent company
        $company = \App\Models\Company::factory()->create([
            'user_id' => $auth['user']->id,
        ]);


        $stateId = \DB::table('states')->value('id');

        // create sub user
        $subUser = \App\User::factory()->create([
            'parent_id' => $auth['user']->id,
        ]);

        $payload = [
            'company_id' => $company->id,
            'first_name' => 'Updated',
            'last_name'  => 'User',
            'email' => $subUser->email,
            'user_name' => $subUser->user_name,
            'phone'      => '9999999999',
            'state_id'   => $stateId,
            'zip_code'   => 35006,
            'address' => 'home kumar aferes',
            'city' => 'jiop'
        ];

        $response = $this->putJson(
            "/api/sub-users/{$subUser->id}",
            $payload,
            $auth['headers']
        );

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Sub user updated successfully',
            ]);
    }

    /**
     * DELETE /api/sub-users/{id}
     */
    public function test_delete_subuser()
    {
        $auth = $this->authenticate();

        $subUser = User::factory()->create([
            'parent_id' => $auth['user']->id,
            'password'  => Hash::make(TestConstants::DEFAULT_PASSWORD),
        ]);

        $response = $this->deleteJson(
            "/api/sub-users/{$subUser->id}",
            [],
            $auth['headers']
        );

        $response->assertStatus(200)
            ->assertJson([
                'message' => 'Sub user deleted successfully',
            ]);
    }

    /**
     * Unauthorized access to another parent’s subuser
     */
    public function test_cannot_access_other_parent_subuser()
    {
        $auth = $this->authenticate();

        $otherParent = User::factory()->create();

        $subUser = User::factory()->create([
            'parent_id' => $otherParent->id,
        ]);

        $response = $this->getJson(
            "/api/sub-users/{$subUser->id}",
            $auth['headers']
        );

        $response->assertStatus(403);
    }
}
