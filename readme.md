Run `vendor/bin/phpunit` to run with bootstrap without DotEnv component

Run `vendor/bin/phpunit --bootstrap=tests/bootstrap.php` to run with bootstrap with DotEnv component

Run `vendor/bin/phpunit --bootstrap=tests/bootstrap.php | OTEL_PHP_DISABLED_INSTRUMENTATIONS=all` to run with bootstrap with DotEnv component and setting the environment var directly, which allows it ro run through (kinda)

