<div class="navbar-notification">
    <div class="container">
        <div class="row">
            <div class="col">
                Esta é uma página demonstrativa e em desenvolvimento. Algumas funções não estão habilitadas.
            </div>
        </div>
    </div>
</div>

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

                        <a class="dropdown navbar-menu__categories" href="<?= BASE_URL_CATEGORIA . '/' ?><?= strtolower($categoria['nome']) ?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo $categoria['nome'];

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

                    <?php

                    $categoriasmobile = $mysqli->query($sqlcategoria);

                    ?>
                    <span class="dropdown">
                        <a href="#" class="dropdown navbar-bottom-mobile__dropdown"> <svg class="navbar-bottom-mobile__iconMenu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
                                <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                            </svg>
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <?php foreach ($categoriasmobile as $categoriamobile) : ?>
                                <li><a class="dropdown-item navbar-bottom-mobile__itens" href="<?= BASE_URL_CATEGORIA . '/' ?><?= strtolower($categoriamobile['nome']) ?>"> <?php echo $categoriamobile['nome']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>