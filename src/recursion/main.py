def countdown(number: int) -> None:
    print(number)

    if number > 0:
        countdown(number - 1)
    else:
        print("Countdown finished")


def fat(number: int) -> int:
    if number == 1:
        return 1
    else:
        return number * fat(number - 1)


def main() -> None:
    countdown(10)
    print(fat(3))


if __name__ == "__main__":
    main()
