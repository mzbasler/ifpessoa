<?php

  if (isset($_POST['email']) && !empty($_POST['email'])){

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $mensagem = addslashes($_POST['message']);

    $to = "basler.mauricio@gmail.com";
    $subject = "Agendamento de Sessão";
    $body = "Nome: " . $nome . " \r\n" .
      "Email: " . $email . " \r\n" .
      "Mensagem: " . $mensagem;
    $header = "From: mzbasler@outlook.com" . " \r\n" .
      "Reply-To:" . $email . " \r\n" .
      "X=Mailer:PHP/" . phpversion();

    if (mail($to, $subject, $body, $header)) {

      echo ("Email enviado");
    } else {

      echo ("Email não pode ser enviado");
    }
  }
