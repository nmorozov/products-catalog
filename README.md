Products catalog
================

Simple products catalog

## Installation

1. Create folder at any place
2. Clone project 
```
git clone git@github.com:nmorozov/products-catalog.git
```
3. Create <cloned_folder>/app/config/parameters.yml with following content:
```
parameters:
    database_host: 127.0.0.1
    database_port: null
    database_name: products_catalog
    database_user: root
    database_password: password
    mailer_transport: smtp
    mailer_host: 127.0.0.1
    mailer_user: null
    mailer_password: null
    secret: 76194933448cde38e500520a390dc9b5287fbac7
```
and replace root, password etc. with your data.
4. Update vendor folder:
```
composer update
```
if composer is installed globally or
```
php composer.phar
```
if locally

5. Restore database from dump.sql

6. Run server
```
php bin/console server:run
```
7.Open your browser and access the http://localhost:8000/ URL to see the products list Page
