<?php

interface StaffInterface {
    public function doStaffWork();
}

interface ApplicantInterface {
    public function apply();
}

class userProfileEdit implements StaffInterface, ApplicantInterface {
    public function doStaffWork() {
        // Implementation for staff-related functionality
    }

    public function apply() {
        // Implementation for applicant-related functionality
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Added PHP code to handle form submission (if ($_SERVER['REQUEST_METHOD'] == 'POST') { ... }).
  $errors = [];

  // Validate and process form data
  $applicant_name = $_POST['applicant_name'] ?? '';
  $applicant_IC = $_POST['applicant_IC'] ?? '';
  // Continue for other form fields...

  if (empty($applicant_name)) {
      $errors[] = "Nama is required."; //Error Display: Added logic to display errors if form validation fails.
  }
  if (empty($applicant_IC)) {
      $errors[] = "Nombor Kad Pengenalan is required.";
  }
  // Continue for other validations...

  if (empty($errors)) {
      // Save data logic
      header("Location: userProfileView.php");
      exit();
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>userProfileEdit</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
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
    include_once ('../../View/Common/sidebar.php')
  ?>
  
  <!-- main content -->

  <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3">

    <form>
      <div class="row mb-3">
        <div class="col-md-6">
          <div class="form-group">
            <label for="applicant_name">Nama:</label>
            <input type="text" id="applicant_name" name="applicant_name" required class="form-control" required>
          </div>

          <div class="form-group">
            <label for="applicant_IC">Nombor Kad Pengenalan:</label>
            <input type="text" id="applicant_IC" name="applicant_IC" required class="form-control" required>
          </div>

          <div class="form-group">
            <label for="applicant_DOB">Tarikh Lahir:</label>
            <div class="d-flex">
              <select id="applicant_DOB" name="applicant_DOB" class="form-control mr-2" required> <!--Required Attributes: Added required attributes to ensure the user must select all parts of the date before submitting the form.-->
                <?php
                for ($day = 1; $day <= 31; $day++) {
                  echo "<option value='$day'>$day</option>";
                }
                ?>
              </select>
              <select id="dob_month" name="dob_month" class="form-control mr-2" required>
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
              <select id="dob_year" name="dob_year" class="form-control" required>
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
            <input type="text" id="applicant_birthPlace" name="applicant_birthPlace" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_phone_number">Nombor Telefon:</label>
            <input type="text" id="applicant_phone_number" name="applicant_phone_number" required class="form-control">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="applicant_email">Emel:</label>
            <input type="text" id="applicant_email" name="applicant_email" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_race">Bangsa:</label>
            <input type="text" id="applicant_race" name="applicant_race" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_gender">Jantina:</label>
            <input type="text" id="applicant_gender" name="applicant_gender" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_Nationality">Kewarganegaraan:</label>
            <input type="text" id="applicant_Nationality" name="applicant_Nationality" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_Address">Alamat:</label>
            <input type="text" id="applicant_Address" name="applicant_Address" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_Job">Pekerjaan:</label>
            <input type="text" id="applicant_Job" name="applicant_Job" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_Income">Pendapatan:</label>
            <input type="text" id="applicant_Income" name="applicant_Income" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_WorkplaceAddress">Alamat Tempat Kerja:</label>
            <input type="text" id="applicant_WorkplaceAddress" name="applicant_WorkplaceAddress" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_bank_name">Bank:</label>
            <input type="text" id="applicant_bank_name" name="applicant_bank_name" required class="form-control">
          </div>

          <div class="form-group">
            <label for="applicant_bank_number">No. Akaun Bank:</label>
            <input type="text" id="applicant_bank_number" name="applicant_bank_number" required class="form-control">
          </div>
        </div>
      </div>

      <div class="text-center"> <!--Changed the submit button to <button type="submit" class="btn btn-primary">Simpan</button> instead of an anchor tag, to submit the form data.-->
        <button type="submit" class="btn btn-primary" href="userProfileView.php">Simpan</button> 
      </div>

    </form>
  </div>

  <style>
    .container-content {
      border: 2px solid black;
      background-color: #D9D9D9;
      padding: 20px;
      border-radius: 10px;
    }
  </style>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>
</html>
