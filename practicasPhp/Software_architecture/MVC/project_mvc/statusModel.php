<?php
require_once('model.php');

class StatusModel extends Model{
    public $status_id;
    public $status;

    
    public function __construct()
    {
        $this->db_name = 'mexflix';
    }

    public function create($status_data = array()){
        foreach($status_data as $key => $value){
            $$key = $value; //When $$ is assigned it turns into a dynamic variable
        }

        $this->query = ("INSERT INTO status(status_id, status) VALUES('$status_id','$status')");

        $this->set_query(); //Execute the query in the Model
    }

    public function read($status_id = ''){

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

    public function update($status_data = array()){

        foreach($status_data as $key => $value){
            $$key = $value; //When $$ is assigned it turns into a dynamic variable
        }

        $this->query = ("UPDATE status SET status_id = $status_id, status = '$status' WHERE status_id = $status_id");

        $this->set_query(); //Execute the query in the Model
    }

    public function delete($status_id = ''){
        if(!isset($status_id)){
            echo "No hay argumento pasado como parametro para realizar la eliminación del dato";
        }else{
            $this->query = "DELETE FROM status WHERE status_id = '$status_id'";
            $this->set_query();
        }
    }

    public function __destruct()
    {
        unset($GLOBALS["{$this}"]);
    }


}


?>