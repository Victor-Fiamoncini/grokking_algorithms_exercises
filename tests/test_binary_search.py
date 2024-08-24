from src.binary_search.main import binary_search


def test_must_search_the_desired_value_index():
    value_index = binary_search([1, 2, 3, 4, 5, 6, 7, 8, 9], 3)

    assert value_index == 2
