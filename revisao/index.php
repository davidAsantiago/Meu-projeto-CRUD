<?php 
include("views/blades/header.php"); 
include("controllers/funcoes.php");
?>

<div class="container bg-white rounded-4 mt-5 pt-3 pb-3 ps-3 pe-3 shadow">
    <a href="views/cadastro.php"><button type="button" class="btn btn-info">Cadastrar</button></a>
    <hr>
    <form action="index.php" method="post">
        <input class="form-control" type="text" name="buscar" size="30" placeholder="Buscar">
    </form>
    <hr>

    <?php mostrarDados();?>
</div>

<?php
include("views/blades/footer.php")
?>