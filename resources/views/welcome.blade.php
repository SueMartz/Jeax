<!DOCTYPE html>
<html lang="es-MX">
<head>

    <!-- ========================================= -->
    <!-- META BASE -->
    <!-- ========================================= -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $seo['title'] ?? 'JEAX Store | Reparación de Rines en CDMX y Ecatepec' }}</title>

    <meta name="description" content="{{ $seo['description'] ?? 'Especialistas en reparación de rines en CDMX y Ecatepec. Enderezado, diamantado, pintura, restauración y soldadura profesional de rines.' }}">

    <meta name="keywords" content="reparación de rines, diamantado de rines, enderezado de rines, reparación de rines CDMX, reparación de rines Ecatepec, restauración de rines, pintura de rines, JEAX">

    <meta name="robots" content="index, follow">
    <meta name="author" content="JEAX Store">
    <meta name="theme-color" content="#0D0D0D">
    <meta name="format-detection" content="telephone=no">

    <link rel="canonical" href="{{ $seo['url'] ?? url()->current() }}">

    <!-- ========================================= -->
    <!-- FAVICON -->
    <!-- ========================================= -->

    <link rel="shortcut icon" href="/img/logo.png" type="image/png">
    <link rel="preload" as="image" href="/img/logo.png">

    <!-- ========================================= -->
    <!-- GOOGLE FONTS -->
    <!-- ========================================= -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- ========================================= -->
    <!-- OPEN GRAPH -->
    <!-- ========================================= -->

    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_MX">

    <meta property="og:title" content="{{ $seo['title'] ?? 'JEAX Store' }}">
    <meta property="og:description" content="{{ $seo['description'] ?? '' }}">
    <meta property="og:url" content="{{ $seo['url'] ?? url()->current() }}">

    <meta property="og:image" content="{{ asset('/img/og-jeax.jpg') }}">
    <meta property="og:image:secure_url" content="{{ asset('/img/og-jeax.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- ========================================= -->
    <!-- TWITTER -->
    <!-- ========================================= -->

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seo['title'] ?? 'JEAX Store' }}">
    <meta name="twitter:description" content="{{ $seo['description'] ?? '' }}">
    <meta name="twitter:image" content="{{ asset('/img/og-jeax.jpg') }}">

    <!-- ========================================= -->
    <!-- VITE -->
    <!-- ========================================= -->

    @vite(['resources/js/app.js'])

    <!-- ========================================= -->
    <!-- SCHEMA SEO -->
    <!-- ========================================= -->

    @php

    $schema = [
        "@context" => "https://schema.org",
        "@type" => "AutoRepair",

        "name" => "JEAX Store",

        "image" => asset('/img/logo.png'),

        "url" => $seo['url'] ?? url()->current(),

        "telephone" => "+525548488280",

        "priceRange" => "$$",

        "description" => $seo['description'] ?? '',

        "address" => [
            "@type" => "PostalAddress",
            "streetAddress" => "Av Oceanía 291",
            "addressLocality" => "Ciudad de México",
            "addressRegion" => "CDMX",
            "postalCode" => "00000",
            "addressCountry" => "MX"
        ],

        "geo" => [
            "@type" => "GeoCoordinates",
            "latitude" => "19.436",
            "longitude" => "-99.072"
        ],

        "areaServed" => [
            "Ciudad de México",
            "Ecatepec",
            "Nezahualcóyotl",
            "Coacalco",
            "Aragón",
            "Venustiano Carranza"
        ],

        "openingHoursSpecification" => [
            [
                "@type" => "OpeningHoursSpecification",
                "dayOfWeek" => [
                    "Monday",
                    "Tuesday",
                    "Wednesday",
                    "Thursday",
                    "Friday",
                    "Saturday"
                ],
                "opens" => "09:00",
                "closes" => "19:00"
            ]
        ],

        "sameAs" => [
            "https://www.facebook.com/",
            "https://www.instagram.com/"
        ]
    ];

    @endphp

    <script type="application/ld+json">
    {!! json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>

    <!-- FAQ SCHEMA -->
    @if(isset($seo['faq']))
    <script type="application/ld+json">
    {!! json_encode($seo['faq'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) !!}
    </script>
    @endif

    <!-- ========================================= -->
    <!-- ESTILOS -->
    <!-- ========================================= -->

    <style>

        :root{
            --gold: #D4AF37;
            --gold-light: #E5C76B;
            --black: #0D0D0D;
            --dark: #121212;
            --text: #EAEAEA;
            --muted: #A5A5A5;
        }

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        html{
            scroll-behavior:smooth;
        }

        body{
            background:
            radial-gradient(circle at top, #1d1d1d 0%, #0D0D0D 70%);
            color:var(--text);
            font-family:'Montserrat', sans-serif;
            overflow-x:hidden;
            line-height:1.7;
        }

        img{
            max-width:100%;
            height:auto;
            display:block;
        }

        a{
            text-decoration:none;
            transition:all .3s ease;
        }

        /* ========================================= */
        /* MINI SEO */
        /* ========================================= */

        .seo-mini{
            max-width:900px;
            margin:20px auto 0;
            padding:10px 20px;
            text-align:center;
        }

        .seo-mini h2{
            color:var(--gold);
            font-size:15px;
            font-weight:600;
            letter-spacing:1px;
            text-transform:uppercase;
        }

        .seo-mini p{
            margin-top:8px;
            color:#bdbdbd;
            font-size:13px;
        }

        /* ========================================= */
        /* CONTENIDO SEO */
        /* ========================================= */

        .seo-content{
            max-width:1000px;
            margin:40px auto;
            padding:20px;
        }

        .seo-content article{
            width:100%;
        }

        .seo-content h1{
            font-family:'Playfair Display', serif;
            color:var(--gold);
            font-size:clamp(34px,5vw,56px);
            line-height:1.1;
            margin-bottom:25px;
            text-shadow:
                0 0 10px rgba(212,175,55,.25);
        }

        .seo-content h2{
            font-family:'Playfair Display', serif;
            color:var(--gold-light);
            font-size:clamp(24px,3vw,34px);
            margin-bottom:18px;
        }

        .seo-content p{
            margin-bottom:18px;
            color:#E5E5E5;
            font-size:16px;
        }

        .seo-content strong{
            color:#fff;
        }

        .seo-content ul{
            padding-left:22px;
            margin-bottom:20px;
        }

        .seo-content li{
            margin-bottom:10px;
            color:#ddd;
        }

        /* ========================================= */
        /* SECCIONES */
        /* ========================================= */

        .seo-content section{
            background:
            linear-gradient(
                180deg,
                rgba(255,255,255,.03),
                rgba(255,255,255,.01)
            );

            border:1px solid rgba(212,175,55,.12);

            border-radius:22px;

            padding:30px;

            margin-bottom:28px;

            backdrop-filter:blur(6px);

            box-shadow:
                0 10px 30px rgba(0,0,0,.35);
        }

        .seo-content section:hover{
            border-color:rgba(212,175,55,.28);
            transform:translateY(-2px);
        }

        /* ========================================= */
        /* LINKS */
        /* ========================================= */

        .seo-content a{
            color:var(--gold-light);
            font-weight:600;
            position:relative;
        }

        .seo-content a:hover{
            color:#fff;
            text-shadow:0 0 12px rgba(212,175,55,.7);
        }

        /* ========================================= */
        /* BOTÓN WHATSAPP */
        /* ========================================= */

        .seo-content a[href*="wa.me"]{

            display:inline-flex;
            align-items:center;
            justify-content:center;

            padding:14px 24px;

            border-radius:12px;

            background:
            linear-gradient(
                135deg,
                var(--gold),
                var(--gold-light)
            );

            color:#000;

            font-weight:700;

            margin-top:15px;

            box-shadow:
                0 10px 25px rgba(212,175,55,.35);
        }

        .seo-content a[href*="wa.me"]:hover{
            transform:translateY(-3px) scale(1.02);

            box-shadow:
                0 15px 35px rgba(212,175,55,.55);
        }

        /* ========================================= */
        /* IMÁGENES SEO */
        /* ========================================= */

        .seo-content img{

            border-radius:20px;

            margin:25px 0;

            border:1px solid rgba(212,175,55,.15);

            box-shadow:
                0 15px 35px rgba(0,0,0,.45);
        }

        /* ========================================= */
        /* ROOT REACT */
        /* ========================================= */

        #root{
            position:relative;
            z-index:2;
        }

        /* ========================================= */
        /* MOBILE */
        /* ========================================= */

        @media(max-width:768px){

            .seo-content{
                padding:16px;
            }

            .seo-content section{
                padding:22px;
            }

            .seo-content h1{
                font-size:38px;
            }

            .seo-content h2{
                font-size:26px;
            }
        }

    </style>

</head>

<body>

    <!-- ========================================= -->
    <!-- SEO HEADER -->
    <!-- ========================================= -->

    <section class="seo-mini">

        <h2>
            Especialistas en reparación de rines en CDMX Zona Aragon, Venuastiano Carranza, Ecatepec
        </h2>

        <p>
            Enderezado, diamantado, restauración y pintura profesional de rines.
        </p>

    </section>

    <!-- ========================================= -->
    <!-- CONTENIDO SEO -->
    <!-- ========================================= -->

    <main class="seo-content">

        @isset($content)
            {!! $content !!}
        @endisset

    </main>

    <!-- ========================================= -->
    <!-- APP REACT -->
    <!-- ========================================= -->

    @if(!isset($useReact) || $useReact)
        <div id="root"></div>
    @endif

</body>
</html>