# Solutions Delivered - Official Website

A modern, WCAG 2.2 AA/AAA compliant website built with Laravel 12 and the TALL stack (Tailwind CSS, Alpine.js, Laravel, Livewire).

## Overview

Solutions Delivered is a UK-based consultancy offering tailored business solutions across three core areas:
- **Service Management**: Customized internal process optimization
- **Project Management**: Risk mitigation and delivery oversight
- **Business Change**: Leadership support for organizational transformation

## Technology Stack

- **Backend**: Laravel 12
- **Frontend**:
  - Tailwind CSS v4 (via @tailwindcss/vite)
  - Alpine.js v3
  - Livewire v3
- **Testing**: Pest v3 (PHPUnit 11)
- **Build Tool**: Vite v7
- **Database**: SQLite (development) / MySQL/PostgreSQL (production)

## Features

### WCAG 2.2 Compliance
This website meets WCAG 2.2 Level AA compliance with selected AAA criteria. Key accessibility features include:

- ✓ Keyboard navigation support with visible focus indicators
- ✓ Skip to main content link
- ✓ ARIA landmarks and labels
- ✓ High contrast color scheme (minimum 4.5:1 ratio)
- ✓ Screen reader friendly
- ✓ Responsive design with touch-friendly targets
- ✓ Reduced motion support
- ✓ Accessible forms with validation
- ✓ Semantic HTML5 structure

See [WCAG_COMPLIANCE.md](WCAG_COMPLIANCE.md) for detailed compliance report.

### Pages
- **Home**: Hero section with service overview
- **About**: Company mission and values
- **Solutions**: Detailed service offerings
- **Careers**: Join our team
- **Get Started**: Contact form with validation

### Design Philosophy
- Clean, professional design
- Minimal animations (respects prefers-reduced-motion)
- Mobile-first responsive approach
- Professional color palette:
  - Primary Blue: #198bd9
  - Secondary Green: #65bd7d
  - Dark: #1a1a1a
  - Gray: #4a5568

## Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js 18+ and npm
- SQLite, MySQL, or PostgreSQL

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd solutionsdelivered.co.uk
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Environment configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database**

   For SQLite (default):
   ```bash
   touch database/database.sqlite
   ```

   Or update `.env` for MySQL/PostgreSQL:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations**
   ```bash
   php artisan migrate
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

   Visit: http://localhost:8000

## Development

### Running in development mode

**Backend:**
```bash
php artisan serve
```

**Frontend (with hot reload):**
```bash
npm run dev
```

### Running tests
```bash
php artisan test
# or
./vendor/bin/pest
```

### Code style
```bash
./vendor/bin/pint
```

## Deployment

### Building for production

1. **Install dependencies**
   ```bash
   composer install --no-dev --optimize-autoloader
   npm ci
   ```

2. **Optimize Laravel**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

3. **Build assets**
   ```bash
   npm run build
   ```

4. **Set permissions**
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```

### Environment Variables

Key production environment variables:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://solutionsdelivered.co.uk

# Email configuration for contact form
MAIL_MAILER=smtp
MAIL_HOST=your-smtp-host
MAIL_PORT=587
MAIL_USERNAME=your-username
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@solutionsdelivered.co.uk
MAIL_FROM_NAME="Solutions Delivered"
```

## Project Structure

```
├── app/
│   └── Http/
│       └── Controllers/
│           └── PageController.php    # Main page controller
├── resources/
│   ├── css/
│   │   └── app.css                   # Tailwind CSS with WCAG colors
│   ├── js/
│   │   └── app.js                    # Alpine.js initialization
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php         # Main layout with navigation
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── solutions.blade.php
│       ├── careers.blade.php
│       └── get-started.blade.php
├── routes/
│   └── web.php                       # Application routes
├── tests/                            # Pest tests
├── WCAG_COMPLIANCE.md               # Accessibility compliance report
└── README.md                        # This file
```

## Contact Form

The contact form on the "Get Started" page includes:
- Form validation (name, email, company, message)
- CSRF protection
- Accessible error messages
- Success notifications
- Email delivery support (configure MAIL_ variables in .env)

To customize email handling, modify the `contact()` method in `app/Http/Controllers/PageController.php`.

## Customization

### Colors
Update the color scheme in `resources/css/app.css`:
```css
@theme {
    --color-primary: #198bd9;
    --color-secondary: #65bd7d;
    /* ... */
}
```

**Note**: Ensure any color changes maintain WCAG AA contrast ratios (minimum 4.5:1).

### Content
All page content is in Blade templates under `resources/views/`. Edit these files to update content.

### Navigation
Modify the navigation in `resources/views/layouts/app.blade.php`.

## Browser Support

- Chrome/Edge (latest 2 versions)
- Firefox (latest 2 versions)
- Safari (latest 2 versions)
- Mobile browsers (iOS Safari, Chrome Mobile)

## Accessibility Testing

Recommended tools:
- [axe DevTools](https://www.deque.com/axe/devtools/)
- [WAVE Browser Extension](https://wave.webaim.org/extension/)
- Lighthouse (built into Chrome DevTools)
- Screen readers (NVDA, JAWS, VoiceOver)

## License

Proprietary - Solutions Delivered Ltd

## Support

For technical support or questions:
- Visit: https://solutionsdelivered.co.uk/get-started
- Email: info@solutionsdelivered.co.uk

---

**Built with accessibility in mind** | WCAG 2.2 AA/AAA Compliant
