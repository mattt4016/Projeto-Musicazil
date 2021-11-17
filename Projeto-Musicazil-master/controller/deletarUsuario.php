<?php
include_once("../model/conexao.php");
include_once("../model/modelUsuario.php");
extract($_REQUEST,EXTR_OVERWRITE);

if(deletarUsuario($conexao,$codUsu)){
    header("Location: ../view/visuUsuario.php");
}
else{
    header("Location: ../view/visuUsuario.php");
}


?>