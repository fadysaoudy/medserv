<?php require '../../config.php';?>
<?php require BLA.'inc/header.php';
      require BL.'functions/messages.php';?>

<?php
if(isset($_GET['id']) && is_numeric($_GET['id']))
{
    $row=getRow('services','serv_id',$_GET['id']);
    if ($row) {
       $serv_id=$row['serv_id'];
    }
     

else
{
   $error_message = "serv_id not availabel";
}
require BL.'functions/messages.php';
}
else
{  
    //echo "Please Enter an ID";
       $error_message = "Please Enter an ID";

    require BL.'functions/messages.php';

}
?>
  <div class="col-sm-6 offset-sm-3 border p-3">
        <h3 class="text-center p-3 bg-primary text-white">Edit  Service</h3>
        <form method="post" action="<?php echo BURLA.'services/update.php'; ?>">
            <div class="form-group">
                <label >Name Of Service</label>
                <input type="text" name="name" class="form-control" ">
                <input type="hidden" name="serv_id" value="<?php echo $serv_id; ?>" ">
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">Save</button>
        </form>
       
    </div>

<?php require BLA.'inc/footer.php';?>

