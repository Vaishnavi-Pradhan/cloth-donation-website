<?php
// Create connection
$con = new mysqli('localhost','root','','test');

if($con){
    // Retrieve the selected city from the AJAX request
    $selectedCity = $_GET['city'];

    $sql = "SELECT Name FROM ngos WHERE Address LIKE '%$selectedCity%' LIMIT 5";
    $result=mysqli_query($con,$sql);

    if ($result) {
        $ngoListHTML = "<label for='ngo'>Select NGO:</label><select id='ngo' name='NGO'>";
    
        // Fetch and append results to dropdown HTML
        while ($row = $result->fetch_assoc()) {
            $ngoName = $row['Name'];
            $ngoListHTML .= "<option value='$ngoName'>$ngoName</option>";
        }
    
        $ngoListHTML .= "</select>";
        echo $ngoListHTML;
        exit(); // Exiting the script after sending the response
    } else {
        echo "No NGOs found for the selected city";
    }
    
   }
    else{
        echo"Connecction failed";
    }
?>
