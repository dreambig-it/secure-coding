FROM ubuntu

MAINTAINER anoopyadavan@gmail.com
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y apache2 apache2-utils php libapache2-mod-php
RUN apt clean 
EXPOSE 80
RUN rm /var/www/html/index.html
ADD ./app/ /var/www/html/
CMD apachectl -D FOREGROUND
