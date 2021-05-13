links_message= \
"Links ready: \n\
site       : http://localhost:80 \n\
wordpress  : http://localhost:80/wp-admin/ \n\
phpmyadmin : http://localhost:8080"
		

all: 

.PHONY: up build down wordpress
	
build: 
	docker-compose --env-file env build 

up: 
	docker-compose --env-file env up -d
	@echo $(links_message)

down:
	docker-compose --env-file env down 

wordpress:
	xdg-open http://localhost:80/wp-admin/

# -- USE PHP MY ADMIN TO BACK UP DATABASE --
#
# backup_file = backup.tar.gz
# .PHONY: backup.tar.gz restore
# 
# backup.tar.gz: 
# 
# restore: 
# 	@echo "Restoreing from $(backup_file) if this is wrong set the \"backup_file\" variabel when runing the command"
#
# 	LOOKS AT THIS @TODO
#
# 	# Backup
#		docker exec CONTAINER /usr/bin/mysqldump -u root --password=root DATABASE > backup.sql
#
#		# Restore
#		cat backup.sql | docker exec -i CONTAINER /usr/bin/mysql -u root --password=root DATABASE

