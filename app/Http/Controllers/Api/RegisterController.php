<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SignupRequest;
use App\Http\Resources\UserResource;
use App\Jobs\SendInvitationOnRegister;
use App\Models\Company;
use App\Models\UserDetails;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


class RegisterController extends Controller
{
    public function signup(SignupRequest $request)
    {

        return DB::transaction(function () use ($request) {

            // Create User
            $user = User::create([
                'email'    => $request->email,
                'password' => Hash::make($request->password),
                'role'     => '5', // member
                'status'   => '0', // inactive
            ]);

            // Create first Company (user can add more later)
            $user->companies()->create([]);

            // Create User Details (one-to-one)
            $user->details()->create([]);

            // Dispatch background job (mail / activation)
            SendInvitationOnRegister::dispatch($user);

            // Create Sanctum token (optional on signup)
            $token = $user->createToken(
                $request->input('device_name', 'api')
            )->plainTextToken;

            return response()->json([
                'message' => 'Registration successful. Your account is pending activation.',
                'user'    => new UserResource($user),
                'token'   => $token,
            ], 201);
        }, 3);
    }
}
