Repository is archived. The issue with the ApiHttpClient will be fixed with https://github.com/open-telemetry/opentelemetry-php-contrib/pull/277 and i do not plan to post this example here anymore


Run `vendor/bin/phpunit` to run with bootstrap without DotEnv component -> failing

Run `vendor/bin/phpunit --bootstrap=tests/bootstrap.php` to run with bootstrap with DotEnv component -> failing

Run `OTEL_PHP_DISABLED_INSTRUMENTATIONS=all vendor/bin/phpunit` to run with setting the environment var directly, which allows it ro run through -> works

Run `OTEL_PHP_DISABLED_INSTRUMENTATIONS=all vendor/bin/phpunit --bootstrap=tests/bootstrap.php` to run with bootstrap with DotEnv component and setting the environment var directly, which allows it ro run through -> works
