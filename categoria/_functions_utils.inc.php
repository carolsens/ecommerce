<?php

function generateURLfilter($baseURL, $arrayUrlFilters, $filtroAtual)
{

    if(empty($arrayUrlFilters)) {
        $arrayUrlFilters = array();
        $arrayUrlFilters['filtro'] = array(); 
    }

    $encontreiValor = false;

    foreach ($arrayUrlFilters['filtro'] as $filter) {
        if ($filter == $filtroAtual) {
            $encontreiValor = true;
        }
    }

    if(!$encontreiValor) {
        $arrayUrlFilters['filtro'][] = $filtroAtual;
    }

    return $baseURL . '?' . http_build_query($arrayUrlFilters);
    
    exit;
}
