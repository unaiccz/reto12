<!-- metodo 1 -->
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
echo "ej1\n";
// puzzle(5, 4);
?>


<!-- metodo 2 -->
<?php
function puzzle2($total, $pac) {
    $suma_arr1 = 0;
    $suma_arr2 = 0;
    $piezas = [];
    for ($i = 1; $i <= $total; $i++) {
        $suma_arr1 += $i;
    }
    for ($i = 1; $i <= $pac; $i++) {
        echo "Introduce la pieza: ";
        $pieza = trim(fgets(STDIN));
        $suma_arr2 += $pieza;
        $piezas[] = $pieza;
    }
echo "Falta la pieza: " . ($suma_arr1 - $suma_arr2);
}
puzzle2(5, 4);


/* metodo 3 */
<?php
function puzzle3($total, $pac) {
    // Calcular la suma de la serie aritmética usando la fórmula
    $suma_arr1 = ($total * ($total + 1)) / 2;

    $suma_arr2 = 0;
    $piezas = [];
    for ($i = 1; $i <= $pac; $i++) {
        echo "Introduce la pieza: ";
        $pieza = trim(fgets(STDIN));
        $suma_arr2 += $pieza;
        $piezas[] = $pieza;
    }

    echo "Falta la pieza: " . ($suma_arr1 - $suma_arr2);
}

puzzle3(5, 4);
?>