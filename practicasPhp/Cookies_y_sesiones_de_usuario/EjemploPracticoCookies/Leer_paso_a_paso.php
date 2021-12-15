<?php

/* Un ejemplo práctico con Cookies
Vamos a crear un script sencillo, que solicite al usuario, el
idioma en el que desea leer un artículo y vamos a guardar su
preferencia en una cookie, a fin de que cada vez que visite
nuestro sitio Web, podamos decidir en qué idioma le
mostraremos el artículo. */

/*

Paso a paso:
1. Crear una carpeta llamada sitio-web-multi-idioma
2. Dentro de ella, vamos a crear otra carpeta llamda
paginas
3. Dentro de la carpeta paginas, vamos a crear 2 archivos:
hola_en.html
hola_es.html
4. En el archivo hola_en.html vamos a escribir cualquier
texto en inglés, y en el archivo hola_es.html, cualquier
texto en español
Ahora, dentro de la carpeta sitio-web-multi-idioma
vamos a crear los siguientes archivos:
template.html 


Archivo template.html
Será nuestra vista HTML, en la cual, mostraremos un formulario
que permita al usuario elegir el idioma en el cual ver la página.


Archivo funciones.php
En este archivo defineremos todas las funciones necesarias
para recibir los datos del formulario, crear la cookie, renderizar
el HTML y mostrar la página.


Archivo cambiar_idioma.php
A este archivo es enviado el formulario y es quien se encarga
de llamar a la función que se ocupa de modificar o crear la
cookie con la elección del idioma del usuario.


Archivo index.php
Este archivo, requerirá también de funciones.php. Será el
archivo principal, que se encargue de llamar a la función
mostrar_pagina().
*/




?>