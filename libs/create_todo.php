<?php
    include_once('classManageTodo.php');
    $init = new ManageTodo();
    if (isset($_POST['create_todo'])) {

        $title = $_POST['title'];
        $description = $_POST['description'];
        $due_date = $_POST['due_date'];
        $label = $_POST['label_under'];
        

        if (empty($title) || empty($due_date) || empty($label)) {

            $error = 'All fields are required except optional';
        }
        else{
            $title = strip_tags($title);
            $description = strip_tags($description);
            $title = mysql_real_escape_string($title);
            $description = mysql_real_escape_string($description);

            $username = 'muretivin';
            $created_on = date("Y-m-d");

            $created_todo = $init->CreateToDo($username,$title,$description,$due_date,$created_on,$label);
            if ($created_todo == 1) {
                
                $success = 'Todo Created sucessfully';

            }
            else{
                $error='there was an error';
            }

        }
    }



?>