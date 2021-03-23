#!/bin/bash

set -e

if [[ -n "${DEBUG}" ]]; then
    set -x
fi

export USER_NAME="${USER_NAME:-admin}"
export PASSWORD="${PASSWORD:-admin}"
export HOST="${HOST:-127.0.0.1}"
export PORT="${PORT:-11211}"
export TIME_ZONE="${TIME_ZONE:-UTC}"

if [[ -f "/var/config.dist.tmpl" ]]; then
    envsubst < /var/config.dist.tmpl > /var/www/html/app/.config
fi

if [[ -f "/var/add-php-settings.tmpl" ]]; then
    envsubst < /var/add-php-settings.tmpl > /usr/local/etc/php/conf.d/.add-php-settings.ini
fi

exec $@