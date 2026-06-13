<div class="js-cookie-consent cookie-consent fixed inset-x-0 bottom-0 z-[9999] px-4 pb-4 sm:px-6" role="dialog" aria-live="polite" aria-label="Cookie consent" aria-describedby="cookie-consent-text">
    <div class="mx-auto max-w-3xl rounded-md border border-border bg-surface p-5 shadow-sm">
        <div class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between">
            <p id="cookie-consent-text" class="cookie-consent__message text-sm leading-relaxed text-text">
                {!! trans('cookie-consent::texts.message') !!}
            </p>

            <div class="flex shrink-0 gap-3">
                <button
                    type="button"
                    class="js-cookie-consent-decline cookie-consent__decline inline-flex items-center justify-center rounded-md border border-border-strong bg-surface px-4 py-2.5 text-sm font-medium text-ink transition-colors hover:border-ink"
                    aria-label="Decline non-essential cookies"
                >
                    Decline
                </button>
                <button
                    type="button"
                    class="js-cookie-consent-agree cookie-consent__agree inline-flex items-center justify-center rounded-md bg-blue-strong px-4 py-2.5 text-sm font-medium text-white transition-colors hover:bg-blue-strong-hover"
                    aria-label="Accept cookies"
                >
                    {{ trans('cookie-consent::texts.agree') }}
                </button>
            </div>
        </div>
    </div>
</div>
