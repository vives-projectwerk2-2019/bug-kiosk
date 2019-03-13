#!/bin/sh
# wait-for-mariadb.sh

set -e

host="$1"
shift
cmd="$@"

until bash -c "echo 1 > /dev/tcp/$host/3306"; do
  >&2 echo "Mariadb is unavailable - sleeping"
  sleep 0.5
done

>&2 echo "Mariadb is up - executing command"
exec $cmd
