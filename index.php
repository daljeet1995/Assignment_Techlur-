<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include_once("Crud.php");     
$viewdata=new Crud();  
$customers = $viewdata->displayRecord();
$output ="";
$output .="<div class='container'><div class='row'><h4>Employee Managment</h4><a href='view.php'>Add New Employee</a></div><table class='table table-striped table-hover'>
            <thead>
                <tr>
                    <th>Employee Id</th>
                    <th>Name</th>
                    <th>DOB</th>
                    <th>salary</th>
                    <th>Joining Date</th>
                    <th>Relieving Date</th>
                    <th>Contact</th>
                    <th>Status</th>
                   
                </tr>
            </thead>
            <tbody>";
    foreach ($customers as $employee) {
            $output.="<tr>
                <td>".$employee['id']."</td>
                <td>".$employee['name']."</td>
                <td>".$employee['dob']."</td>
                <td>".$employee['salary']."</td>
                <td>".$employee['joining_date']."</td>
                <td>".$employee['relieving_date']."</td>
                <td>".$employee['contact']."</td>
                <td>".$employee['status']."</td>
                <td><a href='update.php?id=".$employee['id']."'>Edit</a></td>
                <td><a href='delete_process.php?id=".$employee['id']."'>Delete</a></td>


               
            </tr>";
        }
$output .= "</tbody>
</table></div>";
echo $output;	
?>
</body>
</html>