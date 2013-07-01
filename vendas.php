<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RastreCel - Vendas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script>
      $(function (){
        $("#example").popover({
          placement: 'top'
        });
      });
    </script>
    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>

    <!-- Modal1 -->
    <div id="myModal" class="modal hide fade" style="min-height: 300px" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Contato</h3>
      </div>
      <div class="modal-body">
          <form action="mail.php" name="contato" id="contato" method="post" enctype="multipart/form-data">
            <input class="input-large" name="nome" type="text" placeholder="Nome">
            <div style="clear: both;"></div>
            <input class="input-large" name="email" type="text" placeholder="Email">
            <div style="clear: both;"></div>
            <input class="input-large" name="telefone" type="text" placeholder="Telefone">
            <div style="clear: both;"></div>
            <textarea rows="5" name="mensagem" placeholder="Mensagem"></textarea>
            <input type="hidden" name="pag" value="vendas">
            <div style="clear: both;"></div>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <input class="btn btn-success" type="submit" value="Submit">
        <!-- <button class="btn btn-primary">Save changes</button>-->
      </div>
      </form>
    </div>

    <div class="container-narrow">

      <div class="masthead" style="margin-bottom: -20px;">
        <ul class="nav nav-pills pull-right" style="margin-top: 55px;">
          <li><a href="funcionamento.php">Funcionamento</a></li>
          <li><a href="quemsomos.php">Quem Somos</a></li>
          <li class="active" ><a href="vendas.php">Vendas</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
    <a href="index.php"><img src="img/Logo_Rastrecel.jpg" style="height: 125px;" ></a>
        <!-- <h3 class="muted">RastreCel</h3> -->
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span12">
          <?php if(isset($_GET['envio']) && $_GET['envio'] == 1){?>
          <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Mensagem enviada com sucesso!
          </div>
          <?php }else if(isset($_GET['envio']) &&  $_GET['envio'] == 0){?>
          <div class="alert alert-error">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Erro ao enviar mensagem!
          </div>
          <?php }?>
          <a class="btn btn-large btn-success" href="#myModal" data-toggle="modal" style="float:right; margin-top: 25px;">Interessado? Envie um email!</a>
          <h3>Vendas.</h3>

          <p>Conheça os tipos de rastreadores que a RastreCel fornece.</p><br />
          
          <hr>
          
          <h4>Rastreador Rastrecel Veicular Fixo</h4>
          <img src="img/RastreadorFixo.jpg" style="width: 220px; float: right; margin-left: 5px; margin-bottom: 5px; margin-top: -30px;">
          <p>Para uso em veículos de passeios, Motos, Caminhões, Carretas, Ônibus, Máquinas, retro Escavadeiras, Escavadeiras Hidráulicas, Barcos, Jetski, etc...
Este Rastreador tem função localizador e bloqueio a distância, desligando o motor do veículo.</p><br /><br />
          
          <hr>
          
          <h4>Rastreador Rastrecel Portátil, Pessoal:</h4>
          <img src="img/RastreadorPortatil.jpg" style="width: 220px; float: right; margin-left: 5px; margin-bottom: 5px; margin-top: -30px;">
          <p>Proteja-se de furtos, sequestros normais ou relâmpagos. Saiba onde estão seus filhos, marido, esposa ou parentes. Acompanhe o uso de seus veículos por funcionários ou terceiros.</p>
          <br /><br /><br /><br />
          
          <hr>

          <h4>Algumas sugestões de uso:</h4>
          <ul>
            <li>Monitoramento de frotas (sem necessidade de instalação);</li>
            <li>Monitoramento de veleiros e barcos em águas abrigadas;</li>
            <li>Rastreamento de pessoas com atitude suspeita;</li>
            <li>Proteção para autoridades e executivos;</li>
            <li>Monitoramento de veículos;</li>
            <li>Monitoramento de cargas;</li>
            <li>Monitoramento de crianças, adolescentes e idosos;</li>
            <li>Ótimo para Empresários;</li>
            <li>Mais segurança contra sequestros;</li>
            <li>E muitas outras funções;</li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="footer">
        <center><p>&copy; RastreCel <?php echo date('Y');?></p></center>
        <center><a href="#myModal" data-toggle="modal" id="example" rel="popover" data-content="Escreva sua sugestão, duvida ou reclamação." data-original-title="Sugestões" ><i class="icon-envelope"></a></i></center>
      </div>

    </div>
  </body>
</html>
