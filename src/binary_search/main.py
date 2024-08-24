def binary_search(items: list, item_to_search: int) -> int | None:
    low = 0
    high = len(items) - 1

    while low <= high:
        middle = (low + high) // 2
        attempt = items[middle]

        if attempt == item_to_search:
            return middle

        if attempt > item_to_search:
            high = middle - 1
        else:
            low = middle + 1

    return None


item = binary_search([1, 3, 5, 7, 9], 3)

print(f"Binary search: {item}")

# low = 0; high = 4
# true
# middle = 2
# try = 5

# low = 0; high = 1
# true
# middle = 0
# try = 1

# low = 1; high = 1
# true
# middle = 1
# try = 3

# Finded 3 on position 1
