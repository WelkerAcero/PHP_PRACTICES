<?php 

/* $$a = 75;
echo "El nombre de \$\$a es \${$a}\n";

echo "$a, ${$a}"; */



/* function create($status_data = array()){
    foreach($status_data as $key => $value){
        $$key = $value; //When $$ is assigned it turns into a dynamic variable
    }

    echo "$status_id". " " . "$status";

}

$data = array(
    'status_id' => 0,
    'status' => "Active"
);

create($data); */


/*  You may think of using variable variables to dynamically 
    generate variables from an array, by doing something similar to: -
*/

/* foreach ($array as $key => $value)
{
  $$key= $value;
} */



/* This however would be reinventing the wheel when you can simply use: */

//extract( $array, EXTR_OVERWRITE);


/* 
Note that this will overwrite the contents of variables that already exist.

Extract has useful functionality to prevent this, or you may group the variables by using prefixes too, so you could use: -

EXTR_PREFIX_ALL */


$array = array(
    "one" => "First Value",
    "two" => "2nd Value",
    "three" => "8"
);

extract( $array, EXTR_PREFIX_ALL, "my_prefix_");

/* This would create variables: -
$my_prefix_one
$my_prefix_two
$my_prefix_three */

/* containing: -
"First Value", "2nd Value" and "8" respectively */



?>