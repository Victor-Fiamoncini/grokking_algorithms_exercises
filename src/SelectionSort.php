<?php

namespace Victor\GrokkingAlgorithmsExercises;

final class SelectionSort
{
    public function __construct(private array $items = []) {}

    /**
     * Searches the smallest index of a given array
     */
    private function searchSmallest(): int
    {
        $smallest = $this->items[0];
        $smallestIndex = 0;

        foreach ($this->items as $index => $item) {
            if ($item < $smallest) {
                $smallest = $item;
                $smallestIndex = $index;
            }
        }

        return $smallestIndex;
    }

    /**
     * Orders items by search the smallest index on each iteration, Big O execution time: O(n^2)
     */
    public function execute(): array
    {
        $orderedItems = [];

        foreach ($this->items as $_) {
            $smallestIndex = $this->searchSmallest();

            $orderedItems[] = array_splice($this->items, $smallestIndex, 1)[0];
        }

        return $orderedItems;
    }
}
