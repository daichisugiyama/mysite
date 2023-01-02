#!/bin/bash

DOMAIN='sgym.art'
CURRENT_YEAR=`date +%Y`
CURRENT_MONTH=`date +%m`

mkdir -p /home/www/${DOMAIN}/acme/${CURRENT_YEAR}-${CURRENT_MONTH}
/home/admin/.acme.sh/acme.sh --install-cert \
    -d ${DOMAIN} \
    --key-file /home/www/${DOMAIN}/acme/${CURRENT_YEAR}-${CURRENT_MONTH}/key.pem \
    --fullchain-file /home/www/${DOMAIN}/acme/${CURRENT_YEAR}-${CURRENT_MONTH}/fullchain.pem
sed -i".bak" -e "s/\/acme\/[0-9]\{4\}-[0-9]\{2\}/\/acme\/${CURRENT_YEAR}-${CURRENT_MONTH}/g" /home/www/${DOMAIN}/nginx/server.conf 