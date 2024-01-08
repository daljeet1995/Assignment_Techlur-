<!DOCTYPE html>
<html>
  <body>
    <form method="post" action="process.php">
        Name:<br>
        <input type="text" name="name" required>
        <br>
         DOB:<br>
        <input type="date" name="dob">
        <br>
         Salary:<br>
        <input type="text" name="salary">
        <br>
        Joining Date:<br>
        <input type="date" name="joining_date">
        <br><br>
        Relieving Date:<br>
        <input type="date" name="relieving_date">
        <br><br>
        Contact:<br>
        <input type="text" name="contact">
        <br><br>
        Status:<br>
        
        <input type="radio" id="status" name="status" value="Active">
        <label for="html">Active</label><br>
        <input type="radio" id="status" name="status" value="Inactive">
        <label for="css">Inactive</label><br>
       
          <br><br>
        

        <input type="submit" name="submit" value="submit">
    </form>
  </body>
</html>