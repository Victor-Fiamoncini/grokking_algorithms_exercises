<?php

namespace Victor\GrokkingAlgorithmsExercises;

final class Recursion
{
    public function countdown(int $number): void
    {
        if ($number > 0) {
            echo "Countdown: $number \n";

            $this->countdown($number - 1);
        } else {
            echo "Countdown finished \n";
        }
    }

    public function factorial(int $number): int
    {
        if ($number == 1) {
            return 1;
        } else {
            return $number * $this->factorial($number - 1);
        }
    }
}
