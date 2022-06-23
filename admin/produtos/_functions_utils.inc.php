<?php

function localPaginaInicialLabel($local_pagina_inicial) {
         switch ($local_pagina_inicial) {
            case 'carouselone':
                  return 'Carrossel News';
            break;
            case 'carouseltwo':
                  return 'Carrossel Promoções';
            break;
            case 'carouselthree':
                  return 'Carrossel Mais Vendidos';
            break;

       }
}

function moneyFormat($preco)
{
      return number_format($preco/100, 2, ',', '.');
}