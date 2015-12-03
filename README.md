AMR
=========

AMR site


Installation
============

Clone the project
```sh
$ git clone https://github.com/Kyra2778/AMR.git
```

Then go inside the cloned folder and use Composer to install all the application dependencies
```sh
$ php composer.phar update
```

Clear the cache
```sh
$ php app/console cache:clear (--env=prod --no-debug)
```

Set the rights permissions
```sh
$ chown www-data -R app/cache/ app/logs/ && chmod 775 -R app/cache/ app/logs/
```


Tests
-----

To execute units and functionals tests:
```sh
$ phpunit -c app
```
