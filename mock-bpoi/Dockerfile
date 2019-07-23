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

#COPY etc /etc/

RUN echo "[program:httpd] \
    redirect_stderr=true \
    command=/usr/sbin/httpd -DFOREGROUND \
    stdout_logfile=/var/log/supervisor/%(program_name)s.log \
    stderr_logfile=/var/log/supervisor/%(program_name)s.log \
    startsecs=0 \
    autorestart=false \
    numprocs=1 \
    process_name=httpd" > /etc/supervisord.d/apache.conf

RUN mkdir /etc/httpd/sites-available && \
    mkdir /etc/httpd/sites-enabled
#ADD 000-default.conf /etc/httpd/sites-available/
RUN echo "<VirtualHost *:80> \
        ServerAdmin webmaster@localhost \
        ServerName mockbpoi.ayannah.com \
        DocumentRoot /var/www/html/public \
        <Directory /> \
                Options FollowSymLinks \
                AllowOverride All \
        </Directory> \
        <Directory /var/www/html/public > \
                Options Indexes FollowSymLinks MultiViews \
                AllowOverride All \
                Order allow,deny \
                allow from all \
        </Directory> \
        ErrorLog /var/log/httpd/error.log \

        # Possible values include: debug, info, notice, warn, error, crit, \
        # alert, emerg. \
        LogLevel warn \
        CustomLog /var/log/httpd/access.log combined \
        </VirtualHost>" > /etc/httpd/sites-available/000-default.conf
RUN ln -s /etc/httpd/sites-available/000-default.conf /etc/httpd/sites-enabled/000-default.conf

#EXPOSE 80

RUN chown -R nobody:nobody /var/www/html
ADD ./ /var/www/html

# Change working directory
WORKDIR /var/www/html

#ADD ./.local.env /var/www/html/.env

# Install and update laravel (rebuild into vendor folder)
#RUN composer install
#RUN composer update

RUN mkdir -p /var/www/html/public/env/

# Change folder permission
RUN chmod -R 0777 /var/www/html/storage/
#RUN chmod -R 0777 /var/www/html/public/uploads/

#ADD run-httpd.sh /run-httpd.sh
EXPOSE 80

CMD ["exec /usr/sbin/httpd -DFOREGROUND"]
