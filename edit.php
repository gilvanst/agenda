<?php
    include_once  "templates/head.php";
?>
<body>
    <?php include_once "templates/header.php"; ?> 
    <div class="container">
        <?php include_once "templates/backbtn.php"; ?>
        <h1 id="main-title">Editar contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>/config/processa.php" method="POST">
            <input type="hidden" name="type" value="edit">
            <input type="hidden"  name="id" value="<?= $contato['id']?>">

            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Insira o nome aqui..." value="<?= $contato['name'] ?>" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" class="form-control" value="<?= $contato['telefone'] ?>" placeholder="Insira o telefone aqui..."  required>
            </div>

            <div class="form-group">
                <label for="observacao">Observações:</label>
                <textarea  rows="3" type="text" name="observacao" id="observacao" class="form-control" placeholder="Insira a descrição aqui..."  required> <?= $contato['observacao'] ?></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Atualizar" >
        </form>
    </div>
    
</body>
</html>