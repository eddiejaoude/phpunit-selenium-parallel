== PHP & Selenium Parallel Tests ==

Options:
1. Ant running groups in parallel
Pros: easy to setup, does not effect current setup (provided Ant is used as build too), 2 result sets
Cons: tests in group run sequentially
2. Paratests
Pros: runs all tests in parallel
Cons: