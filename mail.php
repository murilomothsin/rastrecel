<?php

if($_POST['nome'] == null || $_POST['telefone'] == null || $_POST['email'] == null || $_POST['mensagem'] == null){
	header("Location: ".$_POST['pag'].".php?envio=0");
	die();
}

// Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
require("phpmailer/class.phpmailer.php");

// Inicia a classe PHPMailer
$mail = new PHPMailer();

// Define os dados do servidor e tipo de conexão
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mail->Host = "smtps.bol.com.br"; // Endereço do servidor SMTP
$mail->SMTPAuth = true; // Usa autenticação SMTP?
$mail->Username = 'reastrecel.rastreamento@bol.com.br'; // Usuário do servidor SMTP
$mail->Password = '12qwaszx'; // Senha do servidor SMTP
$mail->Port = 587; // Define a porta do servidor

// Define o remetente
$mail->From = "reastrecel.rastreamento@bol.com.br";
$mail->FromName = "Contato";

// Define os destinatário(s)
$mail->AddAddress('brunolivera94@gmail.com', 'Bruno'); //email que receberá o email

// Define os dados técnicos da Mensagem
$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
$mail->CharSet = 'utf-8'; // Charset da mensagem

// Define a mensagem (Texto e Assunto)
$mail->Subject  = "Mensagem de contato pelo site"; // Assunto da mensagem

$msg = "<html><body><span style=\"border: 1px solid #CCC;\">
<center><b>Contato realizado pelo site:</b><br />
Nome: ".$_POST['nome']."<br />
Email: ".$_POST['email']."<br />
Telefone: ".$_POST['telefone']."<br /><br />
Mensagem: <br /><i>".$_POST['mensagem']."</i><br /><br /><br />
<b><i>RastreCel</i></b></center></span>
</body></html>";

$mail->Body = $msg;

// Define os anexos (opcional)
//$mail->AddAttachment("c:/temp/documento.pdf", "novo_nome.pdf");  // Insere um anexo

// Envia o e-mail
$enviado = $mail->Send();

// Limpa os destinatários e os anexos
$mail->ClearAllRecipients();
$mail->ClearAttachments();

// Exibe uma mensagem de resultado
if ($enviado) {
	//echo $msg;
	//echo $enviado;
header("Location: ".$_POST['pag'].".php?envio=1");
} else {
	//echo $mail->ErrorInfo;
header("Location: ".$_POST['pag'].".php?envio=0");
}

?>
