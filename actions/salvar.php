<?php
include_once("../config/database/database.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $sala = $_POST['sala'];
    $descrição = $_POST['descrição'];
    $nome = $_POST['nome'];

    $sql = "INSERT INTO Salas (sala, descrição, nome) VALUES ('$sala', '$descrição', '$nome')";

    $con->query($sql);
    header("Location: ../index.php");
    exit();

}

?>