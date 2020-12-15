<!DOCTYPE html>
<html lang="pt-br"> 
<head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>GN - Vendas</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" href="estilo/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="estilo/css/main.css" />
    <link rel="stylesheet" href="estilo/css/theme.css" />
    <link rel="stylesheet" href="estilo/css/MoneAdmin.css" />
    <link rel="stylesheet" href="estilo/plugins/Font-Awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="estilo/plugins/validationengine/css/validationEngine.jquery.css" />
    <link href="estilo/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    
</head>
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
             
              
            
                         
                <li class="panel active"><a href="index.php" ><i class="icon-plus-sign"></i> Cadastro de Produtos</a></li>
                <li><a href="lista_produtos.php"><i class="icon-th-list"></i> Lista de Produtos</a>
                <li><a href="lista_compras.php"><i class="icon-shopping-cart"></i> Vendas</a>
            </ul>

        </div>
        <!--END MENU SECTION -->
        
<? 
$home=1;

?>
        <div id="content">
           
                <div class="inner">
                    <div class="row">
                    <div class="col-lg-12">
                            
                               
                                    <h1 align="center">Cadastro de Produtos</h1>
                                  
                                
                                
                            </div>
                    </div>
                          <hr />
                       


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="box">
                                <header class="dark">
                                    <div class="icons"><i class="icon-ok"> Preencha corretamente os dados</i></div>
                                    <h5>&nbsp;</h5>
                                    <div class="toolbar">
                                        <ul class="nav">
                                            <li>
                                                <div class="btn-group">
                                                   
                                                   
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </header>
                                <div id="collapse2" class="body collapse in">
                                <form onSubmit="return valida_dados(this)" method="post" action="cadastro_produtos.php" enctype="multipart/form-data" class="form-horizontal" id="popup-validation">  
                                    

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Nome do Produto</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="nome_prod" id="nome_prod" class="validate[required] form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Código EAN</label>
                                            <div class="col-lg-4">
                                                <input type="text" name="codigo" id="codigo" class="validate[required,minSize[13]] form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Preço</label>

                                            <div class="col-lg-4">
                                                
                                                   <input type="text" name="preco" id="preco" class="validate[required] form-control" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-lg-4">Estoque</label>

                                            <div class=" col-lg-4">
                                                <input name="estoque" type="text" class="validate[required,minSize[1]] form-control" id="data_t"  />
                                                    
                                            </div>
                                        </div>
                                                                          
                                        <div style="text-align:center" class="form-actions no-margin-bottom">
                                            <input type="submit" value="Cadastrar Produto" class="btn btn-success" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    
               
          <!--END PAGE CONTENT -->
        </div>

          <!-- RIGHT STRIP  SECTION -->
        <? include 'menu_direita.php';?>
            
            </div>
          
            
         

        </div>
        <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2020 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="estilo/plugins/jquery-2.0.3.min.js"></script>
     <script src="estilo/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="estilo/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
    <!-- PAGE LEVEL SCRIPTS -->

     <script src="estilo/plugins/validationengine/js/jquery.validationEngine.js"></script>
    <script src="estilo/plugins/validationengine/js/languages/jquery.validationEngine-en.js"></script>
    <script src="estilo/plugins/jquery-validation-1.11.1/dist/jquery.validate.min.js"></script>
    <script src="estilo/js/validationInit.js"></script>
    <script src="estilo/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="estilo/plugins/dataTables/dataTables.bootstrap.js"></script>
    <script>
        $(function () { formValidation(); });
        </script>
    <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!--END PAGE LEVEL SCRIPTS -->
</body>
    <!-- END BODY-->
    
</html>
  