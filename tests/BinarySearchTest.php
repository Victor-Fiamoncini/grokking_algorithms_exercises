<?php

use PHPUnit\Framework\TestCase;
use Victor\GrokkingAlgorithmsExercises\BinarySearch\BinarySearch;

class BinarySearchTest extends TestCase
{
    public function testBinarySearch(): void
    {
        $binarySearch = new BinarySearch([1, 3, 5, 7, 9]);
        $result = $binarySearch->execute(7);

        $this->assertEquals(3, $result);
    }
}
