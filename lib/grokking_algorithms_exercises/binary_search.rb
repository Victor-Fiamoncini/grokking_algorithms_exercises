# frozen_string_literal: true

module GrokkingAlgorithmsExercises
  # Binary search algorithm, Big O execution time: O(log n)
  class BinarySearch
    def initialize(items = [])
      @items = items
    end

    # Returns the index of the searched item, or nil when it is absent
    def execute(item_to_search)
      low = 0
      high = @items.size - 1

      while low <= high
        middle = (low + high) / 2
        attempt = @items[middle]

        return middle if attempt == item_to_search

        if attempt > item_to_search
          high = middle - 1
        else
          low = middle + 1
        end
      end

      nil
    end
  end
end
