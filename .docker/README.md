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

#### Generate test coverage report
```bash
$ docker-compose -f docker-compose.yml -f docker-compose-php56.yml run propel_56_bash 
bash-4.4# ./vendor/bin/phpunit --coverage-html=coverage56/
```


## Steps for PHP 7.2

#### Build image
```bash
$ docker-compose -f docker-compose.yml -f docker-compose-php72.yml build
```

#### Run containers 
```bash
$ docker-compose -f docker-compose.yml -f docker-compose-php72.yml up
```

#### Run tests 
```bash
$ docker-compose -f docker-compose.yml -f docker-compose-php72.yml run propel_72_bash "./test/reset_tests.sh"
$ docker-compose -f docker-compose.yml -f docker-compose-php72.yml run propel_72_bash "./vendor/bin/phpunit"
```

#### Generate test coverage report
```bash
$ docker-compose -f docker-compose.yml -f docker-compose-php72.yml run propel_72_bash 
bash-4.4# ./vendor/bin/phpunit --coverage-html=coverage72/
```

## Remove all your docker images and containers
This was helpful to me to test the craziness... It will nuke all  your docker images and containers tho haha
```bash
$ docker rm $(docker ps -a -q)
$ docker rmi $(docker images -q)
```
