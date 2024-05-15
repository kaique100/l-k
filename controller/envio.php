
<?php
$to      = Config::EMAIL_USER;
$subject = 'Contato - Nascimento Joias';
$message = 'Email de '.$_GET['nome']. "\r\n" .$_GET['mens'];
$dest =  $_GET['email'];


$headers = "From: " .$dest;

mail($to, $subject, $message, $headers);
?>

<script>alert('Email enviado com Sucesso!')</script>
<meta http-equiv="refresh" content="0; url=contato">

