Run `vendor/bin/phpunit` to run with bootstrap without DotEnv component -> failing

Run `vendor/bin/phpunit --bootstrap=tests/bootstrap.php` to run with bootstrap with DotEnv component -> failing

Run `OTEL_PHP_DISABLED_INSTRUMENTATIONS=all vendor/bin/phpunit` to run with setting the environment var directly, which allows it ro run through -> works

Run `OTEL_PHP_DISABLED_INSTRUMENTATIONS=all vendor/bin/phpunit --bootstrap=tests/bootstrap.php` to run with bootstrap with DotEnv component and setting the environment var directly, which allows it ro run through -> works
