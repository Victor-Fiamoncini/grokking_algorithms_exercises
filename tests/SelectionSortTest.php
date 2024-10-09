<?php

use PHPUnit\Framework\TestCase;
use Victor\GrokkingAlgorithmsExercises\SelectionSort;

class SelectionSortTest extends TestCase
{
    public function testSelectionSort(): void
    {
        $selectionSort = new SelectionSort([8, 5, 7, 1, 9, 3]);
        $result = $selectionSort->execute();

        $this->assertEquals([1, 3, 5, 7, 8, 9], $result);
    }
}
