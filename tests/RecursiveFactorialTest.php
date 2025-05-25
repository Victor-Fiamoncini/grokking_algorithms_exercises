<?php

use PHPUnit\Framework\TestCase;
use Victor\GrokkingAlgorithmsExercises\RecursiveFactorial;

class RecursiveFactorialTest extends TestCase
{
    public function testRecursiveFactorial(): void
    {
        $recursiveFactorial = new RecursiveFactorial();
        $result = $recursiveFactorial->execute(10);

        $this->assertEquals(3628800, $result);
    }
}
