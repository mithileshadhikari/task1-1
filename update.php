<?php

require './connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $district = $_POST["district"];
    $subdistrict = $_POST["subdistrict"];
    $village = $_POST["village"];
    $zip = $_POST["zip"];


    $sql = "UPDATE info SET firstname='$firstname', lastname='$lastname', district='$district', subdistrict='$subdistrict', village='$village', zip='$zip' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();

    header("Location: admin.php");
    exit();
}


// Fetch data for the specified record
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM info WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    } else {
        echo "Record not found";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sanity demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>


    <nav class="navbar navbar-expand-lg bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.html">SANITY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active"  aria-current="page" href="./index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admin.php">Admin</a>
            </li>
           
         </ul>    
        </div>
      </div>
    </nav>
    <br>
    <br>

    
                 <div style="margin-left: 100px; margin-right: 100px;">
            <h1 style="text-align: center;">Update INFO</h1>

            <form class="row g-3"  action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <div class="col-md-6">
                  <label for="firstname" class="form-label">First Name</label>
                  <input type="text" class="form-control" name="firstname" id="firstname"  value="<?php echo $row['firstname']; ?>">
                </div>
                <div class="col-md-6">
                  <label for="lastname" class="form-label">Last Name</label>
                  <input type="text" class="form-control"  name="lastname" id="lastname"  value="<?php echo $row['lastname']; ?>">
                </div>
                
                <div class="col-md-4">
                  <label for="district" class="form-label">Select District:</label>
                  <select  name="district" id="district"  class="form-select">
                    <option value="<?php echo $row['district']; ?>" selected><?php echo $row['district']; ?></option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Pune">Pune</option>
                    
                  </select>
                </div>

                <div class="col-md-4">
                    <label for="sub_district" class="form-label">Select Sub-District:</label>
                    <select  name="subdistrict"  id="sub_district" class="form-select">
                      <option value="<?php echo $row['subdistrict']; ?>" selected><?php echo $row['subdistrict']; ?></option>

                    </select>
                  </div>
                  
                    <div class="col-md-2">
                    <label for="village" class="form-label">Village</label>
                    <input type="text" name="village" class="form-control" value="<?php echo $row['village']; ?>" id="village">
                    </div>
                    

                <div class="col-md-2">
                  <label for="inputZip" class="form-label">Zip</label>
                  <input type="text" name="zip"  value="<?php echo $row['zip']; ?>" class="form-control" id="inputZip">
                </div>
  
                <div class="col-12">
                  <button type="submit" class="btn btn-outline-success">Submit</button>
                </div>

              </form>
                </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="./index.js"></script>
</body>
</html>
