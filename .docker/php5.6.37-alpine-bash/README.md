build
docker build . -t php56-alpine-bash:v0.0.3

run
docker run -it --rm php56-alpine-bash:v0.0.3

Mount with volume
docker run -it --rm -v $PWD:/usr/src/myapp -w /usr/src/myapp php56-alpine-bash:v0.0.3
