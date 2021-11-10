<?php

function inserirUsuarioBanco($conexao,$senha,$email){

$opcao = ['cost' => 8];

$senhaCrypto = password_hash($senha, PASSWORD_BCRYPT, $opcao);

$query = "insert into tb_usuario(Email_Usua, Senha_Usua)values('{$email}','{$senhaCrypto}')";
$resultado = mysqli_query($conexao,$query);
return $resultado;
}

function listatudoUsuario($conexao){
    $query = "select * from tb_usuario";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listaUsuarioCodigo ($conexao, $codigoUsu)
{
    $query = "select * from tb_usuario where Id_Usua = '{$codigoUsu}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function listaUsuarioEmail ($conexao, $emailUsu)
{
    $query = "select * from tb_usuario where Email_Usua like '%{$emailUsu}%'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}
?>