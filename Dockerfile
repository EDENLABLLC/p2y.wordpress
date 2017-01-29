FROM wordpress

COPY ./ /var/www/html

RUN sed -i 's/exec \"$@\"/chown -R www-data: \/var\/www\/html\/wp-content\/uploads \&\& exec \"$@\"/g' /usr/local/bin/docker-entrypoint.sh

VOLUME /var/www/html/wp-content/uploads
