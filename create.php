<?php
    include  "templates/head.php";
?>
<body>
    <?php include_once "templates/header.php"; ?> 
    <div class="container">
        <?php include_once "templates/backbtn.php"; ?>
        <h1 id="main-title">Criar contato</h1>
        <form id="create-form" action="<?= $BASE_URL ?>config/processa.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="name">Nome do contato:</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Insira o nome aqui..." required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="number" name="telefone" id="telefone" class="form-control" placeholder="Insira o telefone aqui..." required>
            </div>

            <div class="form-group">
                <label for="observacoes">Observações:</label>
                <textarea  rows="3"type="observacoes" name="observacoes" id="observacoes" class="form-control" placeholder="Insira a descrição aqui..." required></textarea>
            </div>

            <input type="submit" class="btn btn-primary" value="Enviar" >
        </form>
    </div>
    
</body>
</html>