FROM wordpress

EXPOSE 8080

WORKDIR /var/www/html

COPY ./ ./
