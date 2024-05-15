
<hr>
{if $PRO_TOTAL < 1}
<H4 class="alert alert-danger">Nenhum produto encontrado!!</H4>
<meta http-equiv="refresh" content=1;url="{$PRODUTOS}">

{/if}
   
  
       
    <!--  começa lista de produtos  ---->   
  <section  class="container theme-showcase" role="main">  
 
<ul class="row"  >
    
    
  
                  <div >
        {foreach from=$PRO item=P}     
           
        <li class="col-sm-6 col-md-4">

            <div class="thumbnail">

                <a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="text-center" >


                    <img src="{$P.pro_img}" alt="" > 

                    <div class="caption text-center">

                        <p > {$P.pro_nome} </p> 
                        <p > R$ {$P.pro_valor}</p>

                        <p><a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}" class="btn btn-primary" role="button">Detalhes</a> </p>


                    </div>

                </a>

            </div>


        </li>
        

        {/foreach}

         </div>
         
    
</ul>
</section>

 <!--  paginação inferior   -->  
     <section class="text-center row">
    <center>
    {$PAGINAS}
    </center>
    </section>
    
    
    