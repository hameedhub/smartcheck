<?php

class Controller
{
     function __construct() {
       $this->view = new View();
    }
    public function loadModel($name)
    {
      $path = 'model/'.$name.'_model.php';
      if (file_exists($path)) {
        require $path;
        $model_name = $name.'_Model';
        $this->model = new $model_name();
      }
    }
}
