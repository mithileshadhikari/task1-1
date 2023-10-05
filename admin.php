<?php

require './connection.php';

$sql = "SELECT * FROM info"; // Replace with your actual table name

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>

    <style>

    
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

tr:hover {
    background-color: #f5f5f5;
}

.navbar {
    background-color: #f8f9fa;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    text-decoration: none;
    color: #343a40;
}

.nav-links {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

.nav-links li {
    margin-left: 20px;
}

.nav-links a {
    text-decoration: none;
    color: #343a40;
    font-size: 18px;
}

.nav-links a:hover {
    color: #007bff;
}

.head{

    text-align: center;
    

}

.update_btn{

    color:green;
    border: solid 1px black;
    text-align: center;
    padding: 5px;

    margin-right: 15px;

    margin-left: 15px;
    

}

.delete_btn{

    color:red;
    border: solid 1px black;
    text-align: center;
    padding: 5px;

}

a{

text-decoration: none;
list-style: none;
color: black;
}



    </style>
<meta http-equiv="refresh" content="5">

</head>
<body>


<nav class="navbar">
    <div class="container">
        <!-- <a class="navbar-brand" href="index.html">Navbar</a> -->
        <ul class="nav-links">
            <li><a href="./index.html">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="./admin2.php">search data</a></li>

        </ul>
    </div>
</nav>




<h2 class="head">Admin Page</h2>

<table border="1">
    <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>District</th>
        <th>Subdistrict</th>
        <th>Village</th>
        <th>ZIP</th>
        <th>Action</th> 
    </tr>

    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["firstname"]."</td>";
            echo "<td>".$row["lastname"]."</td>";
            echo "<td>".$row["district"]."</td>";
            echo "<td>".$row["subdistrict"]."</td>";
            echo "<td>".$row["village"]."</td>";
            echo "<td>".$row["zip"]."</td>";
            echo "<td> <a class='update_btn' href='update.php?id=".$row["id"]."'>Update</a>"; // Update link
            echo "<a class='delete_btn' href='delete.php?id=".$row["id"]."'>Delete</a> </td>"; // Delete link
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='6'>No records found</td></tr>";
    }
    ?>
</table>



<script>
    setTimeout(function(){
        location.reload();
    }, 3000); // Refresh every 5 seconds (5000 milliseconds)
</script>


</body>
</html>

<?php
$conn->close();
?>
