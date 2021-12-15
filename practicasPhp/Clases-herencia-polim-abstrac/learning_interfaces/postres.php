<?php

interface Ingredientes
{

    //Methods of an interface must be PUBLIC 
    public function establecer_ingredientes($lista_ingredientes);
    public function obtener_ingredientes();
}

interface Receta
{

    //Methods of an interface must be PUBLIC  
    public function establecer_receta($pasos);

    public function obtener_receta();

}


class Postres implements Ingredientes, Receta
{
    private $ingredientes;
    private $receta;

    public function establecer_ingredientes($lista_ingredientes)
    {
        $this->ingredientes = $lista_ingredientes;

    }

    public function obtener_ingredientes()
    {
        $html = '<ul>';
        foreach ($this->ingredientes as $valores_ingredientes) {
            $html .= '<li>' . $valores_ingredientes . '</li>';
        }
        $html .= '</ul>';
        return print($html); 
    }

    public function establecer_receta($pasos)
    {
        $this->receta = explode(".",$pasos);
    }

    public function obtener_receta()
    {
        $html = '<ul>';
        foreach($this->receta as $valores_receta){
            $html .= '<li>'. $valores_receta . '.</li>';
        }
        $html .= '</ul>';
        return print($html);
    }
}

echo "<h1>Postres</h1>";

echo "<h2>Hot Cakes</h2>";

$hot_cake = new Postres();

echo "<h3>Ingredientes</h3>";
$ingredientes = array(
    "1) 1/2 tazas Harina",
    "2) 1/2 cucharadita Sal",
    "3) 1 cucharada Polvo para hornear",
    "4) 1/2 cucharadita Bicarbonato de Sodio",
    "5) 2 cucharadas de Azúcar",
    "6) 2 Huevos 1/2 taza Leche",
    "7) 1 cucharada Esencia de vainilla",
    "8) 3 cucharadas Mantequilla fundida",
    "9) 200 gr Mermelada de fresa en rebanadas",
    "10) 1 Plátano en rodajas",
    "11) 1/2 taza nueces picadas Miel de maple al gusto"
);

$hot_cake->establecer_ingredientes($ingredientes);
$hot_cake->obtener_ingredientes();

echo "<br><h2>Receta:</h2>";

$hot_cake->establecer_receta("Mezcla en un tazón la harina, 
la sal, el polvo para hornear, el bicarbonato y el azúcar. 
Reserva.Mezcla en otro tazón los huevos, la leche, 
la vainilla y una cucharada de mantequilla.Vierte 
ésta mezcla en los ingredientes secos e integra con 
un batidor globo hasta deshacer los grumos.Reserva 
en refrigeración hasta el momento de usar.Funde el 
resto de la mantequilla en una sartén con antiadherente.
Vierte con un cucharón la mezcla de hotcakes.Cocina
a fuego medio hasta que se formen burbujas y voltea.
Sirve y acomoda la fruta, las nueces y vierte la miel 
de maple al gusto.Licúa los ingredientes de los pasos 
1 y 2 para obtener una mezcla más homogenea.Añade más 
leche si la mezcla queda demasiado espesaCocina primero 
todos los hotcakes y después agrega la mantequilla, la miel 
y las frutas");

$hot_cake->obtener_receta();