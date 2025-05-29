<?php
include_once("../config/database/database.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $sala = $_POST['sala'];
    $descricao = $_POST['descricao'];
    $nome = $_POST['nome'];
    $data = $_POST['data'];

    $sql = "INSERT INTO prof (sala, descrição, nome, dath) VALUES ('$sala', '$descricao', '$nome', '$data')";

    $con->query($sql);
    header("Location: ../index.php");
    exit();

}

?>