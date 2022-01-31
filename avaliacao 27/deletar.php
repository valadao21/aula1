<?php

include 'conexao.php';

$nome=$_POST['nome'];
$targetfile=$_POST['foto'];




'$nome','$target_file')"
$sql = "INSERT INTO `tblblog` (`nome`,`foto`) values ('$nome','$target_file')";


$upload=mysqli_query($conexao,$sql);