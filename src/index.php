<?php

use Victor\GrokkingAlgorithmsExercises\BinarySearch;
use Victor\GrokkingAlgorithmsExercises\SelectionSort;

$binarySearch = new BinarySearch([1, 3, 5, 7, 9]);
$searchedIndex = $binarySearch->execute(7);

echo "Binary search: $searchedIndex \n";

$selectionSort = new SelectionSort([8, 5, 7, 1, 9, 3]);
$orderedItems = implode(", ", $selectionSort->execute());

echo "Selection sort ordered items: $orderedItems \n";
