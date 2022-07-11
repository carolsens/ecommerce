<?php

include('../../includes/init_admin.php');

switch ($_REQUEST["action"]) {
    case 'create':
        $nome = $_POST["nome"];
        $descricao = $_POST["descricao"];
        $local_pagina_inicial = $_POST["local_pagina_inicial"];
        $preco = str_replace(",",".",$_POST["preco"])*100;
        $precopromocional = $_POST["precopromocional"];
        $tarja = $_POST["tarja"];
        $id_categoria = $_POST["id_categoria"];
        
        if(isset($_FILES['fotoarquivo'])) {
            $fotoarquivo = $_FILES['fotoarquivo'];

            if($fotoarquivo['size'] > 6007152){
                die("Arquivo muito grande! Tam máx 6MB");
            }
                
            $fotonome = $fotoarquivo['name']; 
            $fotonomealterado = uniqid();
            $extensaoimg = strtolower(pathinfo($fotonome,PATHINFO_EXTENSION)); 
            
            if($extensaoimg != "jpg" && $extensaoimg != 'png' && $extensaoimg != "jpeg") {
                die("Tipo de arquivo não aceito");
            }

            $foto = $fotonomealterado . "." . $extensaoimg;

            $localfoto = $frontendBaseDir . "/assets/frontend/produto/" . $foto;

            $fotoenviada = move_uploaded_file($fotoarquivo["tmp_name"], $localfoto);
        
        }
        

        $sql = "INSERT INTO produto (nome, descricao, local_pagina_inicial, preco, precopromocional, tarja, id_categoria, foto) VALUE ('{$nome}', '{$descricao}', '{$local_pagina_inicial}', '{$preco}', '{$precopromocional}', '{$tarja}','{$id_categoria}', '{$foto}')";

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
        $descricao = $_POST["descricao"];
        $local_pagina_inicial = $_POST["local_pagina_inicial"];
        $preco = str_replace(",",".",$_POST["preco"])*100;
        $precopromocional = $_POST["precopromocional"];
        $tarja = $_POST["tarja"];

        $sql = "UPDATE produto SET
            nome='{$nome}',
            descricao='{$descricao}',
            local_pagina_inicial='{$local_pagina_inicial}',
            preco='{$preco}',
            precopromocional='{$precopromocional}',
            tarja='{$tarja}'
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
        $sql = "DELETE FROM produto WHERE id=".$_REQUEST["id"];
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

