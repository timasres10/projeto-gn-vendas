
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <title>GN - Vendas</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
   
    <link rel="stylesheet" href="estilo/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="estilo/css/main.css" />
    <link rel="stylesheet" href="estilo/css/theme.css" />
    <link rel="stylesheet" href="estilo/css/MoneAdmin.css" />
    <link rel="stylesheet" href="estilo/plugins/Font-Awesome/css/font-awesome.css" />
    <link href="estilo/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
<script  language="javascript">
function abrirPopup(url,w,h) {
var newW = w + 100;
var newH = h ;
var left = (screen.width-newW)/2;
var top = (screen.height-newH)/2;
var newwindow = window.open(url, 'name', 'width='+newW+',height='+newH+',left='+left+',top='+top);
newwindow.resizeTo(newW, newH);
 
//posiciona o popup no centro da tela
newwindow.moveTo(left);
newwindow.focus();
return false;
}  
</script>

</head>
<?
  include "connect.php";
$home='3';
?>
<body class="padTop53 " >
    <div id="wrap">
        <div id="top">

            <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.php" class="navbar-brand">
                    <img src="estilo/img/logo.png" alt="" />
                   </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->
        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                <img class="media-object img-thumbnail user-img" alt="User Picture" src="estilo/img/user.png" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading">User</h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
              
            
                         
                <li><a href="index.php" ><i class="icon-plus-sign"></i> Cadastro de Produtos</a></li>
                <li><a href="lista_produtos.php"><i class="icon-th-list"></i> Lista de Produtos</a>
                <li class="panel active"><a href="lista_compras.php"><i class="icon-shopping-cart"></i> Vendas</a>
            </ul>

        </div>
        <!--END MENU SECTION -->
        
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2 align="center"> Lista de Vendas</h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registros
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome Cliente</th>
                                            <th>CPF</th>
                                            <th>Telefone</th>
                                            <th>Produto</th>
                                            <th>Quantidade</th>
                                            <th>Valor Compra</th>                                            
                                            <th></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
                                        <?
                                        $sql= "SELECT * FROM compras as c, produtos as p WHERE c.id_produto=p.id";
                                        $resp = mysql_query($sql,$conexao);
                                        while($row=mysql_fetch_array($resp)){
										
											
										
										?>
                                      
                                      <tr class="odd gradeX">
                                            <td><? echo $id_compra = $row['id_compra'];?></td>
                                            <td><? echo $row['nome_comprador'];?></td>
                                            <td><? echo $row['cpf_comprador'];?></td>
                                            <td class="center"><? echo $row['tel_comprador'];?></td>
                                            <td class="center"><? echo $row['nome_prod'];?></td>
                                            <td class="center"><? echo $row['quant_produto'];?></td>
                                            <td class="center"><? echo $row['valor_compra'];?></td>
                                           
                                              <td width="10%" title="Comprar">
                                              <a href="#" onclick="return abrirPopup('<?php echo "compra.php?id_prod=$id_produto"; ?>', 1000, 800)"> <input type="submit" value="Boleto" class="btn btn-danger" /></a></td>
                                              
                                        </tr>
                                      
                                      
                                      <? } ?>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
           
                    

        </div>
    </div>
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2020 &nbsp;</p>
    </div>
    <script src="estilo/plugins/jquery-2.0.3.min.js"></script>
     <script src="estilo/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="estilo/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="estilo/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="estilo/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
</body>
</html>
