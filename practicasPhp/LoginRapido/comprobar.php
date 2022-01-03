<?php
$message = "";

$valorName = 'welker';
$valorPassword = 'WelkerAcero123';

$valuesStored = array(
    "user_name"=> 'welker',
    "user_password" => 'WelkerAcero123',
);

function verify($userName, $password, $storedData = array())
{
    foreach($storedData as $field => $value){
        $$field = $value;
    }

    if($userName == $user_name){
        $message = "user name validated";
    }

  /*if($password == $user_password){
        $$message = "password validated";
    } */

    if(($password == $user_password)){
        $$message = "password validated\n";
    }

    echo "$message and {$$message}\n";
}

verify($valorName, $valorPassword, $valuesStored);

//========================OTRO PROCESO===============================//
echo "OTRO PROCESO\n";
$user_input =  '12+#æ345';

$pass = urlencode($user_input);
echo "URLENCODE = $pass \n";

$pass_crypt = crypt($pass, "$\y$");
echo "CRYPT = $pass_crypt \n";

if ($pass_crypt == crypt($pass, $pass_crypt)) {
  echo "Success! valid password";
} else {
  echo "Invalid password";
}
