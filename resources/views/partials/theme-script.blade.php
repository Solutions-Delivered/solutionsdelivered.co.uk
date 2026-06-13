{{-- Sets the colour theme before first paint to avoid a flash. Stored choice
     wins; otherwise the visitor's system preference is honoured. Must stay inline
     and early in <head>, before the stylesheet. --}}
<script>
    (function () {
        try {
            var stored = localStorage.getItem('sd-theme');
            var dark = stored ? stored === 'dark' : window.matchMedia('(prefers-color-scheme: dark)').matches;
            document.documentElement.classList.toggle('dark', dark);
        } catch (e) {
            /* default to light */
        }
    })();
</script>
