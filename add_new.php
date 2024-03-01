<?php
  include_once('statics/header.php'); 
  include_once('libs/create_todo.php');
  include_once('libs/session.php');


?>
<div id="mainContent">
    <div id= "head">
        <h2>Create Todo </h2><br>
    </div>
    <form method="post" action="add_new.php">
    <div id="mainBody">
        <?php if (isset($error)) {
            
        echo '<div class="alert alert-danger" role="alert">'.$error.'
        </div>';
        } 
        ?>
         <?php if (isset($success)) {
            
            echo '<div class="alert alert-success" role="alert">'.$success.'
            </div>';
            } 
            ?>
        <div class="form_field">
            <label for="Title">Title </label><br>
            <input type="text" name="title" id="title" />
        </div>

        <div class="form_field">
            <label for="Description">Description <small> optional</small> </label><br>
            <textarea name="description" id="desc"></textarea>
        </div>

        <div class="form_field">
            <label for="Due Date">Due Date </label><br>
            <input type="text" name="due_date" id="title" />
        </div>

        <div class="form_field">
            <label for="Label Under">Label Under </label><br>
            <select name="label_under" id="label_under"><br>
                <option value=""> select</option>
                <option value="Inbox"> Inbox</option>
                <option value="Read Later"> Read Later</option>
                <option value="Important"> Important</option>
                
            </select><br><br>
        </div>

        <div class="form_field">
            <input type="submit" name="create_todo" value="Create" id="create_todo" class="btn btn-info" />
        </div>
    </div>
    </form>
</div>