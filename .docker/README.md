Build image
```bash
$ docker-compose build
```

Run containers 
```bash
$ docker-compose up
```

Run tests 
```bash
$ docker-compose run propel_bash "./test/reset_tests.sh"
$ docker-compose run propel_bash "./vendor/bin/phpunit"
```
