<?php require '../../config.php';?>
<?php require BLA.'inc/header.php';?>
<?php require BL.'functions/validate.php';?>

<?php 

        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $id= $_POST['serv_id'];
          
            if (checkEmpty($name) && checkLess($name,3))
            {
            $row=getRow('services','serv_id',$id);
            if ($row) {
             $sql = "UPDATE `services` SET `serv_name`='$name' WHERE serv_id= '$id'";
             


             $success_message = db_update($sql);
             //header("refresh:2;url=".BURLA."cities");
                 }
            else
             {
            $error_message = "Please Type Correct Service";
            }
 }
                
            
            else 
            {
                $error_message = "Please Type Service Name";
            }

            require BL.'functions/messages.php';
        }


    ?>
<?php require BLA.'inc/footer.php';?>

