@env('production')
    <link href="https://www.googletagmanager.com" rel="preconnect" crossorigin>
    <link rel="dns-prefetch" href="https://www.googletagmanager.com">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','{{ config('app.google-analytics-id') }}');</script>
    <!-- End Google Tag Manager -->
@endenv
