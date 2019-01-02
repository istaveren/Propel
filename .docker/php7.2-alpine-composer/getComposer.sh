#!/bin/sh

EXPECTED_SIGNATURE="$(curl https://composer.github.io/installer.sig)"
curl 'https://getcomposer.org/installer' -o 'composer-setup.php'
ACTUAL_SIGNATURE="$(php -r "echo hash_file('sha384', 'composer-setup.php');")"


if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ]
then
    >&2 echo 'ERROR: Invalid installer signature'
    echo "$EXPECTED_SIGNATURE != $ACTUAL_SIGNATURE"
    rm composer-setup.php
    exit 1
fi

php composer-setup.php --quiet
RESULT=$?
rm composer-setup.php
cp /composer.phar /usr/bin/composer
exit $RESULT
