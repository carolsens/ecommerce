<?php

$projectFolder = 'ecommerce';

$currentDir = __DIR__;

//echo $currentDir;

$arrParts = explode($projectFolder, $currentDir);

$frontendBaseDir = $arrParts[0] . $projectFolder;

$adminBaseDir = $frontendBaseDir . DIRECTORY_SEPARATOR . 'admin'; 

include($frontendBaseDir . '/includes/conexao.php');
include($frontendBaseDir . '/includes/constantes.php');