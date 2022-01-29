<?php

class StatusModel extends Model{

    public function set($status_data = array()){
        
        foreach($status_data as $key => $value){
            $$key = $value; //When $$ is assigned it turns into a dynamic variable
        }

        $this->query = ("REPLACE INTO status(status_id, status) VALUES('$status_id','$status')");

        $this->set_query(); //Execute the query in the Model
    }

    public function get($status_id = ''){

        $this->query = ($status_id != '') 
        ?"SELECT * FROM status WHERE status_id = $status_id"
        :"SELECT * FROM status";
        
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

    public function del($status_id = ''){
        if(!isset($status_id)){
            echo "No hay argumento pasado como parametro para realizar la eliminación del dato";
        }else{
            $this->query = "DELETE FROM status WHERE status_id = '$status_id'";
            $this->set_query();
        }
    }

    public function __destruct()
    {
        /* unset($this); */
    }


}


?>