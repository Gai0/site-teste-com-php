<?php

include("conexao.php");

$codigo = $_GET["codigo"];

$sql = "DELETE FROM cursos WHERE codigo = $codigo";

mysqli_query($conexao, $sql);


?>