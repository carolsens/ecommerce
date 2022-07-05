<?php

include('../../includes/init_admin.php');


switch ($_REQUEST["action"]) {
    case 'create':
        $nome = $_POST["nome"];
        $loginemail = $_POST["loginemail"];

        $hashsenha = trim(password_hash($_POST["senha"], PASSWORD_DEFAULT));

        $senha = $hashsenha;
     

        $sql = "INSERT INTO usuario (nome, loginemail, senha) VALUE ('{$nome}', '{$loginemail}', '{$senha}')";

        $res = $mysqli->query($sql);

   
        if($res==true){
            print "<script>alert('Cadastro realizado com sucesso');</script>";
            print "<script>location.href='index.php';</script>";
        }else{
            print "<script>alert('Não foi possível realizar o cadastro');</script>";
            print "<script>location.href='index.php';</script>";
        }
        break;

    case 'edit':
        $nome = $_POST["nome"];
        $loginemail = $_POST["loginemail"];
        $senha = $_POST["senha"];
       
        $sql = "UPDATE usuario SET
            nome='{$nome}',
            loginemail='{$loginemail}',
            senha=password_hash('{$senha}'),
            WHERE
                id=".$_REQUEST["id"];


        $res = $mysqli->query($sql);

        if($res==true){
            print "<script>alert('Cadastro editado com sucesso');</script>";
            print "<script>location.href='index.php';</script>";
        }else{
            print "<script>alert('Não foi possível realizar a edição');</script>";
            print "<script>location.href='index.php';</script>";
        }

        break;

    case 'delet':
        $sql = "DELETE FROM usuario WHERE id=".$_REQUEST["id"];
        $res = $mysqli->query($sql);

        if($res==true){
            print "<script>alert('Item excluído com sucesso');</script>";
            print "<script>location.href='index.php';</script>";
        }else{
            print "<script>Alert('Não foi possível realizar a exclusão');</script>";
            print "<script>location.href='index.php';</script>";
        }
        break;

    default:
        # code...
    break;

}