<?php
require_once("statusModel.php");

class StatusController{

    private $model; //this will invoke or initialize our class StatusModel

    public function __contruct(){
        $this->model = new StatusModel();//Controller's archive is calling StatusModel
                                        // this part create the instance
    }

    public function create($status_data = array()){
        return $this->model->create($status_data);
    }

    public function read($status_id = ''){
        return $this->model->read($status_id);
    }
    
    public function update($status_data = array()){
        return $this->model->update($status_data);
    }

    public function delete($status_id = ''){
        return $this->model->delete($status_id);
    }

    public function __destruct()
    {
        unset($this->model);
    }

}


?>