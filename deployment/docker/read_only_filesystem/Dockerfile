FROM ubuntu

MAINTAINER anoopyadavan@gmail.com
ARG DEBIAN_FRONTEND=noninteractive
RUN apt-get update && apt-get install -y apache2 apache2-utils openssh-server
RUN groupadd -r bob && useradd -r -g bob bob
RUN echo 'bob:password' | chpasswd
RUN echo 'root:password' | chpasswd
EXPOSE 80
EXPOSE 22
RUN rm /var/www/html/index.html
ADD ./app/ /var/www/html/
COPY script.sh script.sh
RUN chmod +x script.sh
CMD ["./script.sh"]
