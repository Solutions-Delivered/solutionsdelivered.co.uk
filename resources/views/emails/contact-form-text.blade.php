NEW CONTACT FORM SUBMISSION
Solutions Delivered
{{ str_repeat('=', 50) }}

You have received a new message from your website contact form.

Name: {{ $name }}
Email: {{ $email }}
@if($company)
Company: {{ $company }}
@endif

Message:
{{ str_repeat('-', 50) }}
{{ $message }}
{{ str_repeat('-', 50) }}

You can reply directly to this email to respond to {{ $name }}.

---
This email was sent from the Solutions Delivered contact form.
{{ config('app.url') }}
