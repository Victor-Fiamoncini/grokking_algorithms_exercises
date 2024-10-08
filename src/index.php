<?php

use Victor\GrokkingAlgorithmsExercises\BinarySearch\BinarySearch;

$binarySearch = new BinarySearch([1, 3, 5, 7, 9]);
$searchedIndex = $binarySearch->execute(7);

echo "Binary search: $searchedIndex";
