<?php

include('../../includes/init_admin.php');

switch ($_REQUEST["action"]) {
 
    case 'create':
        $id_produto = $_POST['id_produto'];
        $id_atributo = $_POST['id_atributo'];
        $valor = $_POST["valor"];

        $sql = "INSERT INTO produto_atributos (id_produto, id_atributo, valor) VALUE ('{$id_produto}', '{$id_atributo}', '{$valor}')";

        $res = $mysqli->query($sql);

        if($res==true){
            print "<script>alert('Cadastro realizado com sucesso');</script>";
            print "<script>location.href='atributos.php?action=edit&id=$id_produto';</script>"; 
        }else{
            print "<script>alert('Não foi possível realizar o cadastro');</script>";
            print "<script>location.href='atributos.php';</script>";
        }
        break;

    case 'delet':
        $sql = "DELETE FROM produto_atributos WHERE id=".$_REQUEST["id"];
        $res = $mysqli->query($sql);

        
        if($res==true){
            
        $idproduto = $_GET['idproduto'];
            print "<script>alert('Item excluído com sucesso');</script>";
            print "<script>location.href='atributos.php?action=edit&id=$idproduto';</script>";
        }else{
            print "<script>Alert('Não foi possível realizar a exclusão');</script>";
            print "<script>location.href='atributos.php?action=edit&id=$idproduto';</script>";
        }
        break;

    default:
        # code...
    break;

}

