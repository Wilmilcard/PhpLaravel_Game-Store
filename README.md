<p align="center">
    <h3 align="center">Juan David Leon Barrera</h3>
	<p align="center">
		<img src="https://img.shields.io/badge/Laravel-FF2D20?logo=laravel&logoColor=white" alt="template repository">
        <img src="https://img.shields.io/static/v1?label=proyecto&message=Api Rest&color=white" alt="v1.0.0">
		<img src="https://img.shields.io/static/v1?label=version&message=1.0.0&color=blue" alt="v1.0.0">
		<img src="https://img.shields.io/static/v1?label=licencia&message=no%20tiene&color=green" alt="no tiene">
	</p>
    <p align="center">
        <a href="https://nevergate.com.co/"><img src="https://nevergate.com.co/otros/portafolio/images/logo.png" width="200"></a>
    </p>
</p>

# 🚩 Objetivo

Este proyecto esta desarrollado en php laravel 8; con el fin de demostrar habilidades en el manejo del framework, y para practicar y mejorar los conocimientos aprendidos con ayuda de la documentacion oficial; para ello se planteo un ejercicio con el fin de darle solución desde el BackEnd.

Tambien existe una misma verision del api desarrollada en php Laravel 8. Asi que si tambien se esta interesad@ en revisar la otra version, puede hacerlo desde este enlace:

**[Version C# CodeFirst](https://github.com/Wilmilcard/GameStore.API)**

- **[Web del desarrollador](https://nevergate.com.co/)**
- **[Link de la documentación](https://manuais.iessanclemente.net/index.php/LARAVEL_Framework_-_Tutorial_01_-_Creaci%C3%B3n_de_API_RESTful_(actualizado))**

# 📄 Descripción del proyecto

## ✔ Reto

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

## ❌ Supuestos y restricciones

- No se necesita el manejo de usuarios, login y autenticacion
- Es importante poder ver el proceso de actualizaciones y uso del repositorio GIT a medida que desarrolla el mini proyecto
- Puede adicionar componentes que necesite para lograr el objetivo, solo que debe documentar la razón de usarlo y en maximiza su uso.

# 🔥 Ejecucion de proyecto

Para que el proyecto funcione correctamente se debe de tener instalado:

- IDE de desarrollo (Visual Code)
- XAMPP
- Composer
- Postman
- Node js

Una vez se tengan las herramientas instaladas:

1. Clonar el repositorio
2. Encender XAMPP (el apache y el MySql)
3. Entrar al MySql y crear la base de datos con nombre: **matrix_tech**
    - 💡 Si se desea cambiar el nombre de la base de datos hay que ir al archivo `.env` y dentro en la *linea 13* en la propiedad **DB_DATABASE** darle el nombre de la base de datos que se desea agregar
    - Crear el nombre de la base de datos en MySql
4. Abrir la consola y ejecutar el comando `php artisan migrate:refresh --seed`
5. Luego ejecutar el comando `php artisan serve`
6. Ya estara corriendo la aplicacion desde la ruta estandar http://127.0.0.1:8000/api/alquiler

# 🧪 API

- Es posible consumir el API por medio de GET ya que para no generar trafico de mas en mi Host elimine los otros metodos. dejare el listado de url en las que pueden traer información
    - Alquileres
        - Traer todos los alquiler: https://api-game-store.nevergate.com.co/api/alquiler
        - Traer solo un alquiler por Id: https://api-game-store.nevergate.com.co/api/alquiler/{id} donde el id es un numero
    - Juegos
        - Traer todos los juegos: https://api-game-store.nevergate.com.co/api/juego
        - Traer solo un juego por Id: https://api-game-store.nevergate.com.co/api/juego/{id} donde el id es un numero
    - Clientes
        - Traer todos los clientes: https://api-game-store.nevergate.com.co/api/cliente
        - Traer solo un cliente por Nit: https://api-game-store.nevergate.com.co/api/cliente/{nit} donde el id es un numero de identificación
    - Director
        - Traer todos los directores: https://api-game-store.nevergate.com.co/api/director
        - Traer solo un director por Id: https://api-game-store.nevergate.com.co/api/director/{id} donde el id es un numero
    - Plataforma
        - Traer todos los plataformas: https://api-game-store.nevergate.com.co/api/plataforma
        - Traer solo un plataforma por Id: https://api-game-store.nevergate.com.co/api/plataforma/{id} donde el id es un numero
    - Marca
        - Traer todos los marcas: https://api-game-store.nevergate.com.co/api/marca
        - Traer solo un marca por Id: https://api-game-store.nevergate.com.co/api/marca/{id} donde el id es un numero
    - Protagonista
        - Traer todos los marcas: https://api-game-store.nevergate.com.co/api/protagonista
        - Traer solo un marca por Id: https://api-game-store.nevergate.com.co/api/protagonista/{id} donde el id es un numero
    - Estado
        - Traer todos los estados: https://api-game-store.nevergate.com.co/api/estado
        - Traer solo un estado por Id: https://api-game-store.nevergate.com.co/api/estado/{id} donde el id es un numero
    
Esta API puede ir mejorando y cambiando, pero mientras tanto esta es una muestra real de lo que puede hacer 🛴
    
