== PHP & Selenium Parallel Tests ==

Options:
1. Standard grid
Pros: simple
Cons: All tests sequential
2. Ant running groups in parallel (evenly split)
Pros: easy to setup, does not effect current setup (provided Ant is used as build too), 2 result sets
Cons: tests in group run sequentially, as fast as slowest group
3. Parallel tests
Pros: runs all tests in parallel
Cons: results come back separately

Commands:
1. tests/, > phpunit --configuration phpunit-selenium.xml
2. tests/, > ant -f build-selenium.xml
3a. (did not work!) ../vendor/bin/paratest -p 2 -f --phpunit=/usr/bin/phpunit ApplicationTest/Selenium/
3b. ../vendor/bin/parallel-phpunit --pu-threads 2 -c phpunit-selenium.xml ApplicationTest/Selenium/

Results: 2 tests with 2 assertions, 2 worker agents
1. 50s
2. 25s
3. 25s

Additional:
1. Pen testing via zap proxy

Resources:
3a. https://github.com/brianium/paratest
3b. https://github.com/verkkokauppacom/parallel-phpunit