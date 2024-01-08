<?php
include_once("Crud.php");
$insertdata=new Crud();
$id = $_GET['id'];
$sql=$insertdata->deleteRecord($id);
if($sql)
{
    echo "Data deleted successfully !";
}
else
{
    echo "Error ! Please try again";
}

 ?>