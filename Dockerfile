FROM wordpress

COPY ./ /var/www/html

RUN sed -i 's/exec \"$@\"/chmod 755 \/var\/www\/html\/wp-content\/uploads \&\& exec \"$@\"/g' /usr/local/bin/docker-entrypoint.sh

VOLUME /var/www/html/wp-content/uploads
