<style>
.tabela {
    border-collapse: collapse;
    width: 100%;
}

.tabela th, td {
    text-align: left;
    padding: 8px;
}

.tabela tr:nth-child(odd){
  background-color: #591e29;
}

.sessao{
  
  padding:20px;
}


.total{
  text-align:right;
}

.frete{
  text-align:right;
}

.totalfrete{
  text-align:right;
  font-size:18px;
  font-style: bold;
  color:#062a46;
}





.textoinicio{
  text-align:center;
}

.minhaconta{
  text-align:center;
}


</style>

<p class="textoinicio"> Olá {$NOME_CLIENTE} , obrigado pela sua compra em {$SITE_NOME} <br>
<a href="{$SITE_HOME}"> {$SITE_HOME} </a>
</p>


  <section class="row">
      <p class="minhaconta">
          Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
          <a  href="{$PAG_MINHA_CONTA}" > Minha conta: {$PAG_MINHA_CONTA} </a>
      
      </p>                 
                   
  </section>


<section class="row ">
   
    <center>
      
     
   <br>
        
    <table class="tabela" style="width: 95%;">
     
        <tr style="
            border: 1px solid #591e29; 
            
            background-color: #591e29;
            color:#FFF;
            font-size:18px;" >

          <td colspan="5">Detalhes da(as) compra(as) </td>
        </tr>
        <tr >
            <td>Item(ns)</td> 
            <td>Produto(s)</td> 
            <td>Valor R$</td> 
            <td>Qld</td> 
            <td>Sub Total R$</td> 
            
            
        </tr>
        {foreach from=$PRO item=P}
        
            <tr style="border: 1px solid #591e29">
            
           <td> <img src="{$P.pro_img}" alt=" {$P.pro_nome} "> </td> 
            <td>  {$P.pro_nome}  </td>
            <td>  {$P.pro_valor} </td>
            <td>  {$P.pro_qtd}   </td>
            <td>  {$P.pro_subTotal} </td>
          
            
            
        </tr>
        
        {/foreach}
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->


   <!-- botoes de baixo e valor total -->
        <div class="sessao">
                      
            

               <p class="total">
               <b>Total :</b> R$ {$TOTAL}
               </p>
               <p class="frete">
               <b>Frete</b> : R$ {$FRETE}
               </p>
               <p class="totalfrete">
               <b>Final : R$ {$TOTAL_FRETE}</b>
               </p>

            
            
            
        </div>
               <br>
             