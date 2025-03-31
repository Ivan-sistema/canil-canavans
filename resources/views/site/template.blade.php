<html>
<head>
<meta charset="UTF-8">
    <meta name="keywords" content="CANAVANS, CANIL DE HUSKY">
    <meta name="description" content="O melhor Canil de Husky siberiano do Brasil">
    <meta name="author" content="Helptask Sistemas e Soluções e Agência Missão Web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css" />
    @vite(['resources/assets/css/app.css'])
    <title>Canil Canavans</title>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SPB6T3WMJY"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SPB6T3WMJY');
</script>
</head>
<body>
<!-- Header -->
<x-base.header />
<!-- /Header -->

    @yield('content')

    @vite(['resources/assets/js/app.js'])
    <script src="assets/js/app.js"></script>
</body>

<!-- Footer -->
<x-base.footer />
<!-- /Footer -->
<div class="whatsapp">
                <a href="https://w.app/mxowfz" title="Canil Canavans | Fale Conosco" target="_blank">
                    <img src="./assets/images/whatsapp.png" alt="Canil Canavans | Fale Conosco">
                </a>
            </div>
</html>
