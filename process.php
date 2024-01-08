<?php
include_once("Crud.php");
$insertdata=new Crud();
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $salary = $_POST['salary'];
    $joining_date = $_POST['joining_date'];
    $relieving_date = $_POST['relieving_date'];
    $contact = $_POST['contact'];
    $status = $_POST['status'];
    date_default_timezone_set("Asia/Calcutta");
    $insertdate = date("Y-m-d H:i:s");
    $sql=$insertdata->save($name, $dob,$salary,$joining_date, $relieving_date,$contact,$status,$insertdate);
    if($sql)
    {
       echo "Data inserted successfully !";
        header('http://localhost/employee');
    }
    else
    {
        echo "Data inserted error !";
    }
}
 ?>