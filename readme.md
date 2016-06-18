## UUID generation benchmark, Laravel/Lumen vs. MySQL

Read the results [here](https://gistlog.co/esroyo/19adabb18c5082f3fd58a9bd262a054a).

### Replay
* clone
* cp .env.example .env
* make a new MySQL database
* fill .env (use a user with SUPER privilege)
* `composer install`
* `./vendor/bin/phpbench run --report=aggregate`
