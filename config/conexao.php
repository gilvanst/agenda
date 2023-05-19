<?php

    $host = "localhost";
    $db   = "db_agenda";
    $user = "root";
    $pass = "";

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        //Ativando modo de erros

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch(PDOException $e) {

        $error = $e->getMessage();
        echo "ERRO: $error";

    }
    