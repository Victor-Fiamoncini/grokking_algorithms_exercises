# frozen_string_literal: true

RSpec.describe GrokkingAlgorithmsExercises::BinarySearch do
  it "returns the index of the searched item" do
    binary_search = described_class.new([1, 3, 5, 7, 9])

    expect(binary_search.execute(7)).to eq(3)
  end

  # The trace the original PHP implementation documented by hand:
  # low/high narrows 0..4 -> 0..1 -> 1..1, finding 3 on position 1.
  it "finds an item that sits on the left half" do
    binary_search = described_class.new([1, 3, 5, 7, 9])

    expect(binary_search.execute(3)).to eq(1)
  end

  it "finds every item of an even sized list" do
    items = [2, 4, 6, 8]
    binary_search = described_class.new(items)

    items.each_with_index do |item, index|
      expect(binary_search.execute(item)).to eq(index)
    end
  end

  it "returns nil when the item is absent" do
    binary_search = described_class.new([1, 3, 5, 7, 9])

    expect(binary_search.execute(4)).to be_nil
  end

  it "returns nil for an empty list" do
    expect(described_class.new.execute(1)).to be_nil
  end
end
