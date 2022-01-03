<?php

class StatusController{

    private $model; //this will invoke or initialize our class StatusModel

    public function __contruct(){
        $this->model = new StatusModel();//Controller's archive is calling StatusModel
                                        // this part create the instance
    }

    public function set($status_data = array()){
        return $this->model->set($status_data);
    }

    public function get($status_id = ''){
        return $this->model->get($status_id);
    }

    public function delete($status_id = ''){
        return $this->model->del($status_id);
    }

    public function __destruct()
    {
        unset($this->model);
    }

}


?>