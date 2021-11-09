<?php
include_once("header.php");
?>

<form id="formusu" method="POST" action="../controller/inserirUsuario.php">
  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="senha" class="form-label">Senha</label>
    <input type="password" class="form-control" name="senha" id="senha">
  </div>
  
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>


<?php
include_once("footer.php");
?>
