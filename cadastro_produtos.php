<?php

   include "connect.php";
   echo $nome = $_POST['nome_prod'];
   $codigo = $_POST['codigo'];
   $preco = $_POST['preco'];
   $estoque = $_POST['estoque'];
   
 
    $sql="select count(*) as c from produtos where codigo='$codigo'";
	$resp = mysql_query($sql,$conexao);
	$row=mysql_fetch_array($resp);
	echo $count =  $row['c'];
	
	if ($count >= 1) 
	{	   
	echo '<script>alert("Este produto já foi cadastrado!");window.location="index.php";</script>';   
    }
    
    
    if (empty($nome) || empty($codigo) || empty($preco) ||  empty($estoque)) 
	{	   
	echo '<script>alert("Os campos não foram preenchidos corretamente");window.location="index.php";</script>';   
    }
  
    if ($nome && $codigo && $preco && $estoque && $count == 0) {
      $query = "INSERT INTO `produtos`(`id`, `nome_prod`, `codigo`,`valor`, `estoque`) VALUES ('','$nome','$codigo','$preco','$estoque')";
      $res=mysql_query($query,$conexao);
	if($res){echo '<script>alert("Cadastro Realizado com Sucesso");window.location="index.php";</script>';;
	
	}
	}
   
   