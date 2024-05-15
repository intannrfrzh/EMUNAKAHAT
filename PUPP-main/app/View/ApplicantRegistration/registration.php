<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>registration</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../Bootstrap//mdb.min.css" />

  <!-- CSS -->
  <style>
    body {
      background-color: white;
    }

    .container-content {
      border: 2px solid black;
      background-color: #d9d9d9;
      width: 75%;
      padding: 20px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-submit {
      text-align: center;
      margin-top: 30px;
    }

    .form-submit input[type="submit"] {
      padding: 10px 30px;
      border-radius: 5px;
      background-color: green;
      color: white;
      border: none;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <!-- Start your project here-->

  <!-- heading -->
  <?php include_once('../../View/Common/headingRegister.html'); ?>

  <!-- main content -->
  <div class="container-content">
    <div class="row">
      <div class="col-md-12">
        <h2 style="text-align: center;">Daftar Pengguna</h2>
        <form action="registration.php" method="post">
          <div class="form-group">
            <label for="applicant_name">Nama:</label>
            <input type="text" id="applicant_name" name="applicant_name" required>
          </div>

          <div class="form-group">
            <label for="applicant_IC">Nombor Kad Pengenalan:</label>
            <input type="text" id="applicant_IC" name="applicant_IC" required>
          </div>

          <div class="form-group">
  <label for="applicant_DOB">Tarikh Lahir:</label>
  <div style="display: flex;">
    <select id="applicant_DOB" name="applicant_DOB" style="margin-right: 10px;">
      <?php
      for ($day = 1; $day <= 31; $day++) {
        echo "<option value='$day'>$day</option>";
      }
      ?>
    </select>
    <select id="dob_month" name="dob_month" style="margin-right: 10px;">
      <?php
      $months = array(
        1 => 'January',
        2 => 'February',
        3 => 'March',
        4 => 'April',
        5 => 'May',
        6 => 'June',
        7 => 'July',
        8 => 'August',
        9 => 'September',
        10 => 'October',
        11 => 'November',
        12 => 'December',
      );

      foreach ($months as $monthNumber => $monthName) {
        echo "<option value='$monthNumber'>$monthName</option>";
      }
      ?>
    </select>
    <select id="dob_year" name="dob_year">
      <?php
      $currentYear = date('Y');
      $startYear = $currentYear - 200;

      for ($year = $currentYear; $year >= $startYear; $year--) {
        echo "<option value='$year'>$year</option>";
      }
      ?>
    </select>
  </div>
</div>


          <div class="form-group">
            <label for="applicant_birthPlace">Tempat Lahir:</label>
            <input type="text" id="applicant_birthPlace" name="applicant_birthPlace" required>
          </div>

          <div class="form-group">
            <label for="applicant_phone_number">Nombor Telefon:</label>
            <input type="text" id="applicant_phone_number" name="applicant_phone_number" required>
          </div>

          <div class="form-group">
            <label for="applicant_email">Emel:</label>
            <input type="text" id="applicant_email" name="applicant_email" required>
          </div>

          <div class="form-group">
            <label for="applicant_race">Bangsa:</label>
            <input type="text" id="applicant_race" name="applicant_race" required>
          </div>

          <div class="form-group">
            <label for="applicant_gender">Jantina:</label>
            <input type="text" id="applicant_gender" name="applicant_gender" required>
          </div>

          <div class="form-group">
            <label for="applicant_Nationality">Kewarganegaraan:</label>
            <input type="text" id="applicant_Nationality" name="applicant_Nationality" required>
          </div>

          <div class="form-group">
            <label for="applicant_Address">Alamat:</label>
            <input type="text" id="applicant_Address" name="applicant_Address" required>
          </div>

          <div class="form-group">
            <label for="applicant_Job">Pekerjaan:</label>
            <input type="text" id="applicant_Job" name="applicant_Job" required>
          </div>

          <div class="form-group">
            <label for="applicant_Income">Pendapatan:</label>
            <input type="text" id="applicant_Income" name="applicant_Income" required>
          </div>

          <div class="form-group">
            <label for="applicant_WorkplaceAddress">Alamat Tempat Kerja:</label>
            <input type="text" id="applicant_WorkplaceAddress" name="applicant_WorkplaceAddress" required>
          </div>

          <div class="form-group">
            <label for="applicant_bank_name">Bank:</label>
            <input type="text" id="applicant_bank_name" name="applicant_bank_name" required>
          </div>

          <div class="form-group">
            <label for="applicant_bank_number">No. Akaun Bank:</label>
            <input type="text" id="applicant_bank_number" name="applicant_bank_number" required>
          </div>

          <div class="form-group">
            <label for="applicant_Password">Kata Laluan:</label>
            <input type="text" id="applicant_Password" name="applicant_Password" required>
          </div>

          <div class="text-center">
  <script>
    function goToNewInterface() {
      window.location.href = "../../View/ManageUserProfile/userLogin.php";
    }
  </script>
  <a class="btn btn-primary" href="#" onclick="goToNewInterface()">Daftar</a>
</div>

          
        </form>
      </div>
    </div>        
  </div>
</body>         
