# Docker: PHP & MySQL & PHPMyAdmin

Instala rápidamente un ambiente de desarrollo local para trabajar con [PHP](https://www.php.net/) , [PHP My Admin](https://www.phpmyadmin.net/) y [MySQL](https://www.mysql.com/) utilizando [Docker](https://www.docker.com).

Utilizar _Docker_ es sencillo, pero existen tantas imágenes, versiones y formas para crear los contenedores que hacen tediosa esta tarea. Este proyecto ofrece una instalación rápida, con versiones estandar y con la mínima cantidad de modificaciones a las imágenes de Docker.

Viene configurado con `PHP 8.2` y `MySQL 8.0`

## Requerimientos

- [Docker Desktop](https://www.docker.com/products/docker-desktop)

## Configurar el ambiente de desarrollo

Puedes utilizar la configuración por defecto, pero en ocasiones es recomendable modificar la configuración para que sea igual al servidor de producción. La configuración se ubica en el archivo `.env` con las siguientes opciones:

- `SERVER_PORT_WEB` puerto para servidor web.
- `SERVER_PORT_PHPMYADMIN` puerto para servidor phpmyadmin.
- `MYSQL_VERSION` versión de MySQL([Versiones disponibles de MySQL](https://hub.docker.com/_/mysql)).
- `MYSQL_USER` nombre de usuario para conectarse a MySQL.
- `MYSQL_PASSWORD` clave de acceso para conectarse a MySQL.
- `MYSQL_ROOT_PASSWORD` clave de acceso para conectarse a MySQL como root.
- `MYSQL_DATABASE` nombre de la base de datos que se crea por defecto.

## Instalar el ambiente de desarrollo

La instalación se hace en línea de comandos:

```zsh
docker-compose up -d
```

Puedes verificar la instalación accediendo a: [http://localhost/info.php](http://localhost/info.php)

## Comandos disponibles

Una vez instalado, se pueden utilizar los siguiente comandos:

```zsh
docker-compose start    # Iniciar el ambiente de desarrollo
docker-compose stop     # Detener el ambiente de desarrollo
docker-compose down     # Detener y eliminar el ambiente de desarrollo.
```

## Estructura de Archivos

- `/src/` carpeta para los archivos PHP del proyecto.

## Accesos

### Web

- http://localhost/

### Base de datos

Existen dos dominios para conectarse a base de datos.

- `mysql`: para conexión desde los archivos PHP.
- `localhost`: para conexiones externas al contenedor.

Las credenciales por defecto para la conexión son:

|  Usuario   | Clave  | Base de datos |
| :--------: | :----: | :-----------: |
| user_admin | dbpass |   codekaDB    |
