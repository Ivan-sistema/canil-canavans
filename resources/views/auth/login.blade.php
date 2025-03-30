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
    @vite(['resources/assets/css/app.css', 'resources/assets/js/app.js'])
    <title>Canil Canavans</title>
    
  </head>
  <body>
    <div class="login">
      <div class="login__side-image"></div>
      <div class="login__formulario">
        <div class="login__formulario--header">
          <img src="{{asset('assets/images/logotipo.png')}}" alt="Canil Canavans">
        </div>
        <div class="login__formulario--content">
        <form action="">
                    <div class="contato__formulario--title-form" style="margin-bottom:5%;">
                        <h3>Faça seu Login</h3>
                    </div>
                       
                        <x-form.input-email id="email" name="email" placeholder="E-mail:" />
                        <input type="password" name="password" placeholder="Senha:">

                    <button class="button button_small button_small--primary m5" type="submit"> LOGIN</button>



                </form>
        </div>
      </div>
    </div>
  </body>
</html>