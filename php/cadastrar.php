<?php

include("conexao.php");
$curso = $_POST["curso"];
$valor = $_POST["valor"];

$sql = "INSERT INTO cursos VALUES(null, '$curso', $valor)";

mysqli_query($conexao, $sql);

?>