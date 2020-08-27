# edufami_test

BackEnd Laravel <br />
Base de datos Postgres <br />
FrontEnd Vuejs

La aplicación se despliega con docker compose. Se tienen cuatro dockers; uno para la base de datos, otro con nginx, otro para laravel y php y el otro para la aplicación front.


### Run BackEnd App
`docker-compose up `

Si no esta como administrador en linux

`sudo docker-compose up`

### Load initial data

Para cargar los datos iniciales, una vez esta corriendo docker debemos entrar al contenedor con la aplicacion. Para esto abrimos otra terminal o linea de comandos y corremos

`docker exec -i -t edufami-test-php-fpm bash`

Si necesita permisos de superusuario en linux se debe correr

`sudo docker exec -i -t edufami-test-php-fpm bash`

Estando dentro del contenedor cargamos los datos base en la base de datos corriendo

`php artisan migrate:refresh --seed`

### Rest Endpoints

Habiendo corrido los anteriores pasos ya tenemos la base de datos instalada con algunos datos iniciales y tenemos los endpoints con todas las funcionalidades requeridas.

Agrego una coleccion de postman en la carpeta assets con llamados a todos los endpoints

`assets/postman_collection`

No olvidar que para que funcionen los endpoints se debe haber ejecutado todos los pasos anteriores.

Los endpoints se pueden ver enrutados en el archivo de laravel `app/routes/web.php`

```
Route::get('/hotels', 'HotelsController@list');
Route::post('/hotels', 'HotelsController@store');
Route::post('/hotels/update', 'HotelsController@update');
Route::post('/hotels/delete', 'HotelsController@delete');
Route::get('/rooms/{hotel_id}', 'RoomsController@list');
Route::post('/rooms', 'RoomsController@store');
Route::post('/rooms/update', 'RoomsController@update');
Route::post('/rooms/delete', 'RoomsController@delete');
```

### Docker utilities

Algunos comandos utiles con docker

* Detener todos los containers

`sudo docker stop $(sudo docker ps -a -q)`

*  Eliminar todos los containers

`sudo docker rm $(sudo docker ps -a -q)`

* Eliminar todas las imagenes

`sudo docker rmi --force $(sudo docker images -q)`

* Ingresar a contenedor de php edufami-test-php-fpm

`sudo docker exec -i -t edufami-test-php-fpm bash`