PROJECT_NAME = inception
DATA_PATH = /Users/azarsarikhani/Desktop/Inception/srcs/data

all: up 

add_servername:
	if ! grep -q "asarikha.42.fr" /etc/hosts; then \
		sudo echo "127.0.0.1 asarikha.42.fr" >> /etc/hosts; \
	fi
	if ! grep -q "www.asarikha.42.fr" /etc/hosts; then \
		sudo echo "127.0.0.1    www.asarikha.42.fr" >> /etc/hosts; \
	fi

up: create_directories
	docker compose -f srcs/docker-compose.yml  -p ${PROJECT_NAME} up --build --detach

stop:
	docker compose -f srcs/docker-compose.yml  -p ${PROJECT_NAME} stop

clean: stop
	docker system prune -a --force --volumes

fclean: clean rm_directories rm_volumes

re: fclean all 

create_directories:
	mkdir -p ${DATA_PATH}/mariadb-data\
		${DATA_PATH}/wordpress-data

rm_directories:
	rm -rf ${DATA_PATH}/mariadb-data\
		${DATA_PATH}/wordpress-data

rm_volumes:
	docker volume rm --force wordpress-data
	docker volume rm --force mariadb-data

.PHONY : clean fclean all re up down rm_volumes add_servername