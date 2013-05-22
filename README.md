== PHP & Selenium Parallel Tests ==

Options:
1. Standard grid
Pros: simple
Cons: All tests sequential
2. Ant running groups in parallel (evenly split)
Pros: easy to setup, does not effect current setup (provided Ant is used as build too), 2 result sets
Cons: tests in group run sequentially
3. Paratests
Pros: runs all tests in parallel
Cons:


Expected results:
5 tests, 10secs each, 2 worker agents
1. 50s
2. 25s
3. 25s

Additional:
1. Pen testing via zap proxy