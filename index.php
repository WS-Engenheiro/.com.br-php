
<?php
if(isset($_POST['submit']))
{

/*
  print_r('Nome: '. $_POST['nome']);
 print_r('<br>');
  print_r('Email: '. $_POST['email']);
  print_r('<br>');
  print_r('Senha: '. $_POST['senha']);
  print_r('<br>');
   print_r('Celular: '. $_POST['celular']);
   print_r('<br>');
  
 */
 
  include_once('config.php');
  $nome = $_POST ['nome'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $celular = $_POST['celular'];



  
    $reset = mysqli_query($conexao, "INSERT INTO contato
    (nome,email,senha,celular)
     VALUES ('$nome','$email','$senha','$celular')");

header('Location:login.php');
}
?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="/owl/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <script type="text/javascript" src="jquery-3.2.1.min.js"></script>
   <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Wesley-Desenvolvedor-Web</title>
       <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/carousel/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
<!--
    <script type="text/javascript">
        (function () {
            var options = {
                facebook: "100036754243412", // Facebook page ID
                whatsapp: "+5511988574097", // WhatsApp number
                call_to_action: "Falar com Wesley", // Call to action
                button_color: "#129BF4", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,facebook", // Order of buttons
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
      </script>
      -->
</head>
<body>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <header>
                <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white">
                  <img src="images/logo.png" alt="building1" width="130" height="130" />  
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
          <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">Sobre</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#teams">Servi??os</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Habilidades</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#contact">Contato</a>
          </li>
        </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Pesquisar" aria-label="pesquisar">
        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
      </form>
      </div>
      </nav>
</nav>
      </header>
    
      <div class="scroll-up-btn show" style="
      left: 12px;
  ">
          <i class="fas fa-angle-up" aria-hidden="true"></i>
     </div>
 
    <script type="text/javascript">
        (function () {
            var options = {
                facebook: "100036754243412", // Facebook page ID
                whatsapp: "+5511988574097", // WhatsApp number
                call_to_action: "Falar com Wesley", // Call to action
                button_color: "#129BF4", // Color of button
                position: "right", // Position may be 'right' or 'left'
                order: "whatsapp,facebook", // Order of buttons
            };
            var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
            var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
            s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
            var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
        })();
      </script>
  
    <!-- home section start -->
    <section class="home" id="home">
      <div class="max-width">
          <div class="row">
            <div class="home-content">
                <div class="text-1">Ol??, sou o</div>
                <div class="text-2">Wesley</div>
                <div class="text-3"><span class="typing"></span></div>
                <a href="https://www.linkedin.com/in/wesley-bento-dos-santos-9b66a3128/" target="_blank">Me encontre</a>
            </div>
          </div>
      </div>
    </section>
    <!-- about section start -->
    <section class="about" id="about">
    
            <h1>Seja bem-vindo ao meu portf??lio!</h1>
            <div class="about-content">
                <div class="column center">
                </div>
                <div class="column right">
            
                    <a href="sobre mim.html" target="_blank">Quem sou</a>
                </div>
            </div>
        </div>
    </section>
 
 <!-- teams section start -->
 <section class="teams" id="teams">
    <h2 class="title"style="padding-bottom: 52px;">Meus Servi??os</h2>
    <div class="teams-content" style="padding-bottom: 8px;border-bottom-width: 7px;margin-bottom: 7px;padding-top: 57px;">
    <div class="carousel owl-carousel">
        <div class="card">
            <div class="box">
                <a href="https://github.com/WS-Engenheiro" target="_blank"><img src="images/formata.png" alt=""></a>
                <div class="text">Formata????o</div>
                <p>Formata????o de computadores e Instala????o de software. </p>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <a href="https://www.techtudo.com.br/listas/2017/11/redes-sociais-apps-e-sites-para-encontrar-cuidadores-de-caes-e-gatos.ghtml" target="_blank"><img src="images/site.jpg" alt=""></a>
                <div class="text">Cria????o de Sites</div>
                <p> Desenho e toda a constru????o pagina do sites.</p>
            </div>
        </div>
        <div class="card">
            <div class="box">
                <a href="https://www.techtudo.com.br/listas/2017/11/redes-sociais-apps-e-sites-para-encontrar-cuidadores-de-caes-e-gatos.ghtml" target="_blank"><img src="images/diferencas.jpg" alt="150"></a>
                <div class="text">Manunten????es</div>
                <p> Manuten????o e implementa????o funcionalidades.</p>
            </div>
          </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <h2 class="title" style="padding-bottom: 52px;">Minhas Skills</h2>
        <div class="skills-content" style="padding-bottom: 8px;border-bottom-width: 7px;margin-bottom: 7px;padding-top: 57px;">
                <div class="column right">
                    <div class="bars">
                        <div class="info">    
                            <span>HTML</span>
                            <span>1 ano</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>1 ano</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Github</span>
                            <span>1 ano</span>
                        </div>
                        <div class="line github"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL- Sever</span>
                            <span>6 meses</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>8 meses</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                </div>
            </div>
            <div class="skills-content">
                <div class="column right">
                    <div class="bars">
                        <div class="info">
                       
                            <span>HTML</span>
                            <span>1 ano</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                            <span>1 ano</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>Github</span>
                            <span>1 ano</span>
                        </div>
                        <div class="line github"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL- Sever</span>
                            <span>6 meses</span>
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                            <span>8 meses</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about" id="about">
            <h2 class="nav-link" href="#">Veja mais...</h2>
            <div class="about-content">
                <div class="column right">
                    <a href="Wesley.pdf" target="_blank">Baixe meu curr??culo</a>
                </div>
            </div>
        </div>
    </section>
    <!-- teams section start -->
    <section class="teams" id="teams">
            <h2 class="title"style="padding-bottom: 52px;">Meus Projetos</h2>
            <div class="teams-content" style="padding-bottom: 8px;border-bottom-width: 7px;margin-bottom: 7px;padding-top: 57px;">
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <a href="https://github.com/WS-Engenheiro" target="_blank"><img src="images/github-white.png" alt=""></a>
                        <div class="text">Meu Github</div>
                        <p>Todos os meus projetos voc?? encontra aqui.</p>
                    </div>
                </div>      
            </section>
    <!-- contact section start -->
    <section class="contact" id="contact">
       <div class="container">
                <div class="column right">
                    <h2 class="title">Inscreva-se</h2>
                    <form action="index.php" method="post">
                       
                        <div class="fields">
                            <div class="field name">
                                <input type="text" class="name" id="nome" name="nome" placeholder="Nome" value="" autocomplete="off" value="" required="required" data-mask-reverse="true">
                            </div>
                            <div class="field email">
                                <input type="email" class="email-input" name="email" id="email" placeholder="Email"value="" autocomplete="off" value="" required="required" data-mask-reverse="true">
                            </div>
                            <div class="field senha">
                                <input type="password" class="senha" id="senha" name="senha" placeholder="Senha" value="" autocomplete="off" value="" required="required" data-mask-reverse="true">
                            </div>
                            <div class="field tel">
                                <input type="tel" maxlength="12" class="tel" name="celular" id="tel" placeholder="Celular"placeholder="00 0 0000-0000" data-mask="00 0 0000-0000" autocomplete="off" value="" required="required" data-mask-reverse="true">
                            </div>
                            <button class="btn btn-outline-primary btn-lg" type="submit" name="submit" onclick="Enviar()">Enviar</button>
                            <button class="btn btn-outline-danger btn-lg" type="reset" name="reset" onclick="Lipmar()">Lipmar</button>
                        </form> 
                    </div>
                </div>
          </div>
    </section>
    <!-- footer section start -->
    <footer class="main center">
        <div class="icon center">
            <a class="fab fa-linkedin fa-2x" href="https://www.linkedin.com/in/wesley-bento-dos-santos-9b66a3128/" target="_blank"></a>
        </div>
        <div class="icon center">
            <a class="fab fa-github fa-2x" href="https://github.com/WS-Engenheiro" target="_blank"></a>
        </div>
        <div class="icon center">
            <i><a class="fab fa-instagram fa-2x" href="https://www.instagram.com/wsdesenvolvedor/" target="_blank"></a></i>
        </div>
        <h3>Wesley Santos
            <script type="text/javascript">document.write(new Date().getFullYear());</script> &copy;</a> Feito com <span class="love">???</span></span>
        </h3>
    </footer>
    <script src="https://kit.fontawesome.com/b37b8b8e5b.js" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
