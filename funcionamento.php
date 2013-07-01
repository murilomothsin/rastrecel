<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RastreCel - Funcionamento</title>
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

        <!-- Modal -->
    <div id="myModal" class="modal hide fade" style="min-height: 300px" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Sugestão</h3>
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
            <input type="hidden" name="pag" value="funcionamento">
            <div style="clear: both;"></div>
      </div>
      <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        <input class="btn btn-success" type="submit" value="Enviar">
        <!-- <button class="btn btn-primary">Save changes</button>-->
      </div>
      </form>
    </div>

    <div class="container-narrow">

      <div class="masthead" style="margin-bottom: -20px;">
        <ul class="nav nav-pills pull-right" style="margin-top: 55px;">
          <li class="active" ><a href="funcionamento.php">Funcionamento</a></li>
          <li><a href="quemsomos.php">Quem Somos</a></li>
          <li><a href="vendas.php">Vendas</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
    <a href="index.php"><img src="img/Logo_Rastrecel.jpg" style="height: 125px;" ></a>
        <!-- <h3 class="muted">RastreCel</h3> -->
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span12">
          <h3>Entenda como o sistema funciona!</h3>
          <img src="img/Rastreados.jpg" style="width: 320px; float: right; margin-left: 5px; margin-bottom: 5px;">
          <p>O funcionamento é baseado no Sistema de Posicionamento Global (GPS), que permite a localização do veículo. As informações sobre as posições dos veículos são enviadas ao nosso servidor a cada 2 minutos via conexão Internet GPRS.</p>
          <p>O sistema Simonsat converte esses dados em imagens, inserindo-os em mapas detalhados, disponibilizando a localização do veículo em qualquer parte do Brasil. O sistema também permite, através de senhas e códigos, acionar bloqueio, desbloqueio, sirene e dispositivo de áudio.</p>
          <p>O sistema de rastreamento utiliza 2 equipamentos agregados, o GPS e um transmissor utilizando tecnologia Celular GSM/GPRS ou um Módulo RF, que juntos são conhecidos como rastreador via satélite. Os dados do posicionamento são identificados pelo GPS e são transmitidos de tempo em tempo conforme programação do nosso servidor de monitoramento através do equipamento com tecnologia celular, por isso é importante na hora de contratar o serviço saber a real necessidade do usuário para que possamos indicar qual sistema será mais eficiente em cada aplicação.</p>
          <p>O rastreador funciona conforme programação da central de monitoramento e a oferece soluções pré-programadas em pacotes de posições, caso seja preciso, o serviço pode ser customizado conforme avaliação junto ao cliente. O bloqueio do veículo, o botão de pânico, cerca eletrônica e outros serviços são controlados pela central de rastreamento e pelo nosso software de rastreamento.</p>
          <p>Além de rastrear o equipamento funciona como localizador via satélite e bloqueador via satélite, funções antes encontradas em aparelhos distintos.</p>
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
