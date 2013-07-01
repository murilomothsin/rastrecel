<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RastreCel</title>
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
            <input type="hidden" name="pag" value="index">
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
          <li><a href="funcionamento.php">Funcionamento</a></li>
          <li><a href="quemsomos.php">Quem Somos</a></li>
          <li><a href="vendas.php">Vendas</a></li>
          <li><a href="contato.php">Contato</a></li>
        </ul>
		<a href="#"><img src="img/Logo_Rastrecel.jpg" style="height: 125px;" ></a>
        <!-- <h3 class="muted">RastreCel</h3> -->
      </div>

      <hr>

      <div class="jumbotron">
        <h1>Rastreamento Via Satélite!</h1>
        <p class="lead">O rastreamento via satélite com base no GPS é um sistema para monitoramento de veículos, que integra tecnologia digital, telefonia celular, informática e Internet.</p>
        <a class="btn btn-large btn-success" href="funcionamento.php">Saiba como funciona</a>
      </div>

      <hr>

      <div class="row-fluid marketing">
        <div class="span12">
          <h4>Porque utilizar rastreamento?</h4>
          <p>O serviço de rastreamento veicular não serve apenas como um equipamento de segurança para amparar o usuário no momento de um roubo ou furto. Mais que isso, trata-se de uma ferramenta de gestão importante para evitar o desperdício de dinheiro com multas e, no caso das micro e pequenas empresas, inibir o uso dos veículos da frota para fins pessoais.</p>

          <h4>Garanta a integridade dos veículos de sua empresa!</h4>
          <p>Além de saber a localização exata dos veículos em tempo real, é possível fiscalizar as rotas tomadas em qualquer período determinado pelo gestor, além de velocidade excessiva e paradas desnecessárias.</p>

          <h4>Saiba onde os veículos de sua frota estão 24 horas por dia!</h4>
          <p>O serviço propicia e disponibiliza os dados dos veículos monitorados, o que permite a localização de seu veículo enquanto estiver dentro da área de cobertura do serviço móvel celular.</p>
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
