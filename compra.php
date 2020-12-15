<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<? 
include "connect.php";
?>

<script  language="javascript">
function abrir(url){
	newpopupWindow = window.open (url, 'pagina', "width=1200 height=600 top=100 left=100");
	
	}
</script>

<head>
    

    <title>GN - Vendas</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/main.css" />
    
    <link rel="stylesheet" href="css/MoneAdmin.css" />
    <link rel="stylesheet" href="estilo/plugins/Font-Awesome/css/font-awesome.css" />
    <link href="css/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>

<?
$ids=$_GET['id_prod'];


$sql= "SELECT * FROM `produtos` WHERE id='$ids'";
$res = mysql_query($sql,$conexao);
while($row=mysql_fetch_array($res)){

$produto = $row['nome_prod'];
$valor= $row['valor'];

}

?>
<form method="post" action="cadastro_compra.php" enctype="multipart/form-data" class="form-horizontal" >  
<div class="col-lg-12">
                    <div class="panel panel-default">
                           <div class="box"><header>
                                    <div class="icons"><i class="icon-th-large"></i></div>
                                    <h5>Dados do Funcionário</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                    <a class="accordion-toggle btn btn-xs minimize-box" data-toggle="collapse"
                                                        href="#colla">
                                                        <i class="icon-chevron-up"></i>
                                                    </a>
                                                    
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="colla" class="accordion-body collapse in body">
                     

                                <table class="table" width="100%"><style type="text/css"> 
						.inpu {border: groove;}
						.inpuu { border:groove;}
						
						 </style>
                               <form method="post" action="" id="ajax_form">
                     
  <tr>
    <td><b>Nome:</b> <input type="text" class="inpu" name="nome" id="nome" size="30"></td>
    <td><font color="#FF0000"></font> <b>CPF:</b> <input type="text"  class="inpu" name="cpf" id="cpf" size="11"></td>
    <td><b>Cel:</b> <input type="text"  class="inpu" name="cel" id="cel" size="11"></td>
  </tr>
  <tr>
    <td><b>Produto:</b> <? echo $produto;?></td>
    <td><b>Valor:</b> <? echo $valor;?></td>
    <td><b>Quantidade:</b> <input type="text"  class="inpu" name="quant" id="quant" size="11"></td>
  </tr>
  
 
 <tr><td align="center" colspan="3"><input type="submit"  class="btn btn-danger"  value="Cadastrar Venda"/></td></tr>
 <input type="text"  class="inpu" name="id_prod" id="id_prod" value="<? echo $ids; ?>" style="display: none;" size="11">
 <input type="text"  class="inpu" name="valor" id="valor" value="<? echo $valor; ?>" style="display: none;" size="11">
</table></div>


</form>


        </div>
 
    </div>
    </body>
</html>