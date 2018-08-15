build
docker build . -t php56-alpine-composer:v0.0.1

run
docker run -it --rm php56-alpine-composer:v0.0.1

Run composer install
docker run --rm --interactive --tty --volume $PWD:/app php56-alpine-composer:v0.0.1 install
