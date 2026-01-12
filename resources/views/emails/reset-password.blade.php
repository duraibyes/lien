@extends('emails.layouts.app')

@section('content')
<h2>Reset Your Password</h2>

<p>Hello {{ $user->name }},</p>

<p>Click the button below to reset your password:</p>

<p style="text-align:center;">
    <a href="{{ $resetUrl }}"
       style="background:#3182ce; color:#fff;
              padding:12px 22px; text-decoration:none;">
        Reset Password
    </a>
</p>

<p>This link will expire in 60 minutes.</p>

<p>If you didn't request this, you can ignore this email.</p>
@endsection
