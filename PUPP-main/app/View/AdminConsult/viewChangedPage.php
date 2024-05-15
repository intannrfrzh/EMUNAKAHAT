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
  <body>

  <?php

      require ('../../Model/eMunakahatDB.php')
    ?>

  <?php

include_once ('../../View/Common/heading.html')
?>

<!-- sidebar -->

<?php
include_once ('../../View/Common/sidebarstaff.php')
?>

<!-- main content -->

<form>
<div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3 ">
      <form>
        <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">

        <?php
      // Database connection configuration
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
    
      $sql = "SELECT * FROM applicants";
      $sql2 = "SELECT * FROM partners";
      $sql3 = "SELECT * FROM staff_account";
      $result = $conn->query($sql);
      $result2 = $conn->query($sql2);
      $result3 = $conn->query($sql3);
    
      if ($result->num_rows > 0) {
        // Output data for each row
        while ($row = $result->fetch_assoc()) {
          // Access the data fields using $row['field_name']
          $applicant_IC = $row['applicant_IC'];
          $applicant_Name = $row['applicant_Name'];
          $applicant_DOB = $row['applicant_DOB'];
          $applicant_race = $row['applicant_race'];
          $applicant_Address = $row['applicant_Address'];
          $applicant_phone_number = $row['applicant_phone_number'];
          $applicant_Job = $row['applicant_Job'];
          $applicant_Income = $row['applicant_Income'];
        }
    
      if ($result2->num_rows > 0) {
        // Output data for each row
        while ($row = $result2->fetch_assoc()) {
          // Access the data fields using $row['field_name']
          $partner_IC = $row['partner_IC'];
          $partner_Name = $row['partner_Name'];
          $partner_DOB = $row['partner_DOB'];
          $partner_race = $row['partner_race'];
          $partner_Address = $row['partner_Address'];
          $partner_phone_number = $row['partner_phone_number'];
          $partner_Job = $row['partner_Job'];
          $partner_Income = $row['partner_Income'];
        }
    
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
            <label for="applicant" border: 5px solid lightblue; background-color: #00FFFF; class="class="container-content w-75 p-3"><h1><b>MAKLUMAT PEMOHON</b></h1></label>
          </div>

          <div class="row mb-3">
            <label for="applicant_IC" class="col-sm-2 col-form-label">No K/P / No Passport</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="applicant_IC" disabled value="'.$applicant_IC.'">
            </div>
          </div>
            
          <!-- Bangsa Pemohon -->

          <div class="row mb-3">
            <label for="applicant_name" class="col-sm-2 col-form-label">Nama Pasangan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="applicant_Name" disabled value="'.$applicant_Name.'">
            </div>
          </div>
        
          <!-- DOB Pemohon -->

          <div class="row mb-3">
            <label for="partnerBOD" class="col-sm-2 col-form-label">Tarikh Lahir</label>
            <div class="col-sm-2">
              <input type="date" class="form-control form-control-sm" id="applicant_DOB" disabled value="'.$applicant_DOB.'">
            </div>
          </div>
            
          <!-- Bangsa Pemohon -->

          <div class="row mb-3">
            <label for="bangsa" class="col-sm-2 col-form-label">Bangsa</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="applicant_race" disabled value="'.$applicant_race.'">
            </div>
          </div>
    
          <!-- Alamat Semasa Pemohon -->

          <div class="row mb-3">
            <label for="alamatSemasa" class="col-sm-2 col-form-label">Alamat Semasa</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="applicant_Address" disabled value="'.$applicant_Address.'">
            </div>
          </div>
   
          <!-- Phone Number Pemohon -->
    
          <div class="row mb-3">
            <label for="noPhone" class="col-sm-2 col-form-label">No. Telefon</label>
            <div class="col-sm-2">
              <input type="text" class="form-control form-control-sm" id="applicant_phone_number" disabled value="'.$applicant_phone_number.'">
            </div>
          </div>

          <!-- Sektor Pekerjaan Pemohon -->
    
          <div class="row mb-3">
            <label for="jobSector" class="col-sm-2 col-form-label">Sektor Pekerjaan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-lg" id="applicant_Job" disabled value="'.$applicant_Job.'">
            </div>
          </div>
    
          <!-- Gaji Pemohon -->
    
          <div class="row mb-3">
            <label for="income" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="applicant_Income" disabled value="'.$applicant_Income.'">
            </div>
          </div>

          <div class="row mb-3">
            <label for="applicant" border: 5px solid lightblue; background-color: #00FFFF; class="class="container-content w-75 p-3"><h1><b>MAKLUMAT PASANGAN</b></h1></label>
          </div>

          <!-- No Kad Pengenalan Pasangan -->
    
          <div class="row mb-3">
            <label for="partnerIC" class="col-sm-2 col-form-label">No K/P / No Passport</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="partner_IC" disabled value="'.$partner_IC.'">
            </div>
          </div>
    
          <!-- Nama Pasangan -->
    
          <div class="row mb-3">
            <label for="partnerName" class="col-sm-2 col-form-label">Nama Pasangan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="partner_Name" disabled value="'.$partner_Name.'">
            </div>
          </div>
   
          <!-- Tarikh Lahir Pasangan -->
    
          <div class="row mb-3">
            <label for="partnerBOD" class="col-sm-2 col-form-label">Tarikh Lahir</label>
            <div class="col-sm-2">
              <input type="date" class="form-control form-control-sm" id="partner_DOB" disabled value="'.$partner_DOB.'">
            </div>
          </div>

          <!-- Bangsa Pasangan -->
    
          <div class="row mb-3">
            <label for="race" class="col-sm-2 col-form-label">Bangsa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-lg" id="partner_race" disabled value="'.$partner_race.'">
            </div>
          </div>
    
          <!-- Alamat Semasa Pasangan -->
    
          <div class="row mb-3">
            <label for="partnerAddress" class="col-sm-2 col-form-label">Alamat semasa</label>
            <div class="col-sm-2">
              <input type="text" class="form-control form-control-sm" id="partner_Address" disabled value="'.$partner_Address.'">
            </div>
          </div>
    
          <!-- Phone Number Pasangan -->
    
          <div class="row mb-3">
            <label for="partnerNoPhone" class="col-sm-2 col-form-label">No. Telefon</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="partner_phone_number" disabled value="'.$partner_phone_number.'">
            </div>
          </div>
    
          <!-- Sektor Pekerjaan Pasangan -->
    
          <div class="row mb-3">
            <label for="partnerJobSector" class="col-sm-2 col-form-label">Sektor Pekerjaan</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="partner_Job" disabled value="'.$partner_Job.'">
            </div>
          </div>
          
          <!-- Gaji Pasangan -->
    
          <div class="row mb-3">
            <label for="PartnerIncome" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="partner_Income" disabled value="'.$partner_Income.'">
            </div>
          </div>
    
          <div class="row mb-3">
            <label for="applicant" border: 5px solid lightblue; background-color: #00FFFF; class="class="container-content w-75 p-3"><h1><b>MAKLUMAT PENASIHAT</b></h1></label>
          </div>

          <!-- No Kad Pengenalan Penasihat -->
    
          <div class="row mb-3">
            <label for="staffID" class="col-sm-2 col-form-label">No K/P / No Passport</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-lg" id="staff_ID" disabled value="'.$staff_ID.'">
            </div>
          </div>
          
            <!-- Nama Penasihat -->
    
          <div class="row mb-3">
            <label for="staffName" class="col-sm-2 col-form-label">Nama Penasihat</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="staff_Name" disabled value="'.$staff_Name.'">
            </div>
          </div>
   
          ';
        }
      } else {

      }

      // Close the database connection
      $conn->close();
    ?>
        </div>
</form>
</div>

    <!-- Your JavaScript code here -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>