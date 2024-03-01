<?php 
     include_once('statics/header.php');
     include_once('libs/list_todo.php');
     

?>
            <div id="mainContent" class="clearfix">
                  <div id="head">
                      <h2> Manage todo </h2>
                      <div id="add_more">
                          <a href="add_new.php" class="btn btn-success"> + Add New </a>
                      </div>
                  </div>
                  <div id="mainbody">
                        <table class="table table-stripped">
                            <thead>
                                <tr>
                                    <td> Title </td>
                                    <td> Snippet </td>
                                    <td> Due Date </td>
                                    <td> Time Left </td>
                                    <td> Progress </td>
                                    <td> Actions </td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    
                                    <?php
                                    if ($list_todo) {

                                        foreach($list_todo as $key => $value){
                                            $today = strtotime("now");
                                            $due_date = strtotime($value['due_date']);
                                            if ($due_date > $today) {
                                                $hours =$due_date - $today;
                                                $hours = $hours/3600;
                                                $time_left =$hours/24;
                                                if ($time_left < 1) {
                                                    $time_left = 'less than one day';

                                                } else {
                                                $time_left= $time_left;
                                                }
                                            
                                                ?>
                                            }else{
                                                $time_left = 'expired';

                                            }
                                        
                                                <td> <?php echo $value['title']; ?> </td>
                                                <td> <?php echo $value['description']; ?> </td>
                                                <td> <?php echo $value['due_date']; ?> </td>
                                                <td> <?php echo $time_left; ?> </td>
                                                <?php
                                            }
                                        }

                                    } ?>
                                    
                                    <td> <button type="button" class="btn btn-primary">Edit</button> | <button type="button" class="btn btn-danger">Delete</button> </td>
                                </tr>
                            </tbody>
                        </table>
                  </div>
                  
            </div>
        </div>
    </div>
    
</body>
</html>