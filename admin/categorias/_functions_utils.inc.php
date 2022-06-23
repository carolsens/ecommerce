<?php

function categoriaAtivoLabel($ativo) {
         switch ($ativo) {
            case '0':
                  return 'Inativo';
            break;
            case '1':
                  return 'Ativo';
            break;

       }
}

