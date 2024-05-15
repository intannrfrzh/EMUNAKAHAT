<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PPNP</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="../../Bootstrap/mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../css/userView.css">   
  </head>
  <body style="background-color: white;"> 
    <!-- Start your project here-->

    <!-- heading -->

    <?php

      include_once ('../../View/Common/heading.html')
    ?>

    <!-- sidebar -->

    <?php
      include_once ('../../View/Common/sidebarstaff.php')
    ?>
    
    <!-- main content -->

    <div style="border: 2px solid black; background-color: #D9D9D9;height:550px" class="container-content w-75 p-3 ">
      <form action="../../../public/index.php?action=closeRelative" id="close-form" method="post">
        <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">
        
        <?php
          //<!-- Name -->

          $servername = "localhost";
          $username = "root";
          $password = "";
          $dbname = "eMunakahatDB";

          // Create a connection to the database
          $conn = new mysqli($servername, $username, $password, $dbname);

          // Check the connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql3 = "SELECT * FROM staff_account";
          $result3 = $conn->query($sql3);
          if ($result3->num_rows > 0) {
            // Output data for each row
            while ($row = $result3->fetch_assoc()) {
              // Access the data fields using $row['field_name']
              $staff_ID = $row['staff_ID'];
              $staff_Name = $row['staff_Name'];
            }
          }

          echo '
          <div class="row mb-3">
            <label for="staffName" class="col-sm-2 col-form-label">Nama Staff</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="staff_Name" disabled value="'.$staff_Name.'">
            </div>
          </div>
          ';
          $conn->close();
        ?>
        
        <table>
            <thead>
              <tr>
                <th>Bil</th>
                <th>No. KP / Nama Pengadu</th>
                <th>No. KP / Nama Pasangan</th>
                <th>Tarikh Sesi</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // Database connection configuration
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "eMunakahatDB";

                try {
                  // Create a PDO connection
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  
                  // Fetch data from the database
                  $stmt = $conn->query("SELECT * FROM consultation_session");
                  
                  // Loop through the rows and display data in the table
                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['consult_ID'] . "</td>";
                    echo "<td>" . $row['applicant_IC'] . "</td>";
                    echo "<td>" . $row['partner_IC'] . "</td>";
                    echo "<td>" . $row['request_Date'] . "</td>";
                    echo "<td>" . $row['status'] . "</td>";
                    echo "</tr>";
                  }
                } catch(PDOException $e) {
                  echo "Connection failed: " . $e->getMessage();
                }
                
                // Close the database connection
                $conn = null;
              ?>
            </tbody>
          </table>

    </div>

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>