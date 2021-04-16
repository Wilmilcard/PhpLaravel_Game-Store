<p align="center">
<a href="https://nevergate.com.co/"><img src="https://nevergate.com.co/portafolio/images/logo.png" width="200"></a>
</p>


# Objetivo

Este proyecto esta desarrollado en php laravel 8 con el fin de demostrar habilidades en el manejo del framework, y para practicar y mejorar los conocimientos aprendidos con ayuda de la documentacion oficial; para ello se planteo un ejercicio con el fin de darle solución desde el BackEnd.

- **[Web del desarrollador](https://nevergate.com.co/)**
- **[Link de la documentación](https://manuais.iessanclemente.net/index.php/LARAVEL_Framework_-_Tutorial_01_-_Creaci%C3%B3n_de_API_RESTful_(actualizado))**

# Descripción del proyecto

## Reto

Usted ha sido contratado para gestionar todo el proceso básico de venta de una tienda de video juegos, por lo que el dueño tiene la necesidad clara de:
- Almacenar la información básica de los clientes para poder conocer quien tiene alquilado un juego y poder reclamarlo cuando se venza el periodo de alquiler
- Poder definir el precio de los alquileres que cambian periódicamente por título de juego
- Conocer el cliente más frecuente
- Conocer el título de juego más rentado
- Permitir registrar todos los alquileres hechos y generar prueba de compra
- Poder consultar las ventas del día
- Poder consultar por director de Juego
- Poder consultar por protagonista del juego
- Poder consultar por productor y&o marca del juego
- Poder saber cual juego es el menos rentado por rangos de edad de 10 años en 10 años
- Tener registrado de cada titulo, nombre, año, protagonistas, director, productor y tecnología (Xbox, PlayStation, Nintendo,PC,…)
- El dueño quiere exponer un servicio web para que cualquier cliente consulte su balance, fecha de entraga  y títulos alquilados

## Supuestos y restricciones

- No se necesita el manejo de usuarios, login y autenticacion
- Es importante poder ver el proceso de actualizaciones y uso del repositorio GIT a medida que desarrolla el mini proyecto
- Puede adicionar componentes que necesite para lograr el objetivo, solo que debe documentar la razón de usarlo y en maximiza su uso.

# Ejecucion de proyecto

Para que el proyecto funcione correctamente se debe de tener instalado:

1. IDE de desarrollo (Visual Code)
2. XAMPP
3. Composer
4. Postman
5. Node js

Una vez se tengan las herraamientas instaladas:

1. Clonar el repositorio
2. Encender XAMPP (el apache y el MySql)
3. Entrar al MySql y crear la base de datos con nombre: **matrix_tech**
    - Si se desea cambiar el nombre de la base de datos hay que ir al archivo `.env` y dentro en la *linea 13* en la propiedad **DB_DATABASE** darle el nombre de la base de datos que se desea agregar
    - Crear el nombre de la base de datos en MySql
4. Abrir la consola y ejecutar el comando `php artisan migrate:refresh --seed`
5. Luego ejecutar el comando `php artisan serve`
6. Ya estara corriendo la aplicacion

# Notas

- La conexion a la base de datos esta localmente, una vez se estabilice el codigo dejare el link del repositorio para consumir el API
