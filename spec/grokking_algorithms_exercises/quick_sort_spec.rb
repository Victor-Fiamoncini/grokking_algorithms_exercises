# frozen_string_literal: true

RSpec.describe GrokkingAlgorithmsExercises::QuickSort do
  it "orders the items ascending" do
    pending "QuickSort#execute is not implemented yet"

    quick_sort = described_class.new([8, 5, 7, 1, 9, 3])

    expect(quick_sort.execute).to eq([1, 3, 5, 7, 8, 9])
  end
end
