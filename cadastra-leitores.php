<?php

include "config.php";
if(!$conn){
    die ("Conexão  falhou: " . mysqli_connect_error());

}
//recebe os dados 

$Nome= "";
$DtNasc="";
$Celular="";
$Email="";
$RA="";
$Endereco= "";
$Num_end="";
$Bairro="";
$Cidade= "";

//cria variável para inserir o registro 
$sql = "";
