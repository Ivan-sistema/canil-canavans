<html>
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="CANAVANS, CANIL DE HUSKY">
    <meta name="description" content="O melhor Canil de Husky siberiano do Brasil">
    <meta name="author" content="Helptask Sistemas e Soluções e Agencia Missão Web">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/assets/css/app.css'])
    <title>Canil Canavans</title>
</head>
<body>
<!-- Header -->
<x-base.header />
<!-- /Header -->

    @yield('content')

    @vite(['resources/assets/js/app.js'])
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
