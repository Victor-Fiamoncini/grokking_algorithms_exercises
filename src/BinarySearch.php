<?php

namespace Victor\GrokkingAlgorithmsExercises;

final class BinarySearch
{
    public function __construct(private readonly array $items = []) {}

    /**
     * Binary search algorithm, Big O execution time: O(log n)
     */
    public function execute(int $itemToSearch): ?int
    {
        $low = 0;
        $high = count($this->items) - 1;

        while ($low <= $high) {
            $middle = round(($low + $high) / 2);
            $attempt = $this->items[$middle];

            if ($attempt === $itemToSearch) {
                return $middle;
            }

            if ($attempt > $itemToSearch) {
                $high = $middle - 1;
            } else {
                $low = $middle + 1;
            }
        }

        return null;
    }
}

# low = 0; high = 4
# true
# middle = 2
# try = 5

# low = 0; high = 1
# true
# middle = 0
# try = 1

# low = 1; high = 1
# true
# middle = 1
# try = 3

# Finded 3 on position 1
