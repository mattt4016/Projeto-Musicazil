<?php
include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
include_once("../view/header.php");

extract($_REQUEST,EXTR_OVERWRITE);

$resultado = listaUsuarioCodigo($conexao, $codUsu);
$usuario = mysqli_fetch_assoc($resultado);
?>

<form id="formusu" method="POST" action="../controller/alterarUsuario.php">
    <div class="mb-3">
        <label for="email" class="form-label">Código</label>
        <input type="text" readonly requerid class="form-control" value="<?=$usuario["Id_Usua"]?>" name="codUsu" id="codigo">

    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" required class="form-control" value="<?=$usuario["Email_Usua"]?>" name="email" id="email" aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="senha" class="form-label">Senha</label>
        <input type="password" class="form-control" name="senha" id="senha">
    </div>

    <button type="submit" class="btn btn-primary">Alterar</button>
</form>


<?php
include_once("footer.php");
?>