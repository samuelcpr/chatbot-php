#!/usr/bin/env bash

set -e

host="$1"
shift
cmd="$@"

until nc -z "$host" 3306; do
  >&2 echo "Aguardando o MySQL estar disponível..."
  sleep 1
done

>&2 echo "MySQL está disponível - executando o comando"
exec $cmd
