<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Verify Your Email</title>
</head>

<body style="font-family: Arial, sans-serif; background-color: #f8f9fa; margin: 0; padding: 40px;">
    <div
        style="max-width: 700px; margin: auto; background-color: #ffffff; border-radius: 8px; padding: 30px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ url('assets/images/logo') . "/" . config('setting.site_logo_light_mode') }}" alt="logo"
                class="logo-dark-mode" width="200" />
            <h3 style="margin-bottom: 10px;">Verify Your Email</h3>
            <p style="color: #6c757d;">Please verify your email address to complete your registration.</p>
        </div>

        <p>Hey {{ $data['first_name'] }},</p>
        <p>Thanks for registering with us. Please click on the button below to verify your email and activate your
            account.</p>

        <div style="text-align: center; margin: 20px 0;">
            <a href="{{ $data['route'] }}"
                style="display: inline-block; padding: 12px 24px; background-color: #007bff; color: white; text-decoration: none; border-radius: 25px;">Verify
                Email</a>
        </div>

        <p>If the button above doesn’t work, copy and paste this link into your browser:</p>
        <p style="word-break: break-all;"><small><a href="{{ $data['route'] }}">{{ $data['route'] }}</a></small></p>

        <p>We hope to provide you with the best payment experience.</p>
        <p>If you have not requested this, please ignore this email.</p>

        <p>Thanks & Regards,<br>{{ config('setting.site_name') }}</p>
    </div>
</body>

</html>