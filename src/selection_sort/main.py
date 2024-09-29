def search_smallest(items: list[int]) -> int:
    """Searches the smallest index of a given list"""

    smallest = items[0]
    smallest_index = 0

    for index, element in enumerate(items):
        if element < smallest:
            smallest = element
            smallest_index = index

    return smallest_index


def selection_sort(items: list[int]) -> list[int]:
    """Orders items by search the smallest index on each iteration, Big O execution time: O(n^2)"""

    ordered_items = []

    for _ in range(len(items)):
        smallest_index = search_smallest(items)
        ordered_items.append(items.pop(smallest_index))

    return ordered_items


ordered_items = selection_sort([5, 2, 7, 1, 9, 3])

print(f"Ordered items: {ordered_items}")
