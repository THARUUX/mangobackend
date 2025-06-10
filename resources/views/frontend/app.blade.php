<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <link rel="alternate" href="{{ url()->current() }}" hreflang="om-et" />
    <meta property="og:title" content="@yield('title')">
    <meta property="og:type" content="website" />
    <meta property="og:description" content="@yield('description')">
    <meta property="og:image" content="{{ asset('img/cover.webp') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta name="twitter:card" content="{{ asset('img/cover.webp') }}">
    <meta name="twitter:title" content="@yield('title')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="{{ asset('img/cover.webp') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://honwix.com/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://honwix.com/css/app.min.css">
    <link rel="stylesheet" type="text/css" href="https://honwix.com/lib/toastify/toastify.min.css">
    <script type="text/javascript" src="https://honwix.com/lib/toastify/toastify.min.js"></script>
    <link rel="stylesheet" href="https://honwix.com/plugins/sweetalert2/sweetalert2.min.css" />
    <script src="https://honwix.com/plugins/sweetalert2/sweetalert2.all.min.js"></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HDCFMR578K"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-HDCFMR578K');
    </script>

    <link rel="stylesheet" type="text/css" href="{{ asset('lib/toastify.min.css') }}">
    <script type="text/javascript" src="{{ asset('lib/toastify.min.js') }}"></script>

    <link rel="stylesheet" href="{{ asset('css/frontend.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://samstourslanka.com/css/fancybox.min.css" />
</head>

<body>

    @include('frontend.layouts.header')
    <main>
        @yield('content')
    </main>
    @include('frontend.layouts.footer')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/frontend.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://samstourslanka.com/js/fancybox.min.js"></script>

    @if (session('error'))
        <script type="text/javascript">
            showToast("{{ session('error') }}");
        </script>
    @endif


    @if (session('success'))
        <script type="text/javascript">
            showToast("{{ session('success') }}");
        </script>
    @endif
<script async src='https://d2mpatx37cqexb.cloudfront.net/delightchat-whatsapp-widget/embeds/embed.min.js'></script>
        <script>
          var wa_btnSetting = {"btnColor":"#16BE45","ctaText":"WhatsApp Us","cornerRadius":40,"marginBottom":20,"marginLeft":20,"marginRight":20,"btnPosition":"right","whatsAppNumber":"94723555567","welcomeMessage":"👋 Welcome to X-Guard Security! How can we assist you today?","zIndex":999999,"btnColorScheme":"light"};
          window.onload = () => {
            _waEmbed(wa_btnSetting);
          };
        </script>
      

</body>

</html>
