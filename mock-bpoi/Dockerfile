FROM centos:centos7
MAINTAINER Carl James Liwanag<cjliwanag@ayannah.com>
LABEL Vendor="CentOS" \
      License=GPLv2 \
      Version=2.4.6-40

ENV TZ Asia/Manila


RUN yum install -y epel-release && \
    rpm -Uvh https://mirror.webtatic.com/yum/el7/webtatic-release.rpm && \
    yum install -y supervisor


RUN yum -y --setopt=tsflags=nodocs update && \
    yum -y --setopt=tsflags=nodocs install httpd && \
    yum -y install php71w php71w-devel php71w-fpm php71w-opcache \
                                 php71w-mysql \
                                 php71w-pgsql \
                                 php71w-soap \
                                 php71w-xml \
                                 php71w-mbstring \
                                 php71w-pdo \
                                 php71w-gd \
                                 php71w-common \
                                 php-nette-tokenizer

RUN package-cleanup --dupes && \
    package-cleanup --cleandupes && \
    yum clean all

RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/local/bin

COPY ./etc /etc/

RUN mkdir /etc/httpd/sites-available && \
    mkdir /etc/httpd/sites-enabled
ADD 000-default.conf /etc/httpd/sites-available/
RUN ln -s /etc/httpd/sites-available/000-default.conf /etc/httpd/sites-enabled/000-default.conf

#EXPOSE 80

RUN chown -R nobody:nobody /var/www/html
ADD ./ /var/www/html

# Change working directory
WORKDIR /var/www/html

#ADD ./.local.env /var/www/html/.env

# Install and update laravel (rebuild into vendor folder)
RUN composer install
#RUN composer update

RUN mkdir -p /var/www/html/public/env/

# Change folder permission
RUN chmod -R 0777 /var/www/html/storage/
#RUN chmod -R 0777 /var/www/html/public/uploads/

ADD run-httpd.sh /run-httpd.sh
RUN chmod -v +x /run-httpd.sh
EXPOSE 80

CMD ["/run-httpd.sh"]
