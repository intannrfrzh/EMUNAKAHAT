<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Grooms Job</title>
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

  include_once('../../View/Common/heading.html')
  ?>

  <!-- sidebar -->

  <?php
  include_once('../../View/Common/sidebar.php')
  ?>

  <!-- main content -->

  <!-- grooms information -->

  <div style="border: 2px solid black; background-color: #D9D9D9;height:550px" class="container-content w-75 p-3">
    <h3><u>Grooms Job Information</u></h3>
    <form action="../../../public/index.php?action=groomsJob" id="grooms-job" method="post">
      <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">

        <!-- Job -->

        <div class="row mb-3">
          <label for="job" class="col-sm-2 col-form-label">Job</label>
          <div class="col-sm-4">
            <input name="job" type="text" class="form-control form-control-sm" id="job">
          </div>
        </div>

        <!-- Jobs Type -->

        <div class="row mb-3">
          <label for="jobs-type" class="col-sm-2 col-form-label">Jobs Type</label>
          <div class="col-sm-4">
            <input name="jobsType" type="text" class="form-control form-control-sm" id="jobs-type">
          </div>
        </div>


        <!-- Salary -->

        <div class="row mb-3">
          <label for="salary" class="col-sm-2 col-form-label">Salary</label>
          <div class="col-sm-4">
            <input name="groomsSalary" type="number" class="form-control form-control-sm" id="salary">
          </div>
        </div>

        <!-- Name and address of the employer -->

        <div class="row mb-3">
          <label for="name-address" class="col-sm-2 col-form-label">Name and address of the employer</label>
          <div class="col-sm-8">
            <input name="nameAddress" type="text" class="form-control f" id="name-address">
          </div>
        </div>


        <!-- insert button -->

        <button style="position: absolute; left:1000px; bottom:45px" class="insert-btn btn btn-primary" type="submit"><a class="text-light">Insert</a></button>

      </div>
    </form>

    <!-- next button -->
    <button style="position: absolute; left:1000px; bottom:30px" class="btn btn-primary"><a class="text-light" href="../../../app/View/applicantIncentive/closeView.php">Next</a></button>
  </div>

  <style>
    .insert-btn {
      width: 100px;
      position: relative;
      left: 400px;
    }
  </style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var salaryInput = document.getElementById('salary');
        
        salaryInput.addEventListener('input', function() {
            var salary = parseInt(this.value);
            
            if (salary > 5000) {
                alert('You have exceeded the amount');
            }
        });
    });
</script>



  <!-- End your project here-->


  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>


  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>