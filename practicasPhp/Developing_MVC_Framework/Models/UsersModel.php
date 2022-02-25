<?php

class UsersModel extends Model{

    public function set($user_data = array())
    {
        foreach ($user_data as $key => $value) {
            $$key = $value; //When $$ is assigned it turns into a dynamic variable
        }

  /*       $Fecha = new DateTime();
        $img = ($profileImg != "") ? $Fecha->getTimestamp() . "_" . $_FILES["profileImg"]["name"] : "imagen.png";
        
        $tmpFoto = $_FILES["profileImg"]["tmp_name"];

        if ($tmpFoto != "") {
            move_uploaded_file($tmpFoto, "./public/img/" . $img);
        } */


        $this->query = "REPLACE INTO users(user, email, name, birthday, pass, role) 
                        VALUES('$user','$email','$name','$birthday', MD5('$pass'), '$role')";

        $this->set_query(); //Execute the query in the Model
    }

    public function get($user = '')
    {

        $this->query = ($user != '')
            ? "SELECT * FROM users WHERE user = '$user'"
            : "SELECT * FROM users";

        $this->get_query(); //$this->get_query()  A protected function from the father class
        //var_dump($this->rows);

        $num_rows = count($this->rows);

        $data = array();

        foreach ($this->rows as $field => $value) {
            array_push($data, $value);
            //or also $data[$field] = $value;

        }

        return $data;
    }

    public function del($user = '')
    {
        if (!isset($user)) {
            echo "No hay argumento pasado como parametro para realizar la eliminación del dato";
        } else {
            $this->query = "DELETE FROM users WHERE user = '$user'";
            $this->set_query();
        }
    }

    public function validate_user($user, $pass){
        $this->query = "SELECT * FROM users WHERE user = '$user' AND pass = MD5('$pass')";
        $this->get_query();

        $data = array();

        foreach ($this->rows as $field => $value) {
            array_push($data, $value); 
            //or also $data[$field] = $value;

        }

        return $data;
    }


    public function update_session(){

    }
    

    public function __destruct()
    {
        /* unset($this); */
    }
}
?>