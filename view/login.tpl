{if $LOGADO == true}
  

{else}


  <article class="imgContato">
    <div class="imgCon">

      <!--  <img src="{$GET_TEMA}/img/sobre.jpg" alt="ouvire"> -->
      
    </div>

        <article class="formCon">
        <div class="Container">
            <form  name="cliente_login" method="post" class="form" action="" >
                <div class="input-field">
                    <div>
                    <input type="email" name="txt_email" id="loginemail" required> 
                        <label>Digite seu email</label>
                        <span></span>
                    </div>
                </div>               

                <div class="input-field">
                    <div>
                    <input type="password" name="txt_senha" id="loginemail" required>
                        <label>Digite sua senha</label>
                        <span></span>
                    </div>
                </div>
                <div class="input-field">
                
                
                    <div class="botaoEnviar">
                    <input type="submit" value="Login" class="btnc">
                    
                     <a href="{$PAG_CADASTRO}" class="btnc">Cadastrar</a>
                    <a href="{$PAG_RECOVERY}" class="btnc"> Esqueci a Senha</a>
                    
                      
                    </div>
                   
                </div>        
                   <div class="botaoEnviar">
             
                
           
                   </div>
                   
            </form>

        

    </article>
    </article>
    
        
     
       
     </div>
</section>
{/if}