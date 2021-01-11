<?php require '../../config.php';?>
<?php require BLA.'inc/header.php';?>
<?php require BL.'functions/validate.php';?>

<?php 

        if(isset($_POST['submit']))
        {
            $name = $_POST['name'];
            $id= $_POST['city_id'];
          
            if (checkEmpty($name) && checkLess($name,3))
            {
            $row=getRow('cities','city_id',$id);
            if ($row) {
             $sql = "UPDATE `cities` SET `city_name`='$name' WHERE city_id= '$id'";
             


             $success_message = db_update($sql);
             //header("refresh:2;url=".BURLA."cities");
                 }
            else
             {
            $error_message = "Please enter a valid Id ";
            }
 }
                
            
            else 
            {
                $error_message = "Please Type City Name";
            }

            require BL.'functions/messages.php';
        }


    ?>
<?php require BLA.'inc/footer.php';?>

