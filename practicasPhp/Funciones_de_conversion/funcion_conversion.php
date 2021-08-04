<?php 

#Funciones de conversión

htmlentities($cadena);
#convierte los caracteres aplicables a entidades HTML.

/*Esta función debe utilizarse siempre
que una cadena de texto deba ser
impresa en un documento HTML y se
desconozca su contenido, para
prevenir que código fuente no deseado,
sea ejecutado.*/

$cadena = "Las negritas se escriben entre los tags <b> y </b> mientras que el
salto de linea se representa con <br/>";
$cadena = htmlentities($cadena);
echo $cadena,"\n";


#Su opuesto es:
html_entity_decode($cadena);
$cadena = "Las negritas se escriben entre los tags &lt;b&gt; y &lt;/b&gt;
mientras que el salto de linea se representa con &lt;br/&gt;";
$cadena = html_entity_decode($cadena);
echo $cadena;

/*Cuando solo se deseen convertir a entidades HTML, caracteres
especiales tales como & " ' < >, se utilizará la función*/

htmlspecialchars($cadena); #siendo el opuesto de esta última,
#La función 
htmlspecialchars_decode($cadena);

#====================================================================================================




?>