FROM wordpress

WORKDIR /var/www/html

VOLUME /var/www/html/wp-content/uploads

COPY ./ ./
