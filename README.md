# edufami_test

#### Run BackEnd App
docker-compose up 

Si no esta como administrador en linux
sudo docker-compose up


#### Docker utilities

Algunos comandos utiles con docker

* Detener todos los containers

`sudo docker stop $(sudo docker ps -a -q)`

*  Eliminar todos los containers

`sudo docker rm $(sudo docker ps -a -q)`

* Eliminar todas las imagenes

`sudo docker rmi --force $(sudo docker images -q)`

* Ingresar a contenedor de php edufami-test-php-fpm

`sudo docker exec -i -t edufami-test-php-fpm bash`