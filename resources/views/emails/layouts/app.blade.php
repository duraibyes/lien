<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title ?? config('app.name') }}</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f6f8; font-family: Arial, Helvetica, sans-serif;">

<table
    role="presentation"
    style="width:100%; background-color:#f4f6f8; padding:30px 0; border-collapse:collapse;"
>
    <tr>
        <td style="text-align:center;">

            <!-- Main Container -->
            <table
                role="presentation"
                style="
                    width:600px;
                    max-width:600px;
                    margin:0 auto;
                    background-color:#ffffff;
                    border-radius:6px;
                    overflow:hidden;
                    box-shadow:0 2px 6px rgba(0,0,0,0.08);
                    border-collapse:collapse;
                "
            >

                <!-- Header -->
                <tr>
                    <td style="background-color:#2d3748; padding:20px; text-align:center;">
                        <h1 style="color:#ffffff; margin:0; font-size:22px;">
                            {{ config('app.name') }}
                        </h1>
                    </td>
                </tr>

                <!-- Body -->
                <tr>
                    <td style="padding:30px;">
                        @yield('content')
                    </td>
                </tr>

                <!-- Footer -->
                <tr>
                    <td style="background-color:#f7fafc; padding:15px; text-align:center;">
                        <p style="color:#a0aec0; font-size:12px; margin:0;">
                            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </p>
                    </td>
                </tr>

            </table>
            <!-- End Main Container -->

        </td>
    </tr>
</table>

</body>
</html>
