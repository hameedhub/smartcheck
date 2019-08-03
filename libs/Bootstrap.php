<?php

class Bootstrap
{
     function __construct() {
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = $_GET['url'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);

        //print_r($url);
        if ($url[0] == 'index.php') {
            require 'controller/home.php';
            $controller = new Home();
            $controller->index();
            $controller->loadModel();
            return false;
        }
        $path ='controller/'.$url[0].'.php';

        if (file_exists($path)) {
            require $path;
        }else {
            require 'controller/error.php';
            $controller = new Path_Error();
            $controller->index();
            return false;
        }
        $controller = new $url[0];
        
        if (isset($url[2])) {
            $controller->{$url[1]($url[2])};
        }else {
            if (isset($url[1])) {
                if (method_exists($controller, $url[1])) {
                    $controller->{$url[1]()};
                }else {
                    require 'controller/error.php';
                    $controller = new Path_Error();
                    return false;
                }
            }
        }
        $controller->index();
        $controller->loadModel($url[0]);
            }
        }


?>