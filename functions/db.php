

<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "id15531215_medical";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn)
{
    die("Error In Connection : ".mysqli_connect_error());
    
}
function db_insert($sql){
  global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Added Success";
    }
    return false;

}
function db_update($sql){
  global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Updated Success";
    }
    return false;

}
function getRow($table,$field,$value)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$value'";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        $rows=[];
        if(mysqli_num_rows($result)>0)
        {
            $rows[]=mysqli_fetch_assoc($result);
        return $rows[0];
        }
        
    }
         return false;

}
function getRows($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if($result)
    {
       
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
}
   return $rows;
}
function deleteRow($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Deleted Success";
    }
    return false;
}
function count_table($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
   return count($rows);
}



?>