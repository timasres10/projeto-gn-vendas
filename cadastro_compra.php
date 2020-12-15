<?php

   include "connect.php";
   $nome = $_POST['nome'];
   $cpf = $_POST['cpf'];
   $cel = $_POST['cel'];
   $quant = $_POST['quant'];
   $id_prod = $_POST['id_prod'];
   $valor = $_POST['valor'];
   $valor_compra = $quant*$valor;
   
 
    
    
    if (empty($nome) || empty($cpf) || empty($cel) ||  empty($quant)) 
	{
	echo '<script>alert("Os campos não foram preenchidos corretamente, refaça a compra!");</script>';
	echo '<script>window.close()</script>';   
    }
  
    if ($nome && $cpf && $cel && $quant) {
      $query = "INSERT INTO `compras`(`id_compra`, `id_produto`, `quant_produto`, `nome_comprador`, `cpf_comprador`, `tel_comprador`, `valor_compra`) VALUES ('','$id_prod','$quant','$nome','$cpf','$cel','$valor_compra')";
      $res=mysql_query($query,$conexao);
	if($res){echo '<script>alert("Compra realizada com sucesso!");window.close();</script>';;
	
	}
	}
   
   