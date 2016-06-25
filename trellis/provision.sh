#!/bin/bash
shopt -s nullglob

PROVISION_CMD="ansible-playbook server.yml -e env=$1"
ENVIRONMENTS=( hosts/* )
ENVIRONMENTS=( "${ENVIRONMENTS[@]##*/}" )
NUM_ARGS=1

show_usage() {
  echo "Usage: ./provision.sh <environment>

<environment> is the environment to provision ("staging", "production", etc)

Available environments:
`( IFS=$'\n'; echo "${ENVIRONMENTS[*]}" )`

Examples:
  ./provision.sh staging
  ./provision.sh production
"
}

HOSTS_FILE="hosts/$1"

[[ $# -ne $NUM_ARGS || $1 = -h ]] && { show_usage; exit 0; }

if [[ ! -e $HOSTS_FILE ]]; then
  echo "Error: $1 is not a valid environment ($HOSTS_FILE does not exist)."
  echo
  echo "Available environments:"
  ( IFS=$'\n'; echo "${ENVIRONMENTS[*]}" )
  exit 0
fi

$PROVISION_CMD
