#!/bin/bash

DOMAIN='sgym.art'

/home/admin/.acme.sh/acme.sh --issue \
    -d ${DOMAIN} \
    -w /home/www/${DOMAIN}/laravel/public/ \
    --force