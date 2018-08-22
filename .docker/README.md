## Steps for PHP 5.6

#### Build image
```bash
$ docker-compose -f docker-compose.yml -f docker-compose-php56.yml build
```

#### Run containers 
```bash
$ docker-compose -f docker-compose.yml -f docker-compose-php56.yml up
```

#### Run tests 
```bash
$ docker-compose -f docker-compose.yml -f docker-compose-php56.yml run propel_56_bash "./test/reset_tests.sh"
$ docker-compose -f docker-compose.yml -f docker-compose-php56.yml run propel_56_bash "./vendor/bin/phpunit"
```

