<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Partner Info</title>
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

include_once(__DIR__ . '/../../View/Common/heading.html');
    ?>

    <!-- sidebar -->

    <?php
    include_once(__DIR__ . '/../../View/Common/sidebar.php');
    ?>
    
    <!-- main content -->

    <!-- partner information -->

    <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3 ">

    <h3><u>Partner Information</u></h3>
      <form  action="../../../public/index.php?action=partnerInfo" id="user-form" method="post">
        <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">
    
          <!-- IC number -->
    
          <div class="row mb-3">
            <label for="IC-number" class="col-sm-2 col-form-label">IC number</label>
            <div class="col-sm-4">
              <input name="partnerIC" type="text" class="form-control form-control-sm" id="IC-number" value="<?php echo isset($partnerInfo['partner_IC']) ? $partnerInfo['partner_IC'] : ''; ?>">
              <button style="position: relative; top:8px" class="btn btn-primary">Retrieve</button>
            </div>
            
          </div>
    
          <!-- Name -->
    
          <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="name"  value="<?php echo isset($partnerInfo['partner_Name']) ? $partnerInfo['partner_Name'] : ''; ?>">
            </div>
          </div>
    
    
          <!-- Address -->
    
          <div class="row mb-3">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-sm" id="address" value="<?php echo isset($partnerInfo['partner_Address']) ? $partnerInfo['partner_Address'] : ''; ?>">
            </div>
          </div>
    
          <!-- Phone Number -->
    
          <div class="row mb-3">
            <label for="phone-number" class="col-sm-2 col-form-label">Phone Number</label>
            <div class="col-sm-2">
              <input type="text" class="form-control form-control-sm" id="phone-number" value="<?php echo isset($partnerInfo['partner_phone_number']) ? $partnerInfo['partner_phone_number'] : ''; ?>">
            </div>
          </div>
    
          <!-- BOD -->
    
          <div class="row mb-3">
            <label for="BOD" class="col-sm-2 col-form-label">Birth of Date</label>
            <div class="col-sm-2">
              <input type="text" class="form-control form-control-sm" id="BOD" value="<?php echo isset($partnerInfo['partner_DOB']) ? $partnerInfo['partner_DOB'] : ''; ?>">
            </div>
          </div>
    
          <!-- Birth Place -->
    
          <div class="row mb-3">
            <label for="birth-place" class="col-sm-2 col-form-label">Birth Place</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="birth-place" value="<?php echo isset($partnerInfo['partner_birthPlace']) ? $partnerInfo['partner_birthPlace'] : ''; ?>">
            </div>
          </div>
    
          <!-- Nationality -->
    
          <div class="row mb-3">
            <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="nationality" value="<?php echo isset($partnerInfo['partner_Nationality']) ? $partnerInfo['partner_Nationality'] : ''; ?>">
            </div>
          </div>
    
          <!-- Bank Name -->
    
          <div class="row mb-3">
            <label for="bank-name" class="col-sm-2 col-form-label">Bank Name</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="bank-name" value="<?php echo isset($partnerInfo['partner_bank_name']) ? $partnerInfo['partner_bank_name'] : ''; ?>">
            </div>
          </div>
    
          <!-- Bank Number -->
    
          <div class="row mb-3">
            <label for="name" class="col-sm-2 col-form-label">Bank Number</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="bank-number" value="<?php echo isset($partnerInfo['partner_bank_number']) ? $partnerInfo['partner_bank_number'] : ''; ?>">
            </div>
          </div>
    
        </div>
        </form>

        <!-- button next -->
        <button style="position: absolute; left:1000px; bottom:30px" class="btn btn-primary"><a class="text-light" href="../../../app/View/applicantIncentive/groomsView.php">Next</a></button>
    </div>
    
    
    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
