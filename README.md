## Simulador de exámenes de redes - UTN FRRO

Simulador de exámenes multiple choice para la materia redes - UTN FRRO.

## Instalación

En caso de querer correrlo localmente, están incluídos los seeders de Laravel para poder usar con cualquier motor de bases de datos. Correr los siguientes comandos:

```bash
composer install
npm install
php artisan migrate:fresh --seed
php artisan serve
```

Nota: se debe crear el archivo .env antes y poner información correcta tomando como ejemplo el archivo .env.example primero.

Tambiém se incluye un archivo Dockerfile en caso de querer correr el proyecto utilizando containers. Para correrlo utilizando Docker, es necesario ejecutar los siguientes comandos

```bash
docker build -t laravel-docker-aws .
docker run -it --rm -p 8001:80 laravel-docker-aws
```

## Contribuir
Pull requests are welcome.

## Licencia

[MIT license](https://opensource.org/licenses/MIT).
