<?php
//Abstract class that allows connect to MySQL
abstract class Model{
    //Attributes
    private static $db_host = "localhost";
    private static $db_user = "root";
    private static $db_pass = "";
    private static $db_name = 'mexflix';
    private static $db_charset = 'utf8';

    private $conn;

    protected $query;
    protected $rows = array();


    //Methods
    //Abstract methods for CRUD of classes that inherit

    abstract protected function set();
    abstract protected function get();
    abstract protected function del();

    //Private method for connection to the database
    private function db_open(){
        //http://php.net/manual/es/class.mysqli.php
        // self:: => to call the attribute which is private and static and belongs to this same class
        $this->conn = new mysqli(self::$db_host, self::$db_user, self::$db_pass, self::$db_name);

        //Set the default characters set to use when sending data from and to the data base server
        $this->conn->set_charset(self::$db_charset);
    }


    //Private method for disconnection to the server database
    private function db_close(){
        $this->conn->close();     
    }   

    //Execute a simple query type INSERT, DELETE, UPDATE 
    protected function set_query(){
        //this open the connection to the database and create the utf8
        $this->db_open();

        //http://php.net/manual/es/mysqli.query.php
        //THIS IS NOT THE PROTECTED ATTRIBUTE query(), 
        $this->conn->query($this->query);// the part 'conn->'query' used IS A INNER PHP METHOD .
        
        $this->db_close(); //METHOD db_close()
    }

    //Obtain data from a query (SELECT)
    protected function get_query(){ 
        $this->db_open();//Open the connection
        
        $result = $this->conn->query($this->query);//Bring the query proceesed and saved in a variable
        while($this->rows[] = $result->fetch_assoc());
        //fetch_assoc = this going to return records from a query invoking the name of the field in database
        $result->close();

        $this->db_close();

        // In this part 'array_pop' is used for delete de last position which is NULL
        return array_pop($this->rows); 
    }

}

?>