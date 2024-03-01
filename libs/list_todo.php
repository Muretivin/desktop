<?php
    include_once('../classManageTodo.php');
    include_once('session.php');
    $init = new ManageTodo();

    
    if (isset($_GET['label'])) {

        $label = $_GET['label'];
        $list_todo = $init->ListTodo($session_name,$label);
    }else{
        $list_todo = $init->ListTodo($session_name);
    }
     
    

 ?>