# Template for a Slim application specialy focused for an API

## Usage (API)

All requests require api_key.

## INSTALLATION

* Copy config/orm.php.example to config/orm.php
* Copy config/security.php.example to config.security.php
* Web Server must point to public_html/
* Web Server must allow .htaccess to RewriteEngine

## TEST:

tests have not been implemented yet.

## Project structure

Flow of execution should be read from public_html/index.php onward. All request are redirected to this file by .htaccess.


## Further documentation

This project is built using the following libraries:
  * Slim framework: www.slimframework.com
  * Paris ORM: http://j4mie.github.com/idiormandparis/
