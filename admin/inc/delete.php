
<?php 

require '../../functions/db.php';

$table = $_GET['table'];
$item_id = $_GET['item_id'];
$field = $_GET['field'];
$sql = "DELETE FROM `$table` WHERE `$field`='$item_id' ";
$result = deleteRow($sql);

if($result)
{
    $data['message'] = "success";
}
else 
{
    $data['message'] = "error";
}



echo json_encode($data);
