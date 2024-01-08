<?php
    include_once("Crud.php");
    $id=$_GET['id'];
    $viewdata=new Crud();  
    $employee = $viewdata->displayRecordbyid($id);
    
    ?>
    <!DOCTYPE html>
    <html>
    <body>
    <form method="post" action="update_process.php">
    Name:<br>
    <input type="text" name="name" value="<?php echo $employee['name'];?>">
    <br>
    DOB:<br>
    <input type="date" name="dob" value="<?php echo $employee['dob'];?>">
    <br>
    Salary:<br>
    <input type="text" name="salary" value="<?php echo $employee['salary'];?>">
    <br>
    Joining Date:<br>
    <input type="date" name="joining_date" value="<?php echo $employee['joining_date'];?>">
    <br>
    Relieving Date:<br>
    <input type="date" name="relieving_date" value="<?php echo $employee['relieving_date'];?>">
    <br>
    Contact:<br>
    <input type="text" name="contact" value="<?php echo $employee['contact'];?>">
    <br>
    Status:<br>
        <?php if ($employee['status'] == 'Active') { ?>
            <input type="radio" id="status" name="status" value="Active" checked>
        <label for="html">Active</label><br>
        <?php } ?>
        <?php if ($employee['status'] == 'Inactive') { ?>
        <input type="radio" id="status" name="status" value="Inactive" checked>
        <label for="css">Inactive</label><br>
       
          <br><br>
        <?php } ?>


        <?php if (($employee['status'] == 'Inactive')) { ?>
        <input type="radio" id="status" name="status" value="Active">
        <label for="css">Active</label><br>
       
          <br><br>
        <?php } else { ?>
            <input type="radio" id="status" name="status" value="Inactive">
        <label for="css">Inactive</label><br>
       <?php  } ?>
        
       


   
    <input type="hidden" name="userid" value="<?php echo $employee['id'];?>">
    <input type="submit" name="submit" value="submit">
    </form>
    </body>
    </html>