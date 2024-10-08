<?php

include "config.php";
if(!$conn){
    die ("Conexão  falhou: " . mysqli_connect_error());

}
//recebe os dados 

$Nome= 'Lais';
$DtNasc='2006-07-26';
$Celular='(81) 988901939';
$Email='lais@gmail.com';
$RA='000111';
$Endereco= 'Rua Cônego Costa Carvalho';
$Num_end= '287';
$Bairro= 'Vila Torres Galvão';
$Cidade= 'Paulista-PE';

//cria variável para inserir o registro 
$sql = "INSERT INTO `leitores`
(`Nome`, `DtNasc`, `Celular`, `Email`, `RA`, `Enderco`, `NumEnd`, `Bairro`, `CidadeUF`) VALUES 
('$Nome','$DtNasc','$Celular','$Email','$RA','$Endereco','$Num_end','$Bairro','$Cidade')";

//executa a consulta SQL. Se  falhar, exibe o erro do banco de dados 
$query  = mysqli_query(mysql: $conn,query: $sql) or
die (mysqli_error(mysql: $sb));

if($query){
    echo "<center>";
    echo "cadrasto  realizado com sucesso!<br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
} else {
    echo "<center>";
    echo "Erro ao cadastrar!<br>";
    echo "<a href='index.php'><button title='Home page'>Voltar</button></a>";
    echo "/center>";
    }

?>






