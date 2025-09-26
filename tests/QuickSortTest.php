<?php

use PHPUnit\Framework\TestCase;
use Victor\GrokkingAlgorithmsExercises\QuickSort;

class QuickSortTest extends TestCase
{
    public function testQuickSort(): void
    {
        $quickSort = new QuickSort([8, 5, 7, 1, 9, 3]);
        $result = $quickSort->execute();

        $this->assertEquals([1, 3, 5, 7, 8, 9], $result);
    }
}
