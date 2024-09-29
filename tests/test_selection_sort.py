from src.selection_sort.main import selection_sort


def test_must_order_the_given_list():
    ordered_items = selection_sort([5, 2, 7, 1, 9, 3])

    assert ordered_items == [1, 2, 3, 5, 7, 9]
