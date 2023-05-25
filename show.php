<?php
    include_once "templates/head.php";
?>
<body>
    <?php include_once "templates/header.php"; ?>
    
    <div class="container" id="view-contact-container">
        <?php include_once "templates/backbtn.php"; ?>
            
        <h1 id="main-title"><?= $contato["name"] ?></h1>
        <p class="bold">Telefone:</p>
        <p><?= $contato["telefone"] ?></p>
        <p class="bold">Observações:</p>
        <p><?= $contato["observacao"] ?></p>
    </div>
    
</body>
</html>