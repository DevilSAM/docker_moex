FROM php:7.2
COPY html/index.php /index.php
RUN chmod +x /index.php
CMD php /index.php