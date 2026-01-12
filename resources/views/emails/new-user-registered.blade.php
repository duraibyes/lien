@extends('emails.layouts.app')

@section('content')
<h2 style="color:#2d3748; margin-top:0;">New User Registered 🎉</h2>

<p style="color:#4a5568;">
    Hello <strong>{{ $superUser->name }}</strong>,
</p>

<p style="color:#4a5568;">
    A new user has registered in the system.
</p>

<table
    style="border-collapse:collapse; margin:20px 0; width:100%;"
    role="table"
>
    <thead>
        <tr style="background-color:#edf2f7;">
            <th
                scope="col"
                style="text-align:left; padding:8px; border:1px solid #e2e8f0;"
            >
                Field
            </th>
            <th
                scope="col"
                style="text-align:left; padding:8px; border:1px solid #e2e8f0;"
            >
                Value
            </th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <th
                scope="row"
                style="padding:8px; border:1px solid #e2e8f0; background-color:#edf2f7;"
            >
                Name
            </th>
            <td style="padding:8px; border:1px solid #e2e8f0;">
                {{ $newUser->name ?? 'New User' }}
            </td>
        </tr>

        <tr>
            <th
                scope="row"
                style="padding:8px; border:1px solid #e2e8f0; background-color:#edf2f7;"
            >
                Email
            </th>
            <td style="padding:8px; border:1px solid #e2e8f0;">
                {{ $newUser->email }}
            </td>
        </tr>
    </tbody>
</table>


<p style="color:#4a5568;">
    Regards,<br>
    <strong>{{ config('app.name') }} Team</strong>
</p>
@endsection