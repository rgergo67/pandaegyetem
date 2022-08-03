#!/bin/bash

source ~/.bashrc

# read .env variables
set -o allexport
source .env
set +o allexport

grn=$'\e[1;32m'
yel=$'\e[1;33m'
end=$'\e[0m'

$PHP artisan down --secret=bypass-maintenance-as-admin
echo "Maintenance mode enabled"

printf "${yel}Pulling...${end}\n"
git pull
printf "${grn}Pulled${end}\n"

printf "${yel}Installing composer depencencies...${end}\n"
$PHP /usr/bin/composer install --no-interaction --quiet --no-dev --prefer-dist --optimize-autoloader
printf "${grn}Installed composer depencencies${end}\n"

printf "${yel}Migrating...${end}\n"
$PHP artisan migrate --force --no-interaction
printf "${grn}Migrated${end}\n"

printf "${yel}Cache clearing...${end}\n"
$PHP artisan view:cache
$PHP artisan route:cache
$PHP artisan cache:clear
$PHP artisan config:cache
$PHP artisan page-cache:clear
printf "${grn}Cache cleared${end}\n"

$PHP artisan horizon:terminate

$PHP artisan up
printf "${grn}Maintenance mode disabled${end}\n"
