<?php
include_once('class.database.php');
class ManageTodo{
    public $link;

    function __construct(){
        $db_connection = new dbConnection();
        $this->link = $db_connection->connect();
        return $this->link;
    }

    function CreateToDo($username,$title,$description,$due_date,$created_on,$label){
        $query = $this->link->prepare("INSERT INTO todo (username,title,description,due_date,created_date,label) VALUES (?,?,?,?,?,?)");
        $values = array($username,$title,$description,$due_date,$created_on,$label);
        $query->execute($values);
        $counts = $query->rowCount();
        return $counts;
    }
    function ListTodo($username,$label=null){
        if ($label) {
        
        
        $query = $this->link->query("SELECT * FROM todo WHERE username = '$username' AND label='$label'");
        }else{
            $query = $this->link->query("SELECT * FROM todo WHERE username = '$username'");

        }
        $rowcount = $query->rowCount();
        if($rowcount >= 1){
            $result = $query->fetchAll();

        }
        else{
            $result =$counts;

        }
        return $result;
    }
    function CountTodo($username,$status){
        $query = $this->link->query("SELECT count(*) AS TOTAL_TODO FROM todo WEHERE username='$username' AND status='$status' ");
        $query->setFetchMode(PDO::FETCH_OBJ);
        $counts = $query->fetchAll();
        return $counts;
    }
    function editTodo($username,$id,$values){
        $x=0;
        foreach($values as $key => $value){
            $query = $this->link->query("UPDATE todo SET $key ='$value' WHERE username='$username' AND id='$id'");
            $x++;

        }
        return $x;
    }
    function deleteTodo($username,$id){
        $query = $this->link->query("DELETE FROM todo WHERE username='$username' AND id ='id' LIMIT 1");
        $counts = $query->rowCount();
        return $counts;

    }

}