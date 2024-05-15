<?php

    require_once ("vendor/PHPMailerAutoload.php");
    $ok = 0;

try{
    if(isset($_POST["emailCli"])){
        $assunto  = "Site Nascimento Joias";
        $nomeCli    = $_POST["nomeCli"];
        $foneCli    = $_POST["foneCli"];
        $emailCli    = $_POST["emailCli"];
        $mensCli     = $_POST["mensCli"];
        $nomePro     = $_POST["nomePro"];
        $descPro     = $_POST["descPro"];
        $quantidadePro     = $_POST["quantidadePro"];
        
        require_once("admin/orcamento.php");

        $contato  = new Contato();
        $contato->nomeCli = $nomeCli;
        $contato->foneCli = $foneCli;
        $contato->emailCli = $emailCli;
        $contato->mensCli = $mensCli;
        $contato->nomePro = $nomePro;
        $contato->descPro = $descPro;
        $contato->quantidadePro = $quantidadePro;

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
        
        $phpmail->setFrom($emailCli, $nomeCli); // E-mail do remetende enviado pelo method post  
                 
        $phpmail->addAddress("skaique5424@gmail.com", $assunto);// E-mail do destinatario/*  
        
        $phpmail->Subject = $assunto; // Assunto do remetende enviado pelo method post
                
        $phpmail->msgHTML(" Nome: $nomeCli <br>
                            Telefone: $foneCli <br>
                            E-mail: $emailCli <br>
                            Joia: $nomePro <br>
                            Descricao: $descPro <br>
                            Quantidade: $quantidadePro <br>
                            Mensagem: $mensCli");
        
        $phpmail->AlrBody = "Nome: $nomeCli\n
                            Telefone: $foneCli \n
                            E-mail: $emailCli \n
                            Joia: $nomePro \n
                            Descricao: $descPro \n
                            Quantidade: $quantidadePro \n
                            Mensagem: $mensCli";
            
        if($phpmail->send()){
            
            $ok = 1;
            // echo "A Mensagem foi enviada com sucesso.";
        }else{
            $ok = 2;
            // echo "Não foi possível enviar a mensagem. Erro: " .$phpmail->ErrorInfo;
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
        
        $phpmailResposta->setFrom($emailCli, $nomeCli); // E-mail do remetende enviado pelo method post  
                 
        $phpmailResposta->addAddress($emailCli, "Nascimento Joias");// E-mail do destinatario/*  
        
        $phpmailResposta->Subject = "Resposta - " .$assunto; // Assunto do remetende enviado pelo method post
                
        $phpmailResposta->msgHTML(" Nome: $nomeCli <br>
                            Em breve daremos o retorno");
        
        $phpmailResposta->AlrBody = "Nome: $nomeCli \n
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
      <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- banner inicio -->
    <!-- fim banner -->
      
      <!--icone favicon-->
      <link rel="icon" type="image/png" sizes="32x32" href="img/icon/logovinhi.png">
    </head>

<body>
<?php require_once("topo.php"); ?>
      <?php require_once("banner.php"); ?>
<article class="imgContato">
    <div class="imgCon">

       
    </div>
    <div class="Containerinfo">
            <h2>Joias Personalizadas</h2>
            <p>Criadas por Voce</p>
            
            </div>
    <article class="formCon">
        <div class="Containeror">
           
            <form action="#" method="post" class="form">
                <div class="input-fieldo">
                    <div>
                    <input type="text" name="nomeCli" placeholder="" required>
                        <label> Digite seu nome </label>
                        <span></span>
                    </div>
                </div>
                <div class="input-fieldo">
                    <div>
                        <input type="tel" name="foneCli" placeholder="" required>
                        <label> Por favor Digite seu número de telefone ou celular</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-fieldo">
                    <div>
                    <input type="email" name="emailCli" placeholder="" required>
                        <label> Por favor Digite seu email</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-fieldo">
                    <div>
                    <input type="text" name="nomePro" placeholder="" required>
                        <label> Por favor Digite seu joias</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-fieldo">
                    <div>
                    <input type="text"  name="descPro" placeholder="" required>
                        <label> Por favor Digite seu descricao da peça</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-fieldo">
                    <div>
                    <input type="text" name="quantidadePro" placeholder="" required>
                        <label> Por favor Digite seu quantidade</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-fieldo">               
                    <div>
                    <textarea type="text" name="mensCli" placeholder="" cols="5" rows="3" required></textarea>
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
                        <input type="submit" value="ENVIAR" class="btn">
                    </div>
                </div>        
            </form>
        </div>

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