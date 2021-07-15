<div>
    <noscript>
        <img height="1" width="1" style="display:none" alt="Barion Pixel" src="https://pixel.barion.com/a.gif?ba_pixel_id='{{ config('laravel-barion.pixelid') }}'&ev=contentView&noscript=1">
    </noscript>
</div>

@push('footer-scripts')
<script>
    // Create BP element on the window
    window["bp"] = window["bp"] || function () {
        (window["bp"].q = window["bp"].q || []).push(arguments);
    };
    window["bp"].l = 1 * new Date();

    // Insert a script tag on the top of the head to load bp.js
    scriptElement = document.createElement("script");
    firstScript = document.getElementsByTagName("script")[0];
    scriptElement.async = true;
    scriptElement.src = 'https://pixel.barion.com/bp.js';
    firstScript.parentNode.insertBefore(scriptElement, firstScript);
    window['barion_pixel_id'] = '{{ config('laravel-barion.pixelid') }}';

    // Send init event
    bp('init', 'addBarionPixelId', window['barion_pixel_id']);
</script>
@endpush
