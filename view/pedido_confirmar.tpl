 <!--<h3>Confirmar Pedido</h3>-->
  <div class="linha">Confirmar Pedido</div>
<hr>
<!-- botoes e op��es de cima -->
<section class="row">
    
   
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4 text-right">
         
    </div>
    
</section>
    <br>

<!--  table listagem de itens -->
<section class="row ">
   
    <center>
    <table class="table " style="width: 95%">
       
        <tr >
            <td>Item(ns)</td> 
            <td>Produto(s)</td> 
            <td>Valor R$</td> 
            <td>Qld</td> 
            <td>Sub Total R$</td> 
            
            
        </tr>
     
        
       {foreach from=$PRO item=P}
        
        <tr>
            
            <td> <img src="{$P.pro_img}" alt="{$P.pro_nome}"> </td>
            <td>  {$P.pro_nome} </td>
            <td>  {$P.pro_valor} </td>
            <td> {$P.pro_qtd}  </td>
            <td>  {$P.pro_subTotal} </td>
            
            
            
        </tr>
        
       {/foreach}
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->
        
        <!-- botoes de baixo e valor total -->
        <section class="row" id="total">
                      
            <div class="col-md-4 text-right">
           
            </div>
            
            <!-- BOTÃO DE COMPRA MAIS -->
             
            
            <!-- bot�o de limpar-->
            <div class="col-md-5" align="right">

               

            </div>
            <div class="col-md-2 " align="right">
                <a href="{$PAG_CARRINHO}" class="btn btn-danger " title="">Voltar para o Carrinho</a>
            </div>
            <hr>
             <br>
             <br>
             <br>
            <div class="col-md-11 text-right">
            <h4>
               Total : R$ {$TOTAL}
            </h4>
             <h4>
               Frete : R$ {$FRETE}
            </h4>
            <h4>
               Total com frete : R$ {$TOTAL_FRETE}
            </h4>
            
            </div>
        </section>
                    <br>
                    <hr>
                   
    
         <form name="pedido_finalizar" method="post" action="{$PAG_FINALIZAR}">
           <center>
           <!-- bot�o finalzar -->
               <button class="btn btn-geral  btn-lg" type="submit">  <i class="glyphicon glyphicon-ok"></i> Finalizar Pedido </button>
           </center>
       </form>  
       
       </div>
       
                   
                        
  </section>
       <br>
       <br>
       <br>
       <br>