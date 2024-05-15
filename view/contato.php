<?php

    require_once ("vendor/PHPMailerAutoload.php");
    $ok = 0;

try{
    if(isset($_POST["email"])){
        $assunto  = "Site Nascimento Joias";
        $nome     = $_POST["nome"];
        $fone     = $_POST["fone"];
        $email    = $_POST["email"];
        $mens     = $_POST["mens"];
        
        require_once("admin/contato.php");

        $contato  = new Contato();
        $contato->nome = $nome;
        $contato->fone = $fone;
        $contato->email = $email;
        $contato->mens = $mens;

        $contato->Inserir();
                   
     
        $phpmail = new PHPMailer(); // Instânciamos a classe PHPmailer para poder utiliza-la          
        $phpmail->isSMTP(); // envia por SMTP
        
        $phpmail->SMTPDebug = 0;
        $phpmail->Debugoutput = 'html';
        
        $phpmail->Host = "smtp.gmail.com"; // SMTP servers         
        $phpmail->Port = 587; // Porta SMTP do GMAIL
        
        $phpmail->SMTPSecure = 'tls'; // Autenticação SMTP
        $phpmail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação   
        
        $phpmail->Username = "skaique5424@gmail.com"; // SMTP username         
        $phpmail->Password = "Marrehntto*1234"; // SMTP password          
        $phpmail->IsHTML(true);         
        
        $phpmail->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  
                 
        $phpmail->addAddress("skaique5424@gmail.com", $assunto);// E-mail do destinatario/*  
        
        $phpmail->Subject = $assunto; // Assunto do remetende enviado pelo method post
                
        $phpmail->msgHTML(" Nome: $nome <br>
                            Telefone: $fone <br>
                            E-mail: $email <br>
                            Mensagem: $mens");
        
        $phpmail->AlrBody = "Nome: $nome \n
                            Telefone: $fone \n
                            E-mail: $email \n
                            Mensagem: $mens";
            
        if($phpmail->send()){
            
            $ok = 1;
            echo "A Mensagem foi enviada com sucesso.";
        }else{
            $ok = 2;
            echo "Não foi possível enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
        }
         
        // ############## RESPOSTA AUTOMATICA
        $phpmailResposta = new PHPMailer();        
        $phpmailResposta->isSMTP();
        
        $phpmailResposta->SMTPDebug = 0;
        $phpmailResposta->Debugoutput = 'html';
        
        $phpmailResposta->Host = "smtp.gmail.com";         
        $phpmailResposta->Port = 587;
        
        $phpmailResposta->SMTPSecure = 'tls';
        $phpmailResposta->SMTPAuth = true;   
        
        $phpmailResposta->Username = "skaique5242@gmail.com";         
        $phpmailResposta->Password = "Marrehntto*1234";          
        $phpmailResposta->IsHTML(true);         
        
        $phpmailResposta->setFrom($email, $nome); // E-mail do remetende enviado pelo method post  
                 
        $phpmailResposta->addAddress($email, "Nascimento Joias");// E-mail do destinatario/*  
        
        $phpmailResposta->Subject = "Resposta - " .$assunto; // Assunto do remetende enviado pelo method post
                
        $phpmailResposta->msgHTML(" Nome: $nome <br>
                            Em breve daremos o retorno");
        
        $phpmailResposta->AlrBody = "Nome: $nome \n
                            Em breve daremos o retorno";
            
        $phpmailResposta->send();
        
    } // FECHAR O IF
    
}catch(Exception $e){
     Erro::tratarErro($e); 
}
    
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
      <meta charset="utf-8">
      <title>Nascimento Joias</title>
      <meta name="vieport" content="width=device=width">
      <!--css de reset das configuraçoes do browser-->
      <link rel="stylesheet" type="text/css" href="css/reset.css">
      <link rel="stylesheet" type="text/css" href="css/estilo.css">
      <link rel="stylesheet" type="text/css" href="css/slick.css">
      <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
      <link rel="stylesheet" type="text/css" href="css/lity.css">
      <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- banner inicio -->
    <!-- fim banner -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <!--icone favicon-->
      <link rel="icon" type="image/png" sizes="32x32" href="img/icon/logovinhi.png">
    </head>

<body>
<?php require_once("topo.php"); ?>
      <?php require_once("banner.php"); ?>
<article class="imgContato">
    <div class="imgCon">

        <img src="img/sobre.jpg" alt="ouvire">
    </div>
    <article class="formCon">
        <div class="Container">
            <form action="#" method="post" class="form">
                <div class="input-field">
                    <div>
                    <input type="text" name="nome" placeholder="" required>
                        <label> Por favor Digite seu nome Completo</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-field">
                    <div>
                        <input type="tel" name="fone" placeholder="" required>
                        <label> Por favor Digite seu número de telefone ou celular</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-field">
                    <div>
                    <input type="email" name="email" placeholder="" required>
                        <label> Por favor Digite seu email</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-field">
                
                    <div>
                    
                    <textarea name="mens" placeholder="" cols="5" rows="3" required></textarea>
                        <label> Por favor Digite uma mensagem</label>
                        <span></span>
                    </div>
                </div>
                
                <div class="botaoEnviar">
                        <?php
                            if($ok == 1){
                                echo("<span>A Mensagem foi enviada com sucesso.</span>");
                            }else if($ok == 2){
                        echo("<span>Não foi possível enviar a mensagem.</span>");
                    }
                        ?>
                        <input type="submit" value="ENVIAR" class="btnc">
                    </div>
                </div>        
            </form>
        

    </article>
    
</article>
    <section class="galeriainsta">
      <div id="instafeed" class="instafeed"></div>
      </section>
    
    
      <?php require_once("rodape.php"); ?>
 </body>
 <script type="text/javascript"src="js/jquery-3.3.1.min.js"></script>
 <script type="text/javascript"src="js/slick.js"></script>
 <script type="text/javascript"src="js/wow.js"></script>
 <script type="text/javascript"src="js/lity.js"></script>
 <script type="text/javascript"src="js/animacao.js"></script>
 
  <script src="js/banner.js"></script>
 <script src="js/novi.js"></script>
 <script src="https://cdn.shopify.com/s/files/1/0683/5883/t/3/assets/instafeed.min.js"></script>
 <script src="https://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
 <script src="js/instafeed.js"></script>

 </html>