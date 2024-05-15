<!DOCTYPE html>

<html>
    <head>
        <title>Area restrita </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="{$GET_TEMA}/tema/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="{$GET_TEMA}/tema/js/jquery-2.2.1.min.js" type="text/javascript"></script>
        <script src="{$GET_TEMA}/tema/js/bootstrap.min.js" type="text/javascript"></script>
          <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/estilo.css">
        <!-- meu aquivo pessoal de CSS-->
        <link href="{$GET_TEMA}/tema/css/tema.css" rel="stylesheet" type="text/css"/>
      <link rel="icon" type="image/png" sizes="32x32" href="{$GET_TEMA}/img/icon/logovinhi.png">

     
    
    </head>
    <body style="background-color: #591e29">
        
        <section class="container">
            <article class="formCon">
            
            <section class="row">
                
                <div class="col-md-4"></div>    
               
                <div class="col-md-4 thumbnail" id="bloco_login_adm">
                 
                    <h4 class="text-center"> Área restrita </h4>
               
                     
                        
                    <form name="login" method="post" action="">


 <div class="input-field">
                    <div>
                     <input type="email" name="txt_email" class="form-control" required autocomplete="off">
                        <label>Email:</label>
                        <span></span>
                    </div>
                </div>  

<div class="input-field">
                    <div>
                    <input type="password" name="txt_senha" class="form-control" required>
                         <label>Senha:</label>
                        <span></span>
                    </div>
                </div>
                        
                        
                       
                        
                        
                       
                       
                        
                        <br>
                        <br>
                        <button class="btnss btnss-success btnss-block btnss-lg" name="txt_logar" value="txt_logar"> Entrar </button>
                        <br>
                        
                          
                        
                    </form>
                    
                    
                    <!-- botão senha recovery -->
                    <br>
                    <center><button class="btnw btnw-warning" data-toggle="collapse" data-target="#recovery"> Esqueci a senha </button>

                    <a href="{$HOME}" class="btni btni-info"> Ir para Loja </a>
                    </center>
                    
                    <div class="alert alert-danger collapse" id="recovery">
                    
                        <form name="recovery" method="post" action="">
                            <label>Digite o email do administrador </label>
                            <input type="email" name="txt_email" class="form-control" required>
                            <button class="btns btns-success" name="recovery" value="recovery">Solicitar senha</button>
                            
                        </form> 
                        
                    </div>
                    
                </div>    
              
                <div class="col-md-4"></div>    
                
                
            </section>
            
            
            
        </section>
        </article>
        
    </body>
</html>

