Build image
```bash
docker build -t propel-docker:0.1.0 .
```

Run tests in docker
```bash
docker run -it --rm -v `pwd`:/usr/src/myapp -w /usr/src/myapp propel-docker "./vendor/bin/phpunit"
```
