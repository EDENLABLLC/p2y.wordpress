FROM wordpress

VOLUME ["/var/www/html/wp-content/uploads"]

# entrypoint sleeps for 10sec before copying wordpress files...get rid of that
RUN sed -i 's/sleep 10/sleep 0/g' /usr/local/bin/docker-entrypoint.sh
# add 'chown -R www-data: /var/www/html/wp-content/uploads' line to entrypoint
# to change /uploads permissions when container starts
RUN sed -i 's/set -e/set -e\nchown -R www-data: \/var\/www\/html\/wp-content\/uploads/g' /usr/local/bin/docker-entrypoint.sh

COPY ./ /var/www/html
