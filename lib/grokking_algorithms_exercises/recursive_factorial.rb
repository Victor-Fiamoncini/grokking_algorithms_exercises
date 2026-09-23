# frozen_string_literal: true

module GrokkingAlgorithmsExercises
  # Factorial of a number through recursion, Big O execution time: O(n)
  class RecursiveFactorial
    def execute(number)
      raise ArgumentError, "number must not be negative" if number.negative?

      return 1 if number <= 1

      number * execute(number - 1)
    end
  end
end
