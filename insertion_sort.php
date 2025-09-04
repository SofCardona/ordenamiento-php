<?php

$names = ["Carlos", "Ana", "Pedro", "María", "Lucía", "Juan"];

echo "Lista original:\n";
print_r($names);

// Algoritmo Insertion Sort
function insertionSort(array $arr): array {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;

        // Comparación insensible a mayúsculas/minúsculas
        while ($j >= 0 && strcasecmp($arr[$j], $key) > 0) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

$sortedNames = insertionSort($names);

echo "\nLista ordenada alfabéticamente:\n";
print_r($sortedNames);
?>
