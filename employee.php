
<?php
include('connection.php');
$company_name = '';
$employee_name = '';
$salary = '';
$date = '';



$errors = array('name' => '', 'address' => '');

if (isset($_POST['submit'])) {



    if (empty($_POST['cname'])) {
        $errors['name'] = "name is required <br>";
    } else {


        $company_name = $_POST['cname'];

    }


    if (empty($_POST['ename'])) {
        $errors['address'] = "task name is required <br>";
    } else {
        $employee_name = htmlspecialchars($_POST['ename']);
    }

    
    if (empty($_POST['salary'])) {
        $errors['address'] = "task name is required <br>";
    } else {
        $salary = htmlspecialchars($_POST['salary']);
    }
   

    
    if (empty($_POST['date'])) {
        $errors['address'] = "task name is required <br>";
    } else {
        $date = htmlspecialchars($_POST['date']);
    }

    if (empty($errors['name']) && empty($errors['address'])) {
        $company_name = mysqli_real_escape_string($conn, $_POST['cname']);
        $employee_name = mysqli_real_escape_string($conn, $_POST['ename']);
         $salary = mysqli_real_escape_string($conn, $_POST['salary']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);


        //storing into db
        $sql = "INSERT INTO employee(Name,Company,Salary,BirthDate) VALUES('$employee_name','$company_name','$salary','$date')";

        if (mysqli_query($conn, $sql)) {
            // Redirecting the user to the index page
            header('Location: testing1.php');
            exit();
        } else {
            echo "query error";
        }

    }
}

?>


<!DOCTYPE html>

<html>
    
<h1> hi there</h1>
<div> <?php include('templates/header.php'); ?></div>
       

<form method="post" action="employee.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Compnay Name</label>
     <input type="text" class="form-control" id="formGroupExampleInput" name="cname" value="<?php echo $company_name;?>" placeholder="company name">
    <!-- <input name="name" type="text" class="form-control" id="exampleInputEmail1"  value="<?//php// $company_name;//?>"> -->
    <div> <?php echo "<p> {$errors['name']} </p>" ?></div>

    <div id="textHelp" class="form-text">Only add valid Name & address otherwise you will face legal action.</div>
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Employee name</label>
        <div> <?php echo "<p> {$errors['address']} </p>" ?></div>
    <input  name="ename" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $employee_name;?>">
   
    </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Salary</label>
        <div> <?php echo "<p> {$errors['address']} </p>" ?></div>
    <input  name="salary" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $salary;?>">
   
    </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth date</label>
        <div> <?php echo "<p> {$errors['address']} </p>" ?></div>
    <input  name="date" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $date;?>">
   
    </div>
  <button name="submit" value="submit" type="submit" class="btn btn-primary">Submit</button>
</form>

  
</html>