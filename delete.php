
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    $companyId = $_POST['id'];
    include('connection.php');

   $sql = "DELETE FROM companydetails WHERE id = $companyId";

    // Execute the query
    $result = mysqli_query($conn, $sql);

    if ($result) {
         header('Location: testing.php');
         exit();
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    } 
    
  
    // Perform the necessary delete operation using $companyId
    
    // Send a response back to the client
    echo "Company with ID $companyId deleted successfully.";
} else {
    echo "Invalid request.";
}
?>
































