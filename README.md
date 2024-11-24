# Generador de amigo navideño (Intercambio de regalos entre personas)

## Propósito

En las fiestas decembrinas, un grupo de trabajo o escolar comienza con el intercambio de regalos para reforzar la convivencia entre las compañeras y compañeros. Con este pequeño sistema, se agiliza y se facilita la administración del intercambio. Hay una lista en donde me base para hacer este proyecto.

- Repositorio original [Github](https://github.com/javierpomachagua/laraveleando-amigo-secreto).
- Autor [Laraveleando](https://laraveleando.dev/).
- Video [Youtube](https://www.youtube.com/watch?v=j769GkLNucE).

## Lenguajes y frameworks utilizados
- PHP
- Laravel
- Livewire
- HTML
- Tailwind
- Pest

## Pruebas de código con PEST

Pasaron todas la pruebas del test para usar el programa. Se uso el programa PEST.
![pest_test](docs\img\pest-test.png "Prueba test")

## Instalación

- Descargar el proyecto en Github con el botón "Download".
- Una vez descargado, dentro de la misma carpeta, instalar "Composer" para las dependencias a usar del programa `composer install`.
- Copiar y pegar el archivo de ejemplo de "Variables de entorno (ENV)".
- Generar llave única para poder usar la aplicación `php artisan key:generate`.

## Instrucciones de uso

- Lo primero que aparece en la página son 5 cuadros para anotar el nombre, si deseas agregar más, dar clic en "Agregar jugador". Si deseas remover un jugador, dar clic en la "X".
- Ya que tengas lista las personas que participaran en el intercambio, dar clic "Empezar juego" y se mandara a una nueva ventana donde le das clic en "Copiar enlace", ya sea para abrirlo o para enviarlo por WhatsApp.
- Después de hacer clic en el enlace, te dirige a otra pagina donde ahi aparecerá la persona que le vas a dar un regalo, pero solo se puede ver una vez, porque si refrescas la misma página, el sistema te lo toma que ya lo viste.

## Demostración del programa
![uso_del_programa](docs\img\uso-del-programa.gif "Demo programa")

## Aclaración
Este proyecto es utilizado para propósitos personales y educativos, respetando la visión y el código del autor del proyecto original, por lo que no se debe de estar a la venta.

- Licencia de Laravel [Laravel](docs\LARAVEL.md).