import './bootstrap';
import Alpine from 'alpinejs';

// Dark-mode store. The .dark class is set pre-paint by the inline head script
// (resources/views/partials/theme-script.blade.php); this keeps the toggle in
// sync and persists the visitor's explicit choice.
document.addEventListener('alpine:init', () => {
    Alpine.store('theme', {
        dark: document.documentElement.classList.contains('dark'),
        toggle() {
            this.dark = !this.dark;
            document.documentElement.classList.toggle('dark', this.dark);
            try {
                localStorage.setItem('sd-theme', this.dark ? 'dark' : 'light');
            } catch (e) {
                // localStorage unavailable; the in-page toggle still works for this session.
            }
        },
    });
});

window.Alpine = Alpine;
Alpine.start();
