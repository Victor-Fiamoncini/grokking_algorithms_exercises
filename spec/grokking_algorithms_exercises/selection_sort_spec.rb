# frozen_string_literal: true

RSpec.describe GrokkingAlgorithmsExercises::SelectionSort do
  it "orders the items ascending" do
    selection_sort = described_class.new([8, 5, 7, 1, 9, 3])

    expect(selection_sort.execute).to eq([1, 3, 5, 7, 8, 9])
  end

  it "does not mutate the list it was given" do
    items = [8, 5, 7, 1, 9, 3]
    described_class.new(items).execute

    expect(items).to eq([8, 5, 7, 1, 9, 3])
  end

  it "returns an empty list when there is nothing to order" do
    expect(described_class.new.execute).to eq([])
  end
end
