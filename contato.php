<!DOCTYPE html>

<html lang="pt">

  <head>
    <title>JuntosES | Contato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content=" Somos uma rede de entidades do terceiro setor que nasceu da necessidade de integração, mapeamento e priorização de demandas decorrentes da pandemia do Covid-19 dentro do Estado do Espírito Santo.">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png">
    
    <script rel=preconnect src="https://use.fontawesome.com/a5c9b890ce.js"></script>
    <link rel="stylesheet" href="fonts/icomoon/style-min.css">
    <!-- <link rel="manifest" href="./images/site.webmanifest"> -->

    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style-min.css">
    <link rel="stylesheet" href="css/style-edit-min.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body">
        </div>
      </div>

  
      <header style="background-color: #efefef;" class="site-navbar site-navbar-target  shadow">
        <div class="container">
          <div class="row align-items-center position-relative">
            <div class="site-logo">
              <a href="/"  class="text-white">
                <img src="./images/logos/JUNTOS_HORIZONTAL.png" alt="">
              </a>
            </div>
            <nav class="site-navigation text-left ml-auto " role="navigation">
              <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                <li><a href="/" class="nav-link">Home</a></li>
                <li><a href="contato.html" class="nav-link">Contato</a></li>
              </ul>
            </nav>
            <div class="ml-auto toggle-button d-inline-block d-lg-none">
              <a href="#" class="site-menu-toggle py-5 js-menu-toggle text-white">
                <span class="icon-menu h3 text-white"></span>
              </a>
            </div>
          </div>
        </div>
      </header>

      <div class="container">
        <div class="row">
          <div class="col-lg-12 mt-5">
            <h3 class="text-cursive">Entre em contato por email ou  <a class="whatsapp" href="https://api.whatsapp.com/send?phone=5527995160149">WhatsApp <i class="fa fa-whatsapp"></i></a></h3>
          </div>
        </div>
      </div>

      <div class="site-section contato-container pt-3">
        <div class="container">
          
          <div class="row">

            <div class="col-lg-8 mb-5" >

              <form id="email-sending">
                <div class="form-group row">
                  <div class="col-md-6 mb-4 mb-lg-0">
                    <input  name="name" id="name" type="text" class="form-control" placeholder="Digite seu nome">
                  </div>
                  <div class="col-md-6">
                    <input  name="email" id="email" type="email" class="form-control" placeholder="Digite seu email">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <input  name="subject" id="subject" type="text" class="form-control" placeholder="Digite o assunto do email">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <textarea name="message" id="message" class="form-control" placeholder="Escreve seu texto aqui" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-6 mr-auto">
                    <input type="submit" class="btn btn-block btn-primary text-white py-3 px-5 rounded-bottom" value="Enviar mensagem">
                  </div>
                </div>
                <span id="error_message" class="text-danger"></span>  
                <span id="success_message" class="text-success"></span> 
              </form>

            </div>

          </div>

        </div>
      </div>
    
      <footer class="site-footer bg-secondary">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="footer-heading mb-4 p-2">Conheça nossas redes</h2>
              <a href="https://www.instagram.com/juntos_es/" target="__blank" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
              <a href="https://www.facebook.com/juntoses.org" target="__blank" class="pl-3 pr-3"><span class="icon-facebook"></span></a>
            </div>
          </div>

          <div class="row pt-5 mt-3 text-center">
            <div class="col-md-12">
                <p>
                  Copyleft <span class="copyleft">&copy;</span> <script>document.write(new Date().getFullYear());</script>
                </p>
            </div>
          </div>
        </div>
      </footer>

    </div>

</body>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/main-min.js"></script>

    <script>  
      $(document).ready(function(){  

        $("form").submit(function(e){
            e.preventDefault();
              var name = $('#name').val();  
              var message = $('#message').val();  
              var email = $('#email').val();  
              var subject = $('#subject').val();  
              if(name == '' || message == '' || email == '' || subject == '')  
              {  
                    $('#error_message').html("Todos os campos são obrigatórios");  
              }  
              else  
              {  
                    $('#error_message').html('');  
                    console.log('teste');
                    $.ajax({  
                        url:"mail.php",  
                        method:"POST",  
                        data:{name:name, message:message, email:email, subject:subject},  
                        success:function(data){  
                              $("#email-sending")[0].reset();
                              $('#success_message').fadeIn().html('Email enviado!');  
                              setTimeout(function(){  
                                  $('#success_message').fadeOut("Slow");  
                              }, 2000);  
                        }  
                    });

              }  
          });  
        });  
    </script>  


</html>
