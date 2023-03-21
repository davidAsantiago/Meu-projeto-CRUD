<?php    include("../models/conexao.php");?>
<?php    include("blades/header.php");?>

    <?php
        $varIda = $_GET["ida"];
        $query = mysqli_query($conexao, "SELECT * FROM alunos WHERE codigo = $varIda");
        $exibe = mysqli_fetch_array($query);
        ?>
        
    <div class="container border rounded mt-5 bg-white">
        <form action="../controllers/atualizarAluno.php" method="post">
        <div class="row mt-3">
            <div class="col">
            <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
            <label class="form-label">Nome</label>
            <input class="form-control" type="text" name="alunoNome" value="<?php echo $exibe[1] ?>"><br>
            </div>

            <div class="col">
            <label class="form-label">Cidade</label>
            <input class="form-control" type="text" name="alunoCidade" value="<?php echo $exibe[2] ?>"><br>
            </div>
        </div>

            <input class="radio-inline" type="radio" value="m" name="alunoSexo" <?php echo($exibe[3]=="m")?"checked":""?>>Masculino<br>
            <input  class="radio-inline" type="radio" value="f" name="alunoSexo" <?php echo($exibe[3]=="f")?"checked":""?>>Feminino<br>
            
            <input class="mt-2 mb-3 btn btn-info" type="submit" value="Atualizar">
        </form>
    </div>
<?php    include("blades/footer.php");?>