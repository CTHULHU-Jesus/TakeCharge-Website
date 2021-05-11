# TakeCharge Website Documentations
![logo here](./imgs/logo.png)

<!-- add build pass/fail banners here -->

## Specification
  This project builds the TakeCharge website complete with: php-server, mySql, php my admin, and wordpress.
  The website is marketing toward schools and students.

## Installation instructions
  Install [docker](https://docs.docker.com/get-docker/) and [docker-compose](https://docs.docker.com/compose/install/).
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
| php-apache | [localhost:80](http://localhost:80)                         |
| wordpress  | [localhost:8000/wp-admin/](http://localhost:8000/wp-admin/) |
| phpMyAdmin | [localhost:8080](http://localhost:8080)                     |
| mySql      | `use phpMyAdmin for web access`                             |

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

| Persson             | Position                                                |
|:-------------------:|:-------------------------------------------------------:|
| Matthew I. Bartlett | Heaven Defying God Killing Sky Squid of Great Calamines |
