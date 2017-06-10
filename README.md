# Kain

[![Build Status](https://travis-ci.org/jpcaparas/kain.svg?branch=master)](https://travis-ci.org/jpcaparas/kain) 
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/jpcaparas/kain/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/jpcaparas/kain/?branch=master)

Kain - An online directory of Filipino eating establishments in New Zealand.

This is a test-driven, API-driven application whose front-end is decoupled from its back-end.

API is intended to be made publicly accessible.

# Tests

This project uses the [Codeception test suite](http://codeception.com/):
    
    # (One-time) Generate a unique application key
    php artisan key:generate --env=testing
    
    # Run tests
    php vendor/bin/codecept run
    
# To-do & ideas

Head on over to the [GitHub project boards](https://github.com/jpcaparas/kain/projects) and submit your idea there.

