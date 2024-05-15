 {foreach from=$PRO item=P}

      
<div class="recipiente">
  <div class="card">
      <div class="banner imgBanner ">    
        <img  src="{$P.pro_img_g}" alt="" > 

      {foreach from=$IMAGES item=I}             
          <img src="{$I.img_nome}" alt="" >
          
     {/foreach}

      </div>
      <div class="info">
          <div class="cardeNome">
              <div>
                  <h1 class="big">{$P.pro_nome}</h1>                  
              </div>
              <h3 class="small">Ref : {$P.pro_ref}</h3>
              <h1>R${$P.pro_valor}</h1>
          </div>
          <div class="descricao " >
              <h1 class="prodTitulo">descrição do Produto</h1>
               <h3 > Acabamento: {$P.pro_desc} </h3>
               <h3 > Acabamento: {$P.pro_slug} </h3>
                <h3 >Tamanho: {$P.pro_comprimento}  mm  </h3>
                <h3 >Peso médio: {$P.pro_peso}   </h3>
                
                
          </div>     
          
        </div>
              <div class="prodPaga btnEnviar">
                  <form name="carrinho" method="post" action="{$PAG_COMPRAR}">
                <input type="hidden" name="pro_id" value="{$P.pro_id}">
                <input type="hidden" name="acao" value="add">
            <button  class="btn buy">Add carrinho</button>
             </form> 
                </div>
               
                    <!--  <div class="price">
                          <h1>R${$P.pro_valor}</h1>
                      </div> -->
  </div>
</div>

  {/foreach}

  
 