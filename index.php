
<?php
session_start();
if(!isset($_SESSION['loggedin']))
{
  header('location: auth.php');
  exit;
}
include('connection.php');
// $conn=mysqli_connect('localhost','samman','password123','company');

// if(!$conn)
// {
//     echo 'connection error' . mysqli_connect_error();
// }

//writing queries
$sql = 'SELECT id,Name,Address FROM companydetails '
;

//getting queries
$result=mysqli_query($conn,$sql);

//fetch the resulting rows as an array
$companydetails=mysqli_fetch_all($result,MYSQLI_ASSOC);

//print_r($companydetails);
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    

 <?php include('templates/header.php');  ?>
 <div class="extraspace" style=" margin-top:5%;">

 </div>

<div class="container text-center">
  <div class="row row-cols-2">
    <div class="col border "><h2>COMPANY NAME</h2></div>
    <div class="col border"><h2>LOCATION</h2></div>
    
  </div>
</div>


<div> 
    <?php foreach($companydetails as $company){?>
  
      <div class="container text-center">
  <div class="row row-cols-2">
    <div class="col border "> <?php echo $company['Name']?></div>
    <div class="col border"><?php echo $company['Address']?></div>
    
  </div>
</div>
   
    <?php } ;?>
 </div> 
 
 <div class="container-fluid">
    <div class="d-flex justify-content-center align-items-center" style="height: 10vh;">
        <button type="button" class="btn btn-primary " onclick="redirectToFormPage()"
        >ADD Company information</button>
    </div>
</div>
<script>
  function redirectToFormPage() {
    // Redirect to the form.php page
    window.location.href = 'form.php';
  }
</script>
        
      <?php include('templates/footer.php'); ?>
</html>
