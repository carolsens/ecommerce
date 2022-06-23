<?php

function localPaginaInicialLabel($local_pagina_inicial) {
         switch ($local_pagina_inicial) {
            case 'carouselnews':
                  return 'Carrossel News';
            case 'carouselsale':
                  return 'Carrossel Promoções';
            case 'carouselorder':
                  return 'Carrossel Mais Vendidos';

       }
}

function moneyFormat($preco)
{
      return number_format($preco/100, 2, ',', '.');
}