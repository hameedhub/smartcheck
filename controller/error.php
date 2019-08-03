<?php
class Path_Error extends Controller
{
     function __construct() {
       parent:: __construct();
       $this ->view->msg = 'Invaild URL path';
       
    }
    public function index()
    {
      $this ->view->render('error/index');
    }
}



?>