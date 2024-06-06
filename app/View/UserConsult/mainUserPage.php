<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PPNP</title>
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
    <link rel="stylesheet" href="../../mdb/css/mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../Common/userView.css">   
    <link rel="stylesheet" href="../Common/sidebar.css">
  </head>
  <body style="background-color: white;"> 
    <!-- Start your project here-->

    <!-- heading -->

    <?php

      //require ('../../Model/M4model.php')
    ?>

    <?php

      include_once ('../../View/Common/heading.html')
    ?>

    <!-- sidebar -->

    <?php
      include_once ('../../View/Common/sidebar.php')
    ?>
    
    <!-- main content -->

    <div style="border: 2px solid black; background-color: #D9D9D9;height:550px" class="container-content w-75 p-3">
      <form action="../../../public/index.php?action=groomsJob" id="grooms-job" method="post">
        <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">
    
          <!-- No Kad Pengenalan -->
    
          <div class="row mb-3">
          <!--<label for="applicant_IC" class="col-sm-2 col-form-label">No Kad Pengenalan</label>
          <div class="col-sm-3">
            <div class="input-group">
              <input name="applicant_IC" type="text" class="form-control form-control-sm" id="applicant_IC">
              <button class="btn btn-primary" id="semak" onclick="navigateToNextPage(this.id)">Semak</button>
            </div>-->
            <script>
              function navigateToNextPage(btnid) {
                // Redirect to the view page
                if (btnid == 'semak') {
                  window.location.href = 'viewUserPage.php'; // Replace 'viewUserPage.php' with the desired URL
                }
              }
            </script>
          </div>
        </div>
          <!-- Table -->

          <style>
            table {
              border-collapse: collapse;
            }
            th, td {
              border: 1px solid black;
              padding: 8px;
            }
          </style>
          <table>
            <thead>
              <tr>
                <th>Bil</th>
                <th>No. KP / Nama Pengadu</th>
                <th>No. KP / Nama Pasangan</th>
                <th>Jenis Konsultasi</th>
                <th>Tarikh / Masa</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <?php
                // Database connection configuration
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "systemkahwin";

                try {
                  // Create a PDO connection
                  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                  
                  // Fetch data from the database
                  $stmt = $conn->query("SELECT * FROM consultation_session");
                  
                  // Loop through the rows and display data in the table
                  while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<tr>";
                    echo "<td>" . $row['consult_ID'] . "</td>";
                    echo "<td>" . $row['applicant_IC'] . $row['applicant_Name']."</td>";
                    echo "<td>" . $row['partner_IC'] . $row['partner_Name']. "</td>";
                    echo "<td>" . $row['consultationType'] . "</td>";
                    echo "<td>" . $row['request_DateTime'] . "</td>";
                    echo "<td>" . $row['Description'] . "</td>";
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
        </form>
    </div>

    <style>
      .insert-btn {
        width: 100px;
        position: relative;
        left: 400px;
      }
    </style>
    
    
    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

   
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
