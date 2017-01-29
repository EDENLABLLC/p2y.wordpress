FROM wordpress

WORKDIR /var/www/html

VOLUME ["/var/www/html/wp-content/uploads"]

# entrypoint sleeps for 10sec before copying wordpress files...get rid of that
RUN sed -i 's/sleep 10/sleep 0/g' /entrypoint.sh
# add 'chown -R www-data: /var/www/html/wp-content/uploads' line to entrypoint
# to change /uploads permissions when container starts
RUN sed -i 's/set -e/set -e\nchown -R www-data: \/var\/www\/html\/wp-content\/uploads/g' /entrypoint.sh

COPY ./ /var/www/html
