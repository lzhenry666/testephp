<?php
function SeculoAno($Ano){
    $Seculo = ceil($Ano/100); // arredonda cima
    return $Seculo;
}
    echo SeculoAno(1905);
    echo SeculoAno(1700);
?>