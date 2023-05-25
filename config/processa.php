<?php

    session_start();

    include_once "conexao.php";
    include_once "url.php";

    $id;
    
    if(!empty($_GET)) {
        
        $id = $_GET["id"];

    }

    if(!empty($id)) {

        $sql = "SELECT * FROM contato WHERE id = :id";
        
        $stmt = $conn->prepare($sql);

        $stmt->bindParam(":id", $id);

        $stmt->execute();

       $contato = $stmt->fetch();

    } else {

        $contato = [];

        $sql = "SELECT * FROM contato";

        $stmt = $conn->prepare($sql);

        $stmt->execute();

        $contato = $stmt->fetchAll();

    }
