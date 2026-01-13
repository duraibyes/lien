<?php

namespace Tests;

use App\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{

    use CreatesApplication;
    /**
     * Create an authenticated user and return headers
     */
    protected function authenticate(array $userOverrides = []): array
    {
        $user = User::factory()->create($userOverrides);

        $token = $user->createToken('test-token')->plainTextToken;

        return [
            'user' => $user,
            'headers' => [
                'Authorization' => "Bearer $token",
                'Accept' => 'application/json',
            ],
        ];
    }

}

