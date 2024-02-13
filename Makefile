PROJECT_NAME = inception
DATA_PATH = /home/asarikha/data

all: up 

up: create_directories
	docker compose -f srcs/docker-compose.yml  -p ${PROJECT_NAME} up --build

down:
	docker compose -f srcs/docker-compose.yml down

clean:
	docker compose -f srcs/docker-compose.yml  -p ${PROJECT_NAME} stop
	docker system prune -a --force --volumes

fclean: clean rm_directories

re: fclean all 

create_directories:
	mkdir -p ${DATA_PATH}/mariadb-data\
		${DATA_PATH}/wordpress-data

rm_directories:
	rm -rf ${DATA_PATH}/mariadb-data\
		${DATA_PATH}/wordpress-data

rm_volumes:
	docker volume rm wordpress-data
	docker volume rm mariadb-data

.PHONY : clean fclean all re up down rm_volumes