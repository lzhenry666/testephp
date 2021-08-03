<?php
$arraysorteio = [];    
    for($i=1; $i <= 20; $i++) {
        $random = random_int(1, 10);
        array_push($arraysorteio, $random);
    }
    $valor = array_count_values($arraysorteio);
    $repetido = max(array_count_values($arraysorteio));
    $valor = array_search($repetido ,$valor);
    $arraysorteio = implode(" , ",$arraysorteio);    
    echo "Sorteados: $arraysorteio <br> Mais repetido : $valor <br>  foi repetido: $repetido vezes";
?>