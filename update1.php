<?php
if (isset($_GET['id'])  ) {
    $conn = mysqli_connect('localhost', 'samman', 'password123', 'company');

    if (!$conn) {
        echo 'connection error' . mysqli_connect_error();
    }
    $get_id = $_GET['id'];

    $sql = "SELECT id, Name, Salary, BirthDate,Company FROM employee WHERE id=$get_id";
    $result = mysqli_query($conn, $sql);
    $company = mysqli_fetch_assoc($result);
    $name = $company['Name'];
    $salary = $company['Salary'];
    $BirthDate = $company['BirthDate'];
    $company_name = $company['Company'];

    $id = $company['id'];

   
    echo "updateform called";
}

$errors = array('name' => '', 'address' => '');
if (isset($_POST['submit'])) {
     $id = $_POST['id'];
    $conn = mysqli_connect('localhost', 'samman', 'password123', 'company');

    if (empty($_POST['cname'])) {
        $errors['name'] = "name is required <br>";
    } else {
        $company_name = $_POST['cname'];
    }
   if (empty($_POST['ename'])) {
        $errors['name'] = "name is required <br>";
    } else {
        $company_name = $_POST['ename'];
    }
       if (empty($_POST['cname'])) {
        $errors['name'] = "name is required <br>";
    } else {
        $company_name = $_POST['cname'];
    }
    if (empty($_POST['salary'])) {
        $errors['address'] = "task name is required <br>";
    } else {
        $address = htmlspecialchars($_POST['salary']);
    }
    
    if (empty($_POST['date'])) {
        $errors['address'] = "URL is required <br>";
    } else {
        $url = htmlspecialchars($_POST['date']);
    }
 ?>
    <?php echo "this line has been reached"; ?>
    <?php 

    if (empty($errors['cname']) && empty($errors['ename'])) {
       
   


       $company = mysqli_real_escape_string($conn, $_POST['cname']);
        $name  = mysqli_real_escape_string($conn, $_POST['ename']);
          $salary = mysqli_real_escape_string($conn, $_POST['salary']);
           $BirthDate  = mysqli_real_escape_string($conn, $_POST['date']);
          $id = $_POST['id'];

        $sql = "UPDATE employee SET Company='$company', Name='$name', Salary='$salary',BirthDate='$BirthDate' WHERE id=$id";

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
       
<form method="post" action="update1.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Compnay Name</label>
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <input type="text" class="form-control" id="formGroupExampleInput" name="cname" value="<?php echo $company_name;?>" placeholder="company name">
    <!-- <input name="name" type="text" class="form-control" id="exampleInputEmail1"  value="<?//php// $company_name;//?>"> -->
    <div> <?php echo "<p> {$errors['name']} </p>" ?></div>

    <div id="textHelp" class="form-text">Only add valid Name & address otherwise you will face legal action.</div>
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Employee name</label>
        <div> <?php echo "<p> {$errors['address']} </p>" ?></div>
    <input  name="ename" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $name;?>">
   
    </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Salary</label>
        <div> <?php echo "<p> {$errors['address']} </p>" ?></div>
    <input  name="salary" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $salary;?>">
   
    </div>
     <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Birth date</label>
        <div> <?php echo "<p> {$errors['address']} </p>" ?></div>
    <input  name="date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $BirthDate;?>">
   
    </div>
  <button name="submit" value="submit" type="submit" class="btn btn-primary">Submit</button>
</form>

  
</html>
</html>