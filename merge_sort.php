<?php

$words = ["banana", "manzana", "uva", "fresa", "pera", "kiwi"];

echo "Lista original:\n";
print_r($words);

// Algoritmo Merge Sort
function mergeSort(array $arr): array {
    if (count($arr) <= 1) {
        return $arr;
    }

    $middle = intdiv(count($arr), 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    return merge(mergeSort($left), mergeSort($right));
}

function merge(array $left, array $right): array {
    $result = [];
    $i = $j = 0;

    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    while ($i < count($left)) {
        $result[] = $left[$i++];
    }

    while ($j < count($right)) {
        $result[] = $right[$j++];
    }

    return $result;
}

$sortedWords = mergeSort($words);

echo "\nLista ordenada alfabéticamente:\n";
print_r($sortedWords);
?>
