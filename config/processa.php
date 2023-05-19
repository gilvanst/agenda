<?php

    session_start();

    include_once "conexao.php";
    include_once "url.php";

    $sql = "SELECT * FROM contato";

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $contato = $stmt->fetchAll();