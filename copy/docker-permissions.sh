#!/usr/bin/env bash

cd docker
docker-compose exec apache-php /usr/local/bin/permissions.sh
