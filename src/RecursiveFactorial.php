<?php

namespace Victor\GrokkingAlgorithmsExercises;

final class RecursiveFactorial
{
    public function execute(int $number): int
    {
        if ($number == 1) {
            return 1;
        } else {
            return $number * $this->execute($number - 1);
        }
    }
}
