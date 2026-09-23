# Grokking Algorithms Exercises

Stuff from Grokking Algorithms book

## Versions

| Tool | Version |
| --- | --- |
| Ruby | 4.0.2 |
| Bundler | 4.0.6 |
| Rake | 13.4.2 |
| RSpec | 3.13.2 |
| RuboCop | 1.91.0 |
| rubocop-rspec | 3.10.2 |

The Ruby version is pinned in [`.tool-versions`](.tool-versions), the gem versions are
locked in [`Gemfile.lock`](Gemfile.lock).

## Setup ⚒️

The Ruby version is managed with [mise](https://mise.jdx.dev/) (`.tool-versions` is also
read by asdf, if you use that instead):

```bash
mise install
```

Then install the gems:

```bash
bundle install
```

## Running the tests 🧪

`rake` is the default entry point, it runs RuboCop and then the specs:

```bash
bundle exec rake
```

To run them separately:

```bash
bundle exec rspec    # specs only
bundle exec rubocop  # linter only
```

A single spec file, or a single example by line number:

```bash
bundle exec rspec spec/grokking_algorithms_exercises/binary_search_spec.rb
bundle exec rspec spec/grokking_algorithms_exercises/binary_search_spec.rb:5
```

RuboCop can fix most of what it reports:

```bash
bundle exec rubocop -a
```

## Running the algorithms 🚀

```bash
./bin/demo
```

```
Binary search: 3
Selection sort ordered items: 1, 3, 5, 7, 8, 9
Recursive factorial: 3628800
```

## Exercises

| Algorithm | Big O | Source |
| --- | --- | --- |
| Binary search | O(log n) | [`binary_search.rb`](lib/grokking_algorithms_exercises/binary_search.rb) |
| Selection sort | O(n^2) | [`selection_sort.rb`](lib/grokking_algorithms_exercises/selection_sort.rb) |
| Recursive factorial | O(n) | [`recursive_factorial.rb`](lib/grokking_algorithms_exercises/recursive_factorial.rb) |
| Quick sort | _still to do_ | [`quick_sort.rb`](lib/grokking_algorithms_exercises/quick_sort.rb) |

Quick sort is not implemented yet, so its spec is marked as pending — the suite stays green
until it gets written.

---

Released in 2024

By [Victor B. Fiamoncini](https://github.com/Victor-Fiamoncini) ☕
