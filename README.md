# TakeCharge Website Documentations
![logo here](./imgs/logo.png)

<!-- add build pass/fail banners here -->

## Specification
  This project builds the TakeCharge website complete with: php-server, mySql, php my admin, and wordpress.
  The website is marketing toward schools and students.

## Installation instructions
  Install [make](https://www.gnu.org/software/make/), [docker](https://docs.docker.com/get-docker/) and [docker-compose](https://docs.docker.com/compose/install/).
  This website may not run on all architectures (depends on what the docker images run on), This needs more research.
## Operating instructions

### Run Website
```bash
$ cd lamps
$ make up
```
By default the containers opened are:
| container  | url                                                         |
| ---------- | ----------------------------------------------------------- |
| wordpress  | [localhost:8000/wp-admin/](http://localhost:80/wp-admin/)   |
| phpMyAdmin | [localhost:8080](http://localhost:8080)                     |
| mySql      | `use phpMyAdmin for web access`                             |
<!-- | php-apache | [localhost:80](http://localhost:80)                         | -->

	xdg-open http://localhost:8000/wp-admin/

### Backup Database
```bash
$ @TODO this
```

### Restore Database Backup
```bash
$ @TODO this
```

## Configuration instructions

### Change Environment Variables
  Environment variables are stored in lamps/env
  The changeable variables are:
  * ROOT\_PWD
  * USER\_NAME
  * USER\_PWD
  * WORDPRESS\_USER
  * WORDPRESS\_PWD
  * PHP\_HTTP\_PORT
  * PHP\_HTTPS\_PORT
  * WORDPRESS\_PORT
  * PHP\_MY\_ADMIN\_PORT

## File Structure
@TODO decide and finalize how I want the website layed out.

## Known bugs
None yet!!

## Credits and acknowledgements

| Person              | Contribution   | 
|:-------------------:|:--------------:|
| Matthew I. Bartlett | Main Developer |
| Alli Singer         | Main Designer  |
<!-- | Keven Clark         | Manager        | -->

| Software         | Use                                                      | Licence     |
| ---------------- | -------------------------------------------------------- | ----------- |
| Docker           | Create containers that run code                          | Apache v2.0 |
| phpMyAdmin image | [docker file](https://hub.docker.com/_/phpmyadmin)       | GPL3        |
| Wordpress image  | [docker file](https://hub.docker.com/_/wordpress)        | @TODO       |
| MySql image      | [docker file](https://hub.docker.com/_/mysql)            | [Custom](https://www.mysql.com/about/legal/) |
| GNU make         | [make file support ](https://www.gnu.org/software/make/) | GPL3        |
| PHP              | PHP language support                                     | [Custom](https://en.wikipedia.org/wiki/PHP_License) |
