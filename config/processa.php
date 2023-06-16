<?php

    session_start();

    include_once "conexao.php";
    include_once "url.php";

    
    $data = $_POST;
    
    if(!empty($data)) {

        if($data["type"] === "create") {

            $nome      = $data["name"];
            $telefone  = $data["telefone"];
            $observacao = $data["observacao"];

            $query = "INSERT INTO contato (name, telefone, observacao) VALUES (:name, :telefone, :observacao)";

            $stmt = $conn->prepare($query);

            $stmt->bindParam(":name", $nome);
            $stmt->bindParam(":telefone", $telefone);
            $stmt->bindParam(":observacao", $observacao);

            try {

                $stmt->execute();
                
                $_SESSION["msg"] = "Contato criado com sucesso";

            } catch (PDOException $e) {

                $error = $e->getMessage();
                echo "Erro: $error";
            }
        }

        header("Location:" . $BASE_URL . "../index.php");
        
    }else {
        
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

    }

    $conn = null;