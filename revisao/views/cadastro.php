<?php include("blades/header.php")?>

<div class="container border rounded mt-5 bg-white">
        <form action="../controllers/cadastrarAluno.php" method="post">
        <div class="row mt-3">
            <div class="col">
            <label class="form-label" >Nome</label>
            <input class="form-control" type="text" name="alunoNome"><br>
            </div>

            <div class="col">
            <label class="form-label">Cidade</label>
            <input class="form-control" type="text" name="alunoCidade"><br>
            </div>
        </div>
            <label class="radio-inline">Masculino</label>
            <input class="form-check-input" type="radio" value="m" ><br>
        
            <label class="radio-inline">Feminino</label>
            <input class="form-check-input" type="radio" value="f" ><br>

            <input class="mt-2 mb-3 btn btn-success" type="submit" value="Cadastrar">
        </form>
</div>

<?php include("blades/footer.php")?>