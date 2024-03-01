<?php include_once('libs/login_users.php');  ?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <title>Document</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <script defer src="js\bootstrap.bundle.min.js" ></script>
    
</head>
<body>
  <nav class="navbar bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        Empire
      </a>
    </div>
  </nav>

  <div id ="contents">
       <form method="post" action="login.php">
          <div class="form_elements">
          <h2> Register Here </h2>
          
          <div class="form_elements">
            <label for ="email"> username</label><br>
            <input type ="text" name="username" id ="username" />
          </div>
          
    
    
          <div class="form_elements">
            <label for ="email"> Email</label><br>
            <input type ="text" name="email" id ="email" />
    
          </div>
          <div class="form_elements">
            <label for ="password"> Password</label><br>
            <input type ="password" name="password" id ="password" />
    
          </div>
          <div class="form_elements">
            <label for ="repassword"> RePassword</label><br>
            <input type ="password" name="repassword" id ="repassword" />
    
          </div>
          <div class="form_elements">
            <input type ="submit" name="register" id ="register" class="btn btn-success" />
    
          </div>
          <a href="#" id ="show_login">  have an account Login </a>
          </div>
       </form>

  </div>
       

      

    
</body>
</html>