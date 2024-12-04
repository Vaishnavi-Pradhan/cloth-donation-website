<!DOCTYPE html>
<html>
<head>
    <title>Donation Records</title>

    <style>
body{
    font-family: "Montserrat", sans-serif;
    line-height: 1.7;
    color: var(--color-white);
    background-color: #4b0082; /* Dark purple background color */ 
}

        /* CSS for the navigation bar */
        .navbar {
            overflow: hidden;
            background-color: black;
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 60px;
            padding: 0 20px;
        }

        .navbar a {
            color: white;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        .cloth {
            color: white;
        }

        /* CSS for the table */
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            margin-top: 20px; /* Add margin for separation from the navigation bar */
            background-color: white; /* Set table background color */
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #333;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2; /* Alternate row color */
        }

        tr:hover {
            background-color: #ddd; /* Hover color */
        }

         /* CSS for table title */
         .table-title {
            background-color: #4b0082; /* Dark purple background color */ 
            color: white;
            padding: 10px 20px;
            font-size: 30px;
            text-align: center;
        }

    </style>
</head>
<body>

<!-- Navigation bar -->
<div class="navbar">
    <div class="cloth"><b>Cloth Community</b></div>
    <div>
        <a href="admin_ngo.php">Registered NGOs</a>
        <a href="index.html">Logout</a>
    </div>
</div>
<br>
<div class="table-title"><b>Donation Records</b></div>

<table border="1">
    <tr>
        <th>FULL NAME</th>
        <th>MOBILE NO.</th>
        <th>ITEMS</th>
        <th>ADDRESS</th>
        <th>SELECTED NGO</th>
    </tr>

    <?php
    // Connect to MySQL server
    $conn = mysqli_connect("localhost", "root", "", "test");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data from database
    $sql = "SELECT FullName, MobileNo, Items, Address, Ngo FROM donation";
    $result = $conn->query($sql);

    // Display data in table rows
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["FullName"] . "</td>";
            echo "<td>" . $row["MobileNo"] . "</td>";
            echo "<td>" . $row["Items"] . "</td>";
            echo "<td>" . $row["Address"] . "</td>";
            echo "<td>" . $row["Ngo"] . "</td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
    ?>
</table>

</body>
</html>
