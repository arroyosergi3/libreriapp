Proyecto LibreriApp

LibreriApp es una aplicación web desarrollada con el framework Laravel que permite gestionar una biblioteca de libros.

Requisitos previos

Antes de comenzar, asegúrese de tener instalado:

PHP versión 7.4 o superior.

Composer para la gestión de dependencias de PHP.

Node.js y npm para la gestión de paquetes de JavaScript.

MySQL u otro sistema de gestión de bases de datos compatible.

Instalación

Clonar el repositorio:

git clone https://github.com/arroyosergi3/libreriapp.git

Navegar al directorio del proyecto:

cd libreriapp

Instalar las dependencias de PHP con Composer:

composer install

Instalar las dependencias de JavaScript con npm:

npm install

Configurar el archivo de entorno:

Copie el archivo .env.example y renómbrelo a .env. Luego, configure las variables de entorno, especialmente las relacionadas con la conexión a la base de datos.

Generar la clave de la aplicación:

php artisan key:generate

Ejecutar las migraciones y sembrar la base de datos:

php artisan migrate --seed

Ejecución

Para iniciar el servidor de desarrollo de Laravel, ejecute:

php artisan serve

Una vez iniciado, la aplicación estará disponible en http://localhost:8000/.

Pruebas

Para ejecutar las pruebas del proyecto, utilice:

php artisan test

Estructura del Proyecto

La estructura básica del proyecto es la siguiente:

libreriapp/
├── app/
│   ├── Console/
│   ├── Exceptions/
│   ├── Http/
│   │   ├── Controllers/
│   │   ├── Middleware/
│   │   └── Requests/
│   ├── Models/
│   └── Providers/
├── bootstrap/
├── config/
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
├── public/
├── resources/
│   ├── css/
│   ├── js/
│   ├── lang/
│   └── views/
├── routes/
├── storage/
├── tests/
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── package.json
├── phpunit.xml
└── README.md

app/: Contiene el núcleo de la aplicación, incluyendo modelos, controladores y middleware.

config/: Archivos de configuración de la aplicación.

database/: Migraciones, fábricas y seeders para la base de datos.

resources/: Recursos como vistas, archivos CSS y JavaScript.

routes/: Definiciones de rutas de la aplicación.

tests/: Pruebas unitarias y funcionales.

Contribuciones

Las contribuciones son bienvenidas. Para ello:

Haga un fork del proyecto.

Cree una nueva rama (git checkout -b feature/nueva-funcionalidad).

Realice sus cambios y haga commit de los mismos (git commit -am 'Añadir nueva funcionalidad').

Empuje su rama al repositorio remoto (git push origin feature/nueva-funcionalidad).

Cree un Pull Request.

Licencia

Este proyecto se distribuye bajo la licencia MIT. Consulte el archivo LICENSE para más detalles.

