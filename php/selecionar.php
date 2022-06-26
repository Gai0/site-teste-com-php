<?php

include("conexao.php");

$sql = "SELECT * FROM cursos";

$executar = mysqli_query($conexao, $sql);

//estrutura da tabela
echo"<table border='1'>";

while($indice = mysqli_fetch_assoc($executar)){
    echo "<tr>";
        echo "<td>".$indice["curso"]."</td>";
        echo "<td>".$indice["valor"]."</td>";
        echo "<td><button class='btnexcluir' id='".$indice["codigo"]."'onClick='excluir(".$indice["codigo"].")'>Excluir</button></td>";
    echo "</tr>";    
}

//finalizar tabela
echo "</table>";

?>