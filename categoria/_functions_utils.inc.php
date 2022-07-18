<?php

function generateURLfilter($baseURL, $arrayUrlFilters, $filtroAtual, $isPreco = false)
{


    if (empty($arrayUrlFilters)) {
        $arrayUrlFilters = array();
        $arrayUrlFilters['filtro'] = array();
        $arrayUrlFilters['preco'] = array();
    }

    if ($isPreco == false) {
        $encontreiValor = false;

        if (!empty($arrayUrlFilters['filtro'])) {

            foreach ($arrayUrlFilters['filtro'] as $filter) {
                if ($filter == $filtroAtual) {
                    $encontreiValor = true;
                }
            }
        }

        if (!$encontreiValor) {
            $arrayUrlFilters['filtro'][] = $filtroAtual;
        }
    }

    if ($isPreco == true) {
        $arrayUrlFilters['preco'] = $filtroAtual;
    }

    return $baseURL . '?' . http_build_query($arrayUrlFilters);

    exit;
}
