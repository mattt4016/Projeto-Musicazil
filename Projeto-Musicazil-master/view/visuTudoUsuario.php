<?php
include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
include_once("../view/header.php");
?>

<?php
include_once("../view/footer.php");
?>
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">Código</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $usuario = listatudoUsuario($conexao);
      foreach($usuario as $usuarios){

      
      ?>
    <tr>
      <th scope="row">1<?=$usuarios["Id_Usua"]?></th>
      <td><?=$usuarios["Email_Usua"]?></td>
    </tr>
    <?php
    }
    ?>

  </tbody>
</table>