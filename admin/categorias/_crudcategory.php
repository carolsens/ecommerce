<?php

include('../../includes/init_admin.php');


switch ($_REQUEST["action"]) {
    case 'create':
        $nome = $_POST["nome"];
        $ativo = $_POST["ativo"];
        
        $sql = "INSERT INTO categoria (nome, ativo) VALUE ('{$nome}', '{$ativo}')";

        $res = ->query($sql);

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
        $ativo = $_POST["ativo"];
       
        $sql = "UPDATE categoria SET
            nome='{$nome}',
            ativo='{$ativo}'
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
        $sql = "DELETE FROM categoria WHERE id=".$_REQUEST["id"];
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

