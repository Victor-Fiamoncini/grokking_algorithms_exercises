# frozen_string_literal: true

module GrokkingAlgorithmsExercises
  # Selection sort algorithm, Big O execution time: O(n^2)
  class SelectionSort
    def initialize(items = [])
      @items = items.dup
    end

    # Orders the items by taking the smallest one on each iteration
    def execute
      ordered_items = []

      ordered_items << @items.delete_at(search_smallest) until @items.empty?

      ordered_items
    end

    private

    # Searches the index of the smallest of the remaining items
    def search_smallest
      smallest = @items[0]
      smallest_index = 0

      @items.each_with_index do |item, index|
        if item < smallest
          smallest = item
          smallest_index = index
        end
      end

      smallest_index
    end
  end
end
