<?php
    include "conexao.php";

    if(isset($_POST['filme'])){
        $filme = trim($_POST['filme']);
        $genero = trim($_POST['genero']);
    }
    $sql = "insert into filme(filme,genero) values('$filme','$genero')";
    $cadastrar = mysqli_query($conexao,$sql);
    ?>