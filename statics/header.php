<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo Maker</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="jquery-ui-1.13.2.custom/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    <script type="text/javascript" src="js\bootstrap.bundle.min.js" ></script>
    <script type="text/javascript" src="jquery-ui-1.13.2.custom/jquery-ui.js" ></script>
    <script>
        $( function() {
           $( "#due_date" ).datepicker({
            dateFormat: 'yy-mm-dd'
           });
        } );
  
  </script>
</head>
<body>
    <div id="mainWrapper">
        <div id="td_container" class="clearfix">
            <div id="sidebar">    
                <ul class="nav flex-column" >
                     <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="#">Inbox</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="#">Read Later</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="#">Important</a>
                     </li>
                </ul>
                
            </div>