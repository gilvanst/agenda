<?php

    $host = "localhost";
    $db   = "bd_agenda";
    $user = "root";
    $pass = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

        //Ativando modo de erros

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e) {

        $error = $e->getMessage();
        echo "ERRO: $error";

    }
    