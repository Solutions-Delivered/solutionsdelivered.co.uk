# {{ config('brand.company.name') }}

> {{ config('brand.company.tagline') }} Based in {{ config('brand.company.address.locality') }}, UK. Company No. {{ config('brand.company.company_number') }}.

{{ config('brand.company.description') }} The firm is Sam Jenkins, with fifteen years of software delivery, service management and project management behind the practice. We use AI in our own day-to-day work and set the same workspace up for clients.

## Products

- [The Foundations OS]({{ route('foundations-os') }}): A ready-built Claude workspace you set up once, so every chat opens already knowing your business, your customers and how you sound. £{{ config('polar.products.foundations-os.price') }} + VAT, one-time.
- [AI Foundations]({{ route('ai-foundations') }}): A guided, four-week done-with-you build of the same workspace in a small group. £1,500 + VAT.

## Services

- [Consultancy]({{ route('consultancy') }}): Bespoke web and software development, ITIL service management, PRINCE2 project delivery, and business change. The delivery work behind the AI.

## About

- [About]({{ route('about') }}): Sam Jenkins, founder. Background, credentials (MEng Computer Science, PRINCE2, ITIL) and approach.
- [How it works]({{ route('how-it-works') }}): The four-step engagement process, from first conversation to handover and support.

## Contact

- Email: {{ config('brand.contact.general') }}
- Response time: within {{ config('brand.contact.response_time') }}
- [Contact form]({{ route('contact') }})
