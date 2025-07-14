## Descripción
Aplicación desarrollada en Laravel

## Instalación

1. Clonar el repositorio:

git clone https://github.com/JonathanHM0/LaravelEvaluationProject.git

2. Instalar dependencias de PHP con Composer:
composer install

3. Copiar el archivo de entorno y configurarlo:
cp .env.example .env
Editar .env y configurar los datos de la base de datos:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_de_tu_bd
DB_USERNAME=usuario
DB_PASSWORD=contraseña

4. Generar la clave de la aplicación:
php artisan key:generate

5.Importar la base de datos:
Usar el archivo SQL ubicado en database/laravel_evaluation_db.sql

6.Ejecutar el servidor de desarrollo.
php artisan serve

7.Abrir la aplicacion del navegador
http://127.0.0.1:8000

Registrate utilizando:
http://127.0.0.1:8000/register
