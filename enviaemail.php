<?php
 $nome = addslashes($_POST['nome']);
 $email = addslashes($_POST['email']);
 $idade = addslashes($_POST['idade']);
 $telefone = addslashes($_POST['telefone']);
 $mensagem = addslashes($_POST['mensagem']);

 $to = "jhu.spineli@gmail.com";
 $subject = "Dados - Formulario";
 $body = "Nome: " .$nome."/n".
 		 "Email: " .$email."/n".
 		 "Idade: " .$idade."/n".
 		 "Telefone: " .$telefone."/n".
 		 "Mensagem: " .$mensagem;
$header = "From: anapaulatassispineli@gmail.com"."/n".
		  "Reply-to:".$email."/n";
		  

if(mail($to,$subject,$body,$header)){
	echo("Email enviado.");
}
else{
	echo("Email não pode ser enviado.");
}

?>