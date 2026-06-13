# Solutions Delivered - Official Website

The Solutions Delivered website: practical AI for small businesses, with the IT and
project delivery behind it. Built with Laravel 13, Tailwind CSS v4 and Alpine.js, to
WCAG 2.2 AA in both light and dark themes.

## Overview

Solutions Delivered leads with its productised AI offer and keeps its consultancy work
as proof of competence:

- **AI Foundations**: a done-with-you build of an AI workspace that knows your business
- **The Foundations OS**: the self-serve version of the same workspace
- **Consultancy**: web and software development, service management, project management
  and business change

The AI Foundations and Foundations OS pages currently ship as noindex holding states
while the product spec is finalised.

## Technology stack

- **Backend**: Laravel 13 (PHP 8.3+)
- **Frontend**: Tailwind CSS v4 (via `@tailwindcss/vite`) and Alpine.js v3
- **Testing**: Pest v4 (PHPUnit 12)
- **Build tool**: Vite
- **Email/anti-spam**: Spatie Honeypot; Spatie Cookie Consent for the cookie banner

## Design system

The visual system (tokens, type, components, dark mode, accessibility floor) is documented
in [DESIGN.md](DESIGN.md), the single source of truth. In short:

- Warm light theme by default, with a warm dark theme; switched via a `.dark` class plus
  `prefers-color-scheme`, with a toggle in the nav. No component library.
- Self-hosted Hanken Grotesk (headings and body) and IBM Plex Mono (code), in `public/fonts/`.
- Colour and type tokens are CSS variables in `resources/css/app.css`, mapped into Tailwind's
  theme. Verify any new colour pair at WCAG 2.2 AA before use.

## Pages

Home, AI Foundations, The Foundations OS, How it works, Consultancy, About, Contact, plus
Privacy and Terms. Retired URLs (`/solutions`, `/how-we-work`, `/get-started`, `/packages`,
`/careers`) 301-redirect to their replacements.

## Installation

### Prerequisites
- PHP 8.3 or higher
- Composer
- Node.js 18+ and npm

### Setup

```bash
git clone <repository-url>
cd solutionsdelivered.co.uk
composer install
npm install
cp .env.example .env
php artisan key:generate
npm run build
php artisan serve   # visit http://localhost:8000
```

## Development

```bash
php artisan serve        # backend
npm run dev              # frontend with hot reload
php artisan test         # run the Pest suite
./vendor/bin/pint        # code style
```

## Deployment

Production needs both a Composer install and an asset build (the compiled assets in
`public/build` are not committed):

```bash
composer install --no-dev --optimize-autoloader
npm ci && npm run build
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Key production environment variables

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://solutionsdelivered.co.uk

MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@solutionsdelivered.co.uk
MAIL_FROM_NAME="Solutions Delivered"
```

## Project structure

```
├── app/
│   ├── Http/Controllers/PageController.php   # All page routes
│   ├── Http/Requests/ContactFormRequest.php  # Contact validation
│   ├── Mail/ContactFormSubmitted.php
│   └── View/Composers/BrandComposer.php      # Shares nav/company config to views
├── config/
│   ├── brand.php                             # Company, contact and nav config
│   └── packages.php                          # Productised consultancy engagements
├── resources/
│   ├── css/app.css                           # Tokens, fonts, dark mode
│   ├── js/app.js                             # Alpine + dark-mode store
│   └── views/                                # Pages, partials and the component kit
├── routes/web.php                            # Routes and redirects
├── tests/                                    # Pest feature tests
├── DESIGN.md                                 # Design system (source of truth)
└── README.md
```

## Contact form

The contact form posts to a throttled, honeypot-protected route, validates input via
`ContactFormRequest`, and emails the enquiry. Arriving from a Consultancy engagement
(`?package=<slug>`) or a product page (`?topic=<slug>`) prefills the message. Configure the
`MAIL_*` variables in `.env` for delivery.

## License

Proprietary - Solutions Delivered Ltd
