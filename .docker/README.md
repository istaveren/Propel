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
# Log in to the container 
$ docker-compose run propel_bash

$ ./test/reset_tests.sh
$ ./vendor/bin/phpunit
```
