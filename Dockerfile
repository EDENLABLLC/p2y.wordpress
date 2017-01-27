FROM wordpress

WORKDIR /var/www/html

COPY ./ ./

VOLUME ["/var/www/html/wp-content/uploads"]
