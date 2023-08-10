<?php
if (isset($_GET['id'])  ) {
    $conn = mysqli_connect('localhost', 'samman', 'password123', 'company');

    if (!$conn) {
        echo 'connection error' . mysqli_connect_error();
    }
    $get_id = $_GET['id'];

    $sql = "SELECT id, Name, Address, url FROM companydetails WHERE id=$get_id";
    $result = mysqli_query($conn, $sql);
    $company = mysqli_fetch_assoc($result);
    $company_name = $company['Name'];
    $address = $company['Address'];
    $url = $company['url'];
    $id = $company['id'];

    echo "updateform called";
}

$errors = array('name' => '', 'address' => '');
if (isset($_POST['submit'])) {
     $id = $_POST['id'];
    $conn = mysqli_connect('localhost', 'samman', 'password123', 'company');

    if (empty($_POST['name'])) {
        $errors['name'] = "name is required <br>";
    } else {
        $company_name = $_POST['name'];
    }

    if (empty($_POST['address'])) {
        $errors['address'] = "task name is required <br>";
    } else {
        $address = htmlspecialchars($_POST['address']);
    }
    
    if (empty($_POST['url'])) {
        $errors['address'] = "URL is required <br>";
    } else {
        $url = htmlspecialchars($_POST['url']);
    }

    if (empty($errors['name']) && empty($errors['address'])) {
        $company_name = mysqli_real_escape_string($conn, $_POST['name']);
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $url = mysqli_real_escape_string($conn, $_POST['url']);
          $id = $_POST['id'];

        $sql = "UPDATE companydetails SET Name='$company_name', Address='$address', url='$url' WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            // Redirecting the user to the index page
            header('Location: testing.php');
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
       

<form method="post" action="update.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Compnay Name</label>
     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <input type="text" class="form-control" id="formGroupExampleInput" name="name" value="<?php echo $company_name;?>" placeholder="company name">
    <!-- <input name="name" type="text" class="form-control" id="exampleInputEmail1"  value="<?//php// $company_name;//?>"> -->
    <div> <?php echo "<p> {$errors['name']} </p>" ?></div>
    <div id="textHelp" class="form-text">Only add valid Name & address otherwise you will face legal action.</div>
  </div>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Address</label>
        <div> <?php echo "<p> {$errors['address']} </p>" ?></div>
    <input  name="address" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $address;?>">
   
    </div>
    <label for="exampleInputEmail1" class="form-label">URL</label>
        <div> <?php echo "<p> {$errors['address']} </p>" ?></div>
    <input  name="url" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo  $url;?>">


    </div>
  <button name="submit" value="submit" type="submit" class="btn btn-primary">Submit</button>
</form>
</html>