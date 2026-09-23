# frozen_string_literal: true

RSpec.describe GrokkingAlgorithmsExercises::RecursiveFactorial do
  it "calculates the factorial of a number" do
    expect(described_class.new.execute(10)).to eq(3_628_800)
  end

  it "calculates the factorial of one" do
    expect(described_class.new.execute(1)).to eq(1)
  end

  it "calculates the factorial of zero" do
    expect(described_class.new.execute(0)).to eq(1)
  end

  it "raises for a negative number" do
    expect { described_class.new.execute(-1) }.to raise_error(ArgumentError)
  end
end
