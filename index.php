<?php

function puzzle($total, $pac) {
    $total += 1;
    $piezas_tot = [];
    while ($total > 0) {
        --$total;
        $piezas_tot[] = strval($total); // array total completo
    }

    $arr_piezas = [];
    for ($i = 0; $i < $pac; $i++) {
        echo "Introduce la pieza: ";
        $pieza = trim(fgets(STDIN));
        $arr_piezas[] = $pieza;
    }

    $piezas_faltantes = array_diff($piezas_tot, $arr_piezas);
    echo "Las piezas faltantes son: ";
    foreach ($piezas_faltantes as $pieza) {
        echo $pieza . " ";
    }
}

puzzle(5, 3);