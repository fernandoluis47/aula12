<?php

 include('conexao.php');
?>

<a href="frmclientes.php">Cadastrar Clientes</a>
<hr>


<php
try{

   

$sql = "select * from tblclientes";

$resultado = $con->query($sql);



while($linha = $resultado->fetch(PDO::FETCH_ASSOC)){

    echo $linha["cliente"]." - ".$linha["email"]." - Editar | Excluir";



    echo "<br>";

}



} catch(PDOException $e) {

    echo "Erro ao tentar se conectar ".$e->getCode();

}