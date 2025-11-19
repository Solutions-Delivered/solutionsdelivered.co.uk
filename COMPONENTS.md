# Blade Components & Infrastructure Guide

This document explains the reusable Blade components, brand configuration, and infrastructure improvements implemented in this project.

## 📦 Blade Components

### Icon Components

#### `<x-icon.check>`
Reusable checkmark icon (commonly used for trust indicators and feature lists).

**Props:**
- `size` (default: '5') - Size of the icon (w-{size} h-{size})
- `color` (default: 'green-400') - Tailwind color class

**Example:**
```blade
<x-icon.check size="6" color="blue-500" class="mr-2" />
```

#### `<x-icon.arrow>`
Reusable arrow icon with directional support.

**Props:**
- `direction` (default: 'right') - Direction: 'right', 'left', 'up', 'down'
- `size` (default: '5') - Size of the icon

**Example:**
```blade
<x-icon.arrow direction="right" class="ml-2" />
```

### Button Components

#### `<x-button.gradient>`
Gradient CTA button with hover effects and optional icon.

**Props:**
- `href` - Link destination (for link type)
- `icon` (default: 'arrow') - Icon to display (set to null for no icon)
- `iconDirection` (default: 'right') - Arrow direction
- `type` (default: 'link') - 'link' or 'button'

**Examples:**
```blade
{{-- As a link --}}
<x-button.gradient href="{{ route('get-started') }}">
    Get Started
</x-button.gradient>

{{-- As a button (for forms) --}}
<x-button.gradient type="button" icon="arrow">
    Submit
</x-button.gradient>

{{-- Without icon --}}
<x-button.gradient href="/contact" :icon="null">
    Contact Us
</x-button.gradient>
```

### Badge Components

#### `<x-badge.breadcrumb>`
Breadcrumb badge with optional icon (used in page headers).

**Props:**
- `icon` (optional) - SVG path for the icon

**Example:**
```blade
<x-badge.breadcrumb class="mb-6">
    <x-slot:icon>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
    </x-slot:icon>
    Get Started
</x-badge.breadcrumb>
```

### Layout Components

#### `<x-trust-indicator>`
Trust indicator with checkmark icon and text.

**Props:**
- `iconColor` (default: 'green-400') - Color of the checkmark

**Example:**
```blade
<x-trust-indicator>
    WCAG 2.2 Compliant
</x-trust-indicator>
```

#### `<x-section-heading>`
Section heading with optional eyebrow label.

**Props:**
- `eyebrow` (optional) - Small label above heading
- `align` (default: 'center') - Text alignment: 'center', 'left', 'right'
- `id` (optional) - ID for the h2 element

**Example:**
```blade
<x-section-heading eyebrow="What We Offer" id="services-heading">
    Our Core Services
</x-section-heading>
```

## ⚙️ Brand Configuration

All brand-related data is centralized in `config/brand.php`.

### Accessing Brand Data

In controllers:
```php
$colors = config('brand.colors');
$companyName = config('brand.company.name');
```

In views (via View Composer):
```blade
{{ $companyInfo['name'] }}
{{ $contactInfo['general'] }}
@foreach($navigation as $item)
    <a href="{{ route($item['route']) }}">{{ $item['label'] }}</a>
@endforeach
```

### Brand Config Structure

- **Colors**: Primary brand colors (#198fd9, #1a7fc7, #0f6ba8)
- **Company Info**: Name, tagline, description, location
- **Contact Info**: Email addresses (general, privacy, support)
- **Social Media**: Social profile URLs (prepared for future use)
- **SEO Defaults**: Default meta information
- **Trust Indicators**: Key trust messages
- **Services**: Core service offerings
- **Navigation**: Main navigation items
- **Design Tokens**: Reusable design patterns (shadows, gradients, etc.)

## 📧 Contact Form

### Form Request Validation

Contact form validation is handled by `App\Http\Requests\ContactFormRequest`.

**Features:**
- Comprehensive validation rules
- Custom error messages
- Input sanitization (strips HTML tags)
- Email format validation with DNS checking

### Email Notifications

Contact form submissions trigger email notifications via `App\Mail\ContactFormSubmitted`.

**Email Features:**
- HTML and plain text versions
- Professional branded design
- Reply-to set to submitter's email
- Sent to `config('brand.contact.general')`
- Error handling with logging

**Configuration:**
Set up your mail driver in `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@solutionsdelivered.co.uk"
MAIL_FROM_NAME="${APP_NAME}"
```

## 🔒 Security Headers

Security headers are automatically applied to all responses via `App\Http\Middleware\SecurityHeaders`.

**Headers Applied:**
- **Strict-Transport-Security (HSTS)**: Forces HTTPS (1 year max-age)
- **X-Content-Type-Options**: Prevents MIME sniffing
- **X-Frame-Options**: Prevents clickjacking
- **X-XSS-Protection**: XSS filter for legacy browsers
- **Referrer-Policy**: Controls referrer information
- **Permissions-Policy**: Restricts browser features
- **Content-Security-Policy**: Prevents XSS and injection (production only)

The CSP is currently configured for Tailwind and Alpine.js. Adjust in `SecurityHeaders.php` if you add external resources.

## 🎨 View Composer

The `BrandComposer` automatically shares brand data with all views.

**Available in all views:**
- `$brandColors` - Brand color palette
- `$companyInfo` - Company information
- `$contactInfo` - Contact email addresses
- `$navigation` - Navigation items
- `$trustIndicators` - Trust indicator messages

## 🚀 Future Refactoring Opportunities

The components are ready to use. To refactor existing views:

1. **Replace repeated checkmarks:**
   ```blade
   {{-- Before --}}
   <svg class="w-5 h-5 text-green-400 mr-2" fill="currentColor" viewBox="0 0 20 20">...</svg>

   {{-- After --}}
   <x-icon.check class="mr-2" />
   ```

2. **Replace gradient buttons:**
   ```blade
   {{-- Before --}}
   <a href="/contact" class="group relative inline-flex items-center...">...</a>

   {{-- After --}}
   <x-button.gradient href="/contact">Contact Us</x-button.gradient>
   ```

3. **Replace trust indicators:**
   ```blade
   {{-- Before --}}
   <div class="flex items-center">
       <svg class="w-5 h-5 text-green-400 mr-2">...</svg>
       <span>WCAG 2.2 Compliant</span>
   </div>

   {{-- After --}}
   <x-trust-indicator>WCAG 2.2 Compliant</x-trust-indicator>
   ```

4. **Replace section headings:**
   ```blade
   {{-- Before --}}
   <div class="text-center mb-16">
       <p class="text-sm font-semibold text-[#198fd9]...">What We Offer</p>
       <h2 class="text-4xl md:text-5xl font-bold...">Our Services</h2>
   </div>

   {{-- After --}}
   <x-section-heading eyebrow="What We Offer">
       Our Services
   </x-section-heading>
   ```

## 📚 Best Practices

1. **Use components** instead of copying HTML - ensures consistency
2. **Access brand data** from config instead of hardcoding
3. **Leverage View Composer** for shared data across views
4. **Form Requests** for validation logic separation
5. **Mailable classes** for clean, testable email code
6. **Middleware** for cross-cutting concerns like security headers

## 🧪 Testing

All infrastructure has been tested:
- ✅ Assets build successfully
- ✅ Components are available via Laravel's component auto-discovery
- ✅ Brand config is accessible
- ✅ Form Request validation works
- ✅ Email templates render correctly
- ✅ Security headers are applied
- ✅ View Composer shares data

## 📝 Notes

- Components use **Tailwind CSS** classes
- All components are **WCAG 2.2 AA compliant**
- Icons use **heroicons** SVG paths
- Color scheme matches brand guidelines (#198fd9 family)
- Security headers are **production-ready**
