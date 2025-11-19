<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #374151;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(to right, #198fd9, #1a7fc7);
            color: white;
            padding: 30px 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .content {
            background: #ffffff;
            padding: 30px 20px;
            border: 1px solid #e5e7eb;
            border-top: none;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: 600;
            color: #111827;
            margin-bottom: 5px;
        }
        .field-value {
            color: #374151;
            padding: 10px;
            background: #f9fafb;
            border-radius: 6px;
            border-left: 3px solid #198fd9;
        }
        .message-box {
            background: #f9fafb;
            padding: 15px;
            border-radius: 6px;
            border-left: 3px solid #198fd9;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .footer {
            text-align: center;
            padding: 20px;
            color: #6b7280;
            font-size: 14px;
            border-top: 1px solid #e5e7eb;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 style="margin: 0; font-size: 24px;">New Contact Form Submission</h1>
        <p style="margin: 10px 0 0 0; opacity: 0.9;">Solutions Delivered</p>
    </div>

    <div class="content">
        <p style="margin-top: 0;">You have received a new message from your website contact form.</p>

        <div class="field">
            <div class="field-label">Name:</div>
            <div class="field-value">{{ $name }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email:</div>
            <div class="field-value">
                <a href="mailto:{{ $email }}" style="color: #198fd9; text-decoration: none;">{{ $email }}</a>
            </div>
        </div>

        @if($company)
        <div class="field">
            <div class="field-label">Company:</div>
            <div class="field-value">{{ $company }}</div>
        </div>
        @endif

        <div class="field">
            <div class="field-label">Message:</div>
            <div class="message-box">{{ $message }}</div>
        </div>

        <p style="margin-bottom: 0; color: #6b7280; font-size: 14px;">
            <strong>Tip:</strong> You can reply directly to this email to respond to {{ $name }}.
        </p>
    </div>

    <div class="footer">
        <p style="margin: 0;">This email was sent from the Solutions Delivered contact form.</p>
        <p style="margin: 5px 0 0 0;">
            <a href="{{ config('app.url') }}" style="color: #198fd9; text-decoration: none;">{{ config('app.url') }}</a>
        </p>
    </div>
</body>
</html>
