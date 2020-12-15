  <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                <? 
				$caminho="estilo/img/logo.png";
				
				?>
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="<? echo $caminho;?>" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">Usuário(a)</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
              
            
                         
                <li <? if($home==1) { echo 'class="panel active"';}?> ><a href="index.php" ><i class="icon-plus-sign"></i> Cadastro de Produtos</a></li>
                <li <? if($home==2) { echo 'class="panel active"';}?>><a href="lista_produtos.php"><i class="icon-th-list"></i> Lista de Produtos</a>
                <li <? if($home==3) { echo 'class="panel active"';}?>><a href="lista_compras.php"><i class="icon-shopping-cart"></i> Vendas</a>
            </ul>

        </div>
        <!--END MENU SECTION -->
        
        