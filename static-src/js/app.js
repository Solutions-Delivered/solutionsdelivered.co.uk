// Site script: theme store, cookie consent banner, contact form prefill.
// Alpine itself is loaded separately (assets/alpine.js).

// Dark-mode store. The .dark class is set pre-paint by the inline head script;
// this keeps the toggle in sync and persists the visitor's explicit choice.
document.addEventListener('alpine:init', () => {
    window.Alpine.store('theme', {
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

// Cookie consent. Same cookie name and lifetime as the previous Laravel package
// so earlier consents carry over. Decline only hides the banner (not remembered).
(function () {
    var COOKIE_NAME = 'laravel_cookie_consent';
    var COOKIE_VALUE = 1;
    var LIFETIME_DAYS = 7300;

    function hideCookieDialog() {
        var dialogs = document.getElementsByClassName('js-cookie-consent');
        for (var i = 0; i < dialogs.length; ++i) {
            dialogs[i].style.display = 'none';
        }
    }

    function consentWithCookies() {
        var date = new Date();
        date.setTime(date.getTime() + LIFETIME_DAYS * 24 * 60 * 60 * 1000);
        document.cookie = COOKIE_NAME + '=' + COOKIE_VALUE
            + ';expires=' + date.toUTCString()
            + ';domain=' + window.location.hostname
            + ';path=/;samesite=lax'
            + (window.location.protocol === 'https:' ? ';secure' : '');
        hideCookieDialog();
    }

    if (document.cookie.split('; ').indexOf(COOKIE_NAME + '=' + COOKIE_VALUE) !== -1) {
        hideCookieDialog();
    }

    var agree = document.getElementsByClassName('js-cookie-consent-agree');
    var decline = document.getElementsByClassName('js-cookie-consent-decline');
    for (var i = 0; i < agree.length; ++i) agree[i].addEventListener('click', consentWithCookies);
    for (var j = 0; j < decline.length; ++j) decline[j].addEventListener('click', hideCookieDialog);
})();

// Contact form: stamp the page-load time for the form worker's timing check, and
// prefill from ?package=<slug> / ?topic=<slug> (the old server-side behaviour).
(function () {
    var form = document.getElementById('contact-form');
    if (!form) return;

    var stamp = form.querySelector('input[name="_t"]');
    if (stamp) stamp.value = Date.now();

    var data = JSON.parse(form.getAttribute('data-prefill') || '{}');
    var params = new URLSearchParams(window.location.search);
    var message = form.querySelector('#message');
    var prefill = '';

    var slug = params.get('package');
    if (slug && Object.prototype.hasOwnProperty.call(data.packages || {}, slug)) {
        var name = data.packages[slug];
        prefill = "I'm interested in your " + name + " engagement. Please get in touch to discuss.";
        var box = document.getElementById('package-box');
        if (box) {
            box.querySelector('[data-package-name]').textContent = name;
            box.hidden = false;
        }
        var hidden = form.querySelector('input[name="package"]');
        if (hidden) {
            hidden.value = slug;
            hidden.disabled = false;
        }
    } else {
        var topic = params.get('topic');
        if (topic && Object.prototype.hasOwnProperty.call(data.topics || {}, topic)) {
            prefill = "I'd like to register my interest in " + data.topics[topic] + '. Please let me know more.';
        }
    }

    if (message && prefill && !message.value) message.value = prefill;
})();
