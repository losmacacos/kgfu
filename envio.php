<?php 
 $mail = new PHPMailer();
 $mail->IsSMTP(); // envia por SMTP 
 $mail->CharSet = 'UTF-8';
 $mail->True;
 $mail->SMTPSecure = “tls”;
 $mail->Host = "smtp.gmail.com"; // Servidor SMTP
 $mail->Port = 587; 
 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
 $mail->Username = "kungfuatibaia2@gmail.com"; // SMTP username
 $mail->Password = "enigma27"; // SMTP password
 $mail->From = "losmacacos@gmai.com"; // From
 $mail->FromName = "Sua Empresa" ; // Nome de quem envia o email
 $mail->AddAddress($mailDestino, $nome); // Email e nome de quem receberá //Responder
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

if(!$mail->Send()) // Envia o email
 { 
 echo "Erro no envio da mensagem";
 } 
?>