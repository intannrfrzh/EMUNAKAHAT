<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>userProfileView</title>
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
  <?php include_once ('../../View/Common/heading.html') ?>

  <!-- sidebar -->
  <?php include_once ('../../View/Common/sidebar.php') ?>
  
  <!-- main content -->
  <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3">
    <form>
      <div class="row mb-3">
        <div class="col-md-6">
          <div class="form-group">
            <label for="applicant_name">Nama:</label>
            <?php echo $Applicant_Name; ?>
          </div>

          <div class="form-group">
            <label for="applicant_IC">Nombor Kad Pengenalan:</label>
            <?php echo $applicant_IC; ?>
          </div>

          <div class="form-group">
            <label for="applicant_DOB">Tarikh Lahir:</label>
            <?php echo $applicant_DOB; ?>
          </div>

          <div class="form-group">
            <label for="applicant_birthPlace">Tempat Lahir:</label>
            <?php echo $applicant_birthPlace; ?>
          </div>

          <div class="form-group">
            <label for="applicant_phone_number">Nombor Telefon:</label>
            <?php echo $applicant_phone_number; ?>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="applicant_email">Emel:</label>
            <?php echo $applicant_email; ?>
          </div>

          <div class="form-group">
            <label for="applicant_race">Bangsa:</label>
            <?php echo $applicant_race; ?>
          </div>

          <div class="form-group">
            <label for="applicant_gender">Jantina:</label>
            <?php echo $applicant_gender; ?>
          </div>

          <div class="form-group">
            <label for="applicant_Nationality">Kewarganegaraan:</label>
            <?php echo $applicant_Nationality; ?>
          </div>

          <div class="form-group">
            <label for="applicant_Address">Alamat:</label>
            <?php echo $applicant_Address; ?>
          </div>

          <div class="form-group">
            <label for="applicant_Job">Pekerjaan:</label>
            <?php echo $applicant_Job; ?>
          </div>

          <div class="form-group">
            <label for="applicant_Income">Pendapatan:</label>
            <?php echo $applicant_Income; ?>
          </div>

          <div class="form-group">
            <label for="applicant_WorkplaceAddress">Alamat Tempat Kerja:</label>
            <?php echo $applicant_WorkplaceAddress; ?>
          </div>

          <div class="form-group">
            <label for="applicant_bank_name">Bank:</label>
            <?php echo $applicant_bank_name; ?>
          </div>

          <div class="form-group">
            <label for="applicant_bank_number">No. Akaun Bank:</label>
            <?php echo $applicant_bank_number; ?>
          </div>
        </div>
      </div>

      <div class="text-center">
        <a class="btn btn-primary" href="userProfileEdit.php">Kemaskini</a>
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
