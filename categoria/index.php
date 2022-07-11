<?php

include('../includes/init.php');
include($adminBaseDir . DIRECTORY_SEPARATOR . 'produtos/_functions_utils.inc.php');

?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carolina Sens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&family=Raleway:ital,wght@0,400;0,700;0,800;1,800&display=swap" rel="stylesheet">

    <link href="<?= BASE_URL_CSS_FRONTEND ?>/style.css" rel="stylesheet">
    <link href="<?= BASE_URL_CSS_FRONTEND ?>/stylecategory.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= BASE_URL_LIBS_FRONTEND ?>/owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= BASE_URL_LIBS_FRONTEND ?>/owlcarousel/dist/assets/owl.theme.default.min.css">

</head>

<body>
    <div class="navbar-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="navbar-top__left">
                        <a class="navbar-top__link-left" href="#"> MEUS PEDIDOS </a>
                        <a class="navbar-top__link-left" href="#"> MINHA CONTA </a>
                    </div>
                </div>
                <div class="col">
                    <div class="navbar-top__center">
                        <a class="navbar-top__link-center--active" href="#"> VAREJO </a>
                        <a class="navbar-top__link-center" href="#"> ATACADO </a>
                    </div>
                </div>
                <div class="col">
                    <div class="navbar-top__right">
                        <a class="navbar-top__link-right" href="#"> CADASTRE-SE </a>
                        <a class="navbar-top__link-right"> | </a>
                        <a class="navbar-top__link-right" href="#"> ENTRAR </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-top-mobile">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="navbar-top-mobile__left">
                        <a class="navbar-top-mobile__link--active" href="#"> VAREJO </a>
                        <a class="navbar-top-mobile__link" href="#"> ATACADO </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="navbar-top-mobile__form">
                        <form class="navbar-top-mobile__search">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="O que você procura?" aria-label="O que você procura?">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"> <svg class="navbar-top-mobile__iconSearch" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                            <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                                        </svg> </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <form class="navbar-center__search">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="O que você procura?" aria-label="O que você procura?">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"> <svg class="navbar-center__iconSearch" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                        <path d="M500.3 443.7l-119.7-119.7c27.22-40.41 40.65-90.9 33.46-144.7C401.8 87.79 326.8 13.32 235.2 1.723C99.01-15.51-15.51 99.01 1.724 235.2c11.6 91.64 86.08 166.7 177.6 178.9c53.8 7.189 104.3-6.236 144.7-33.46l119.7 119.7c15.62 15.62 40.95 15.62 56.57 0C515.9 484.7 515.9 459.3 500.3 443.7zM79.1 208c0-70.58 57.42-128 128-128s128 57.42 128 128c0 70.58-57.42 128-128 128S79.1 278.6 79.1 208z" />
                                    </svg> </button>
                            </span>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <img class="navbar-center__imgLogo" src="<?= BASE_URL_IMAGENS_FRONTEND ?>/logofinal.png">
                </div>
                <div class="col">
                    <div class="navbar-center__cart">
                        <a href="#"> <img class="navbar-center__imgCart" src="<?= BASE_URL_IMAGENS_FRONTEND ?>/shopping-bag.svg"> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-menu">
        <div class="container">
            <div class="row">

                <?php $sqlcategoria = "SELECT * FROM categoria WHERE ativo='1'";

                $categorias = $mysqli->query($sqlcategoria);

                $total = $categorias->num_rows;
                $count = 1;

                ?>

                <?php foreach ($categorias as $categoria) : ?>

                    <div class="col dropdown">
                        <div <?php
                                if ($count === 1) { ?>class="navbar-menu__firstItem" <?php } else if ($count === $total) { ?>class="navbar-menu__lastItem" <?php } else { ?> class="navbar-menu__middleItem" <?php } ?>>

                            <a class="dropdown navbar-menu__categories" href="./" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?php echo $categoria['nome'];

                                $idcategoria = $categoria['id'];

                                ?> </a>

                            <?php $count++; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="navbar-bottom-mobile">
        <div class="container">
            <div class="row">
                <div class="col">
                    <img class="img-fluid navbar-bottom-mobile__imgLogo" src="<?= BASE_URL_IMAGENS_FRONTEND ?>/logofinal.png">
                </div>
                <div class="col">
                    <div class="navbar-bottom-mobile__icon">
                        <a href="#"> <img class="navbar-bottom-mobile__iconCart" src="<?= BASE_URL_IMAGENS_FRONTEND ?>/shopping-bag.svg"> </a>
                        <a href="#"> <svg class="navbar-bottom-mobile__iconAccount" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M224 256c70.7 0 128-57.31 128-128s-57.3-128-128-128C153.3 0 96 57.31 96 128S153.3 256 224 256zM274.7 304H173.3C77.61 304 0 381.6 0 477.3c0 19.14 15.52 34.67 34.66 34.67h378.7C432.5 512 448 496.5 448 477.3C448 381.6 370.4 304 274.7 304z" />
                            </svg> </a>
                        <a href="./menu"> <svg class="navbar-bottom-mobile__iconMenu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                            </svg> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="filters">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Cor
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php
                            $sqlcores = "SELECT * FROM produto_atributos
                                        INNER JOIN produto ON produto.id = produto_atributos.id_produto
                                        INNER JOIN atributo ON atributo.id = produto_atributos.id_atributo
                                        WHERE produto.id_categoria = '8' AND atributo.nome = 'cor'";

                            $cores = $mysqli->query($sqlcores);


                            foreach ($cores as $cor) : ?>

                                <li><a class="dropdown-item" href="index.php?filtro=<?= $cor['valor'] ?>"><?= $cor['valor'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Tamanho
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <?php
                            $sqlcores = "SELECT * FROM produto_atributos 
                                        INNER JOIN produto ON produto.id = produto_atributos.id_produto
                                        INNER JOIN atributo ON atributo.id = produto_atributos.id_atributo
                                        WHERE produto.id_categoria = '8' AND atributo.nome = 'tamanho'";

                            $cores = $mysqli->query($sqlcores);


                            foreach ($cores as $cor) : ?>

                                <li><a class="dropdown-item" href="#"><?= $cor['valor'] ?></a></li>
                            <?php endforeach ?>
                        </ul>
                    </div>
                </div>
                <div class="col-2">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            Preço
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Cor</a></li>
                            <li><a class="dropdown-item" href="#">Tamanho</a></li>
                            <li><a class="dropdown-item" href="#">Preço</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="products">
        <div class="container">
            <div class="row">



                <?php
					if (isset($_GET['filtro'])) {
              
				    	$filtro = $_GET['filtro'];
                        $sql = "SELECT * FROM produto 
                        INNER JOIN produto_atributos ON produto.id = produto_atributos.id_produto
                        WHERE produto.id_categoria = '8' AND produto_atributos.valor = '$filtro'";
					} else {
                                
                    $sql = "SELECT * FROM produto WHERE produto.id_categoria = '8'";
                    }    
                $products = $mysqli->query($sql);

                ?>

                <?php foreach ($products as $product) : ?>
                    <div class="col-6 col-xl-3 ">
                        <img class="img-fluid products__img" src="<?php echo BASE_URL_PRODUTO_FRONTEND . "/" . $product['foto'] ?>">
                        <h3><?php echo $product['nome'] ?></h3>
                        <h4>R$ <?php echo moneyFormat($product['preco']) ?></h4>
                        <h5>ou 12x de R$ 15,59</h5>

                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <div class="newsletter">
        <div class="newsletter__registration">
            <div class="newsletter__title">
                <span>CADASTRE-SE EM NOSSA NEWSLETTER</span>
            </div>
            <div class="newsletter__text">
                <span>Seja a primeira a receber todas as novidades e promoções da loja</span>
            </div>
            <div class="newsletter__form">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Digite seu e-mail aqui." aria-label="Digite seu e-mail aqui." aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">CADASTRAR</button>
                </div>
            </div>
        </div>
    </div>

    <div class="newsletter-mobile">
        <div class="container-fluid">
            <div class="newsletter-mobile__registration">
                <div class="newsletter-mobile__title">
                    <span>CADASTRE-SE EM NOSSA NEWSLETTER</span>
                </div>
                <div class="newsletter-mobile__text">
                    <span>Seja a primeira a receber todas as novidades e promoções da loja</span>
                </div>
                <div class="newsletter-mobile__form">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Digite seu e-mail aqui." aria-label="Digite seu e-mail aqui." aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2">CADASTRAR</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer__barIcon">
                        <a class="footer__icon1" href=""><svg class="footer__imgIcon1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                            </svg></a>
                        <a class="footer__icon1" href=""><svg class="footer__imgIcon1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                            </svg></a>
                        <a class="footer__icon1" href=""><svg class="footer__imgIcon1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M496 256c0 137-111 248-248 248-25.6 0-50.2-3.9-73.4-11.1 10.1-16.5 25.2-43.5 30.8-65 3-11.6 15.4-59 15.4-59 8.1 15.4 31.7 28.5 56.8 28.5 74.8 0 128.7-68.8 128.7-154.3 0-81.9-66.9-143.2-152.9-143.2-107 0-163.9 71.8-163.9 150.1 0 36.4 19.4 81.7 50.3 96.1 4.7 2.2 7.2 1.2 8.3-3.3.8-3.4 5-20.3 6.9-28.1.6-2.5.3-4.7-1.7-7.1-10.1-12.5-18.3-35.3-18.3-56.6 0-54.7 41.4-107.6 112-107.6 60.9 0 103.6 41.5 103.6 100.9 0 67.1-33.9 113.6-78 113.6-24.3 0-42.6-20.1-36.7-44.8 7-29.5 20.5-61.3 20.5-82.6 0-19-10.2-34.9-31.4-34.9-24.9 0-44.9 25.7-44.9 60.2 0 22 7.4 36.8 7.4 36.8s-24.5 103.8-29 123.2c-5 21.4-3 51.6-.9 71.2C65.4 450.9 0 361.1 0 256 0 119 111 8 248 8s248 111 248 248z" />
                            </svg></a>
                        <a class="footer__icon1" href=""><svg class="footer__imgIcon1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M248 8C111.1 8 0 119.1 0 256s111.1 248 248 248 248-111.1 248-248S384.9 8 248 8zm100.7 364.9c-4.2 0-6.8-1.3-10.7-3.6-62.4-37.6-135-39.2-206.7-24.5-3.9 1-9 2.6-11.9 2.6-9.7 0-15.8-7.7-15.8-15.8 0-10.3 6.1-15.2 13.6-16.8 81.9-18.1 165.6-16.5 237 26.2 6.1 3.9 9.7 7.4 9.7 16.5s-7.1 15.4-15.2 15.4zm26.9-65.6c-5.2 0-8.7-2.3-12.3-4.2-62.5-37-155.7-51.9-238.6-29.4-4.8 1.3-7.4 2.6-11.9 2.6-10.7 0-19.4-8.7-19.4-19.4s5.2-17.8 15.5-20.7c27.8-7.8 56.2-13.6 97.8-13.6 64.9 0 127.6 16.1 177 45.5 8.1 4.8 11.3 11 11.3 19.7-.1 10.8-8.5 19.5-19.4 19.5zm31-76.2c-5.2 0-8.4-1.3-12.9-3.9-71.2-42.5-198.5-52.7-280.9-29.7-3.6 1-8.1 2.6-12.9 2.6-13.2 0-23.3-10.3-23.3-23.6 0-13.6 8.4-21.3 17.4-23.9 35.2-10.3 74.6-15.2 117.5-15.2 73 0 149.5 15.2 205.4 47.8 7.8 4.5 12.9 10.7 12.9 22.6 0 13.6-11 23.3-23.2 23.3z" />
                            </svg></a>
                    </div>
                </div>
            </div>

            <div class="footer__menu row">
                <div class="col-xl-2 col-md-12">
                    <div class="footer__title1">
                        <span>SOBRE NÓS</span>
                    </div>
                    <li> <a class="footer__text" href="">Cadastre-se</a></li>
                    <li> <a class="footer__text" href="">Institucional</a></li>
                    <li> <a class="footer__text" href="">Empresa</a></li>
                    <li> <a class="footer__text" href="">Privacidade</a></li>
                    <li> <a class="footer__text" href="">100% Seguro</a></li>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="footer__title1">
                        <span>DÚVIDAS</span>
                    </div>
                    <li> <a class="footer__text" href="">Trocas e devoluções</a></li>
                    <li> <a class="footer__text" href="">Prazos de entrega</a></li>
                    <li> <a class="footer__text" href="">Trabalhe conosco</a></li>
                    <li> <a class="footer__text" href="">Garantia</a></li>
                    <li> <a class="footer__text" href="">Formas de pagamento</a></li>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="footer__title1">
                        <span>MINHA CONTA</span>
                    </div>
                    <li> <a class="footer__text" href="">Meus pedidos</a></li>
                    <li> <a class="footer__text" href="">Meus endereços</a></li>
                    <li> <a class="footer__text" href="">Dados cadastrais</a></li>
                    <li> <a class="footer__text" href="">Trocar senha</a></li>
                </div>
                <div class="col-xl-2 col-md-12">
                    <div class="footer__title1">
                        <span>CONTATO</span>
                    </div>
                    <li> <a class="footer__text" href=""><svg class="footer__imgIcon2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M464 64C490.5 64 512 85.49 512 112C512 127.1 504.9 141.3 492.8 150.4L275.2 313.6C263.8 322.1 248.2 322.1 236.8 313.6L19.2 150.4C7.113 141.3 0 127.1 0 112C0 85.49 21.49 64 48 64H464zM217.6 339.2C240.4 356.3 271.6 356.3 294.4 339.2L512 176V384C512 419.3 483.3 448 448 448H64C28.65 448 0 419.3 0 384V176L217.6 339.2z" />
                            </svg> contato@carolinasens.com.br</a></li>
                    <li> <a class="footer__text" href=""><svg class="footer__imgIcon2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M511.2 387l-23.25 100.8c-3.266 14.25-15.79 24.22-30.46 24.22C205.2 512 0 306.8 0 54.5c0-14.66 9.969-27.2 24.22-30.45l100.8-23.25C139.7-2.602 154.7 5.018 160.8 18.92l46.52 108.5c5.438 12.78 1.77 27.67-8.98 36.45L144.5 207.1c33.98 69.22 90.26 125.5 159.5 159.5l44.08-53.8c8.688-10.78 23.69-14.51 36.47-8.975l108.5 46.51C506.1 357.2 514.6 372.4 511.2 387z" />
                            </svg> (47) 0000-0000</a></li>
                    <li> <a class="footer__text" href=""><svg class="footer__imgIcon2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                            </svg> (47) 99900-5550</a></li>
                </div>
                <div class="col-xl-4 col-md-12">
                    <div class="footer__menu-right">
                        <div>
                            <div class="footer__title2">
                                <span>FORMAS DE PAGAMENTO</span>
                            </div>
                            <img class="img-fluid footer__img" src="<?= BASE_URL_IMAGENS_FRONTEND ?>/bandeiras.png">
                        </div>
                        <div>
                            <div class="footer__title2">
                                <span>CERTIFICADOS</span>
                            </div>
                            <img class="img-fluid footer__img" src="<?= BASE_URL_IMAGENS_FRONTEND ?>/validacao.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer__bottom">
            <div class="container">
                <div class="row">
                    <div class="footer__author col">
                        <a href=""><img class="footer_logoAuthor" src="<?= BASE_URL_IMAGENS_FRONTEND ?>/Logo_carolina.png"></a>
                    </div>
                    <div class="footer__company col">
                        <div>
                            <span>CAROLINA SENS - Sites</span>
                        </div>
                        <div><span>Blumenau - SC</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-mobile__bottom">
            <div class="container">
                <div class="row">
                    <div class="footer__company col-12">
                        <div>
                            <span>CAROLINA SENS - Sites</span>
                        </div>
                        <div><span>Blumenau - SC</span>
                        </div>
                    </div>
                    <div class="footer__author col-12">
                        <a href=""><img class="footer_logoAuthor" src="<?= BASE_URL_IMAGENS_FRONTEND ?>/Logo_carolina.png"></a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="<?= BASE_URL_LIBS_FRONTEND ?>/owlcarousel/docs/assets/vendors/jquery.min.js"></script>
    <script src="<?= BASE_URL_LIBS_FRONTEND ?>/owlcarousel/dist/owl.carousel.min.js"></script>
    <script src="<?= BASE_URL_JS_FRONTEND ?>/carousel.js"> </script>

</body>

</html>