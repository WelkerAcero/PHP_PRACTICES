<?php 

class ViewController{ 
    private static $view_path = './views/';
    private static $view_path_layouts = './views/layouts/';

    public function load_view($view){
        require_once(self::$view_path_layouts . 'header.php');
        require_once(self::$view_path . $view . '.php');
        require_once(self::$view_path_layouts . 'footer.php');
    }

    public function __destruct()
    {
      /*   unset($view_path);
        unset($view_path_layouts); */
    }
}