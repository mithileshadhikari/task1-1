
<html>

<head>
    <style>



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



    </style>
</head>
<body>
    

<nav class="navbar">
    <div class="container">
        <!-- <a class="navbar-brand" href="index.html">Navbar</a> -->
        <ul class="nav-links">
            <li><a href="index.html">Home</a></li>
            <li><a href="admin.php">Admin</a></li>
        </ul>
    </div>
</nav>


<script>
        setTimeout(function(){
            window.location.href = "./admin.php";
        }, 2000); // Redirect after 5 seconds (5000 milliseconds)
    </script>

</body>
</html>

<?php
require './connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $district = $_POST["district"];
    $subdistrict = $_POST["subdistrict"];
    $village = $_POST["village"];
    $zip = $_POST["zip"];

   

    if($conn) {
        // echo "ok";
    }

    $sql = "INSERT INTO info (firstname, lastname, district, subdistrict, village, zip)"
VALUES ('$firstname', '$lastname', '$district','$subdistrict', '$village','$zip')";

if (mysqli_query($conn, $sql)) {
  echo "<h1>New record created successfully </h1>";

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}
?>
