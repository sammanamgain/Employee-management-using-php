
<?php
 $login = false;

if (isset($_POST['submit']))

{
   
    $conn = mysqli_connect('localhost', 'samman', 'password123', 'users');

    if (!$conn) {
        echo 'connection error' . mysqli_connect_error();
    } 
    else {
        echo 'connection established';
    }
    $email = $_POST['email'];
    $password = $_POST['Password'];
    

    if(empty($_POST['email'])){
        echo "email  must be required";
    }
    else{

        $email = $_POST['email'];
        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo  "email must be valid email address";
        }
        
    }

    $sql="Select * from user where email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num){

        
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['email']=$email;
        header('location: testing.php');
       
    }
    else{
        echo "something error";
    }
}
?>

<!DOCTYPE html>

<html>

    <?php 
    if($login) {
        echo ' <div class="alert alert-success" role="alert">
  Signup successfull
</div>
    
    ';
    };
    ?>

 <?php include('templates/headerone.php');  ?>

<div class="d-flex justify-content-center align-items-center" style="height: 80vh;">
  <form method="post" action="auth.php">
    <div class="mb-3 lg-6">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="Password">
    </div>
 
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" name="submit" id="submit" class="btn btn-primary btn-lg">Login</button>
  </form>
</div>


 


        
      <?php include('templates/footer.php'); ?>
</html>
