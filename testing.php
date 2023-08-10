
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
$sql = 'SELECT id,Name,Address,url FROM companydetails '
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

<!-- <div class="container text-center">
  <div class="row row-cols-2">
    <div class="col border "><h2>COMPANY NAME</h2></div>
    <div class="col border"><h2>LOCATION</h2></div>
    
  </div>
</div> -->


<div> 
<div class="container text-center">
    <div class="row row-cols-md-3 justify-content-center">
        <?php foreach ($companydetails as $company) { ?>
            <div class="col mb-4">
                <div class="card h-100" style="width: 18rem;">
                    <img src="<?php echo $company['url']; ?>" class="card-img-top" alt="Company Image" height=50%>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $company['Name']; ?></h5>
                        <p class="card-text"><?php echo $company['Address']; ?></p>
                        <a href="update.php?id=<?php echo $company['id'];?>" class="btn btn-primary mt-auto" >UPDATE</a>
                        <div style="height:10px"></div>
                        <a href="" class="btn btn-primary mt-auto" onclick="deleteCompany(<?php echo $company['id']; ?>, event)">DELETE</a>

                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
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


function deleteCompany(companyId) {
   event.preventDefault(); // Prevent the default anchor tag behavior

    $.ajax({
        type: "POST", // You can use POST or GET depending on your requirements
        url: "delete.php",
        data: {
            id: companyId
        },
        success: function(response) {
            // Handle the response from the server, if needed
            console.log("Delete success:", response);
            // You can update the UI or reload data here if necessary
             window.location.replace('testing.php');
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
        }
    });
}
function updatecompany(companyId, companyName, companyAddress, companyUrl) {

    console.log("update called");
    

    $.ajax({
        type: "POST",
        url: "updateform.php",
        data: {
            id: companyId,
            name: companyName,
            address: companyAddress,
            url: companyUrl
        },
        success: function(response) {
            // Handle the response from the server, if needed
            console.log("Update success:", response);
            // You can update the UI or reload data here if necessary
        },
        error: function(xhr, status, error) {
            console.error("Error:", error);
        }
    });
}



  
</script>
        
      <?php include('templates/footer.php'); ?>
</html>
