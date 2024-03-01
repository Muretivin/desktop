<?php
      if(isset($_POST['register'])){
        session_start();
        include_once('class.ManageUsers.php');
        $users = new ManageUsers();

        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $repassword = $_POST['repassword'];
        $ip_address = $_SERVER['REMOTE_ADDR'];
        $date = date("Y-m-d");
        $time = date("H:i:s");

        if(empty($username) || empty($email) || empty($password) || empty($repassword)){

            $error = 'All fields are required';

        }
        elseif($password !== $repassword){
            $error = 'Password does not match';

        }
        elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error = 'email is not valid';

        }
        else{
            $check_availablity = $users->GetUserInfo($username);
            if ($check_availablity == 0) {
                $password = md5($password);
                $register_user = registerUsers($username,$email,$password,$ip_address,$time,$date);
                if ($register_user == 1) {
                    

                    $make_sessions = $users->GetUserInfo($username);
                    foreach ($make_sessions as $userSessions) {

                        $_SESSION['todo_name'] = $userSessions['username'];
                        if (isset($_SESSION['todo_name'])) {

                            header("location: index.php");
                        }
                    }
                }

                
            }
            else{
                $error = 'Username already exists';

            }

        }
      }

      if(isset($_POST['login'])){
        session_start();
        include_once('class.ManageUsers.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($username) || empty($password)) {
            $error = 'All fields are required';

        }
        else{
            $login_users = new ManageUsers();
            $auth_user = $login_users ->LoginUsers($username,$password);

            if ($auth_user == 1) {
                $make_sessions= $login_users ->GetUserInfo($username);
                foreach($make_sessions as $userSessions){
                    $_SESSION['todo_name'] = $userSessions['username'];
                        if (isset($_SESSION['todo_name'])) {

                            header("location: index.php");
                        }

                }
            }
            else{
                $error = 'invalid login';
            }
        }
      } 



?>