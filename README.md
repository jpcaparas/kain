# Kain

Kain - An online directory of Filipino eating establishments in New Zealand.

# Tests

This project uses the [Codeception test suite](http://codeception.com/):

    # (One-time) A SQLite file must exist to store test data
    php -r "fopen('database/database.testing.sqlite', 'w');"
    
    # (One-time) Generate a unique application key
    php artisan key:generate --env=testing
    
    # Run tests
    php vendor/bin/codecept run
