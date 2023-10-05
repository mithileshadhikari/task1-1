<?php
require './connection.php';
?>

<!DOCTYPE html>
<html lang="en">
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>search data</title>
</head>
<body>



<nav class="navbar">
    <div class="container">
        <!-- <a class="navbar-brand" href="index.html">Navbar</a> -->
        <ul class="nav-links">
            <li><a href="./index.html">Home</a></li>
            <li><a href="./admin.php">Admin</a></li>
            <li><a href="admin2.php">search data</a></li>

        </ul>
    </div>
</nav>

    <div class="container mt-5">
        <form method="post">
        <input class="" type="text" placeholder="search data" name="search">
    
        <button type="submit" name="submit" class="btn btn-outline-success">Search</button>
        </form>

        <div class="container my-5">
            <table class="table">
                <?php
if(isset($_POST['submit'])){
    $search=$_POST['search'];

    $sql="select * from `info` where id like '%$search%' or firstname like '%$search%' or lastname like '%$search%'";
    $result=mysqli_query($conn,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            echo'<thead>
            <tr>
            <th>id</th>
            <th>firstname</th>
            <th>lastname</th>
            </tr>
            </thead>
         ';
        while( $row=mysqli_fetch_assoc($result)){
         echo' <tbody>
         <tr>
         <td>'.$row['id'].'</td>
         <td>'.$row['firstname'].'</td>
         <td>'.$row['lastname'].'</td>
         </tr>
         </tbody>
         ';
        }
        }
        else{
            echo'<h2 class="text-danger">Data Not Found</h2>';
        }
    }
}
?>

 </table>
 </div>
 </div>
</body>
</html>