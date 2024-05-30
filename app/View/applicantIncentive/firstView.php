<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Permohonan</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
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

  include_once('../../View/Common/heading.html')
  ?>

  <!-- sidebar -->

  <?php
  include_once('../../View/Common/sidebar.php')
  ?>

  <!-- main content -->

  <!-- container first view -->


  <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3 ">

    <div style="position: relative; bottom: 170px; left:30px; top:10px">
      <p style="color: black;">To apply for this marriage assistance, you need to fulfill the following initial requirements as specified below.</p>
      <ul style="color: black;">
        <li>⚫ Not practicing polygamy</li>
        <li>⚫ Married with permission</li>
        <li>⚫ Groom/Bride born in Pahang or residing in Pahang for at least 10 years</li>
        <li>⚫ Groom's salary should be less than or equal to RM5000</li>
      </ul>
      <div class="inner-content">
        <p><strong>Are you sure to apply <br> Bantuan Perkahwinan</strong> </p>
        <button class="apply-btn btn btn-light""><a class=" text-light" href="userView.php">Apply</a></button>
        <button class="not-btn btn btn"><a class="text-light" href="">Not Now</a></button>
      </div>
    </div>



    <!-- internal css -->
    <style>
      .not-btn {
        border-radius: 10px;

        margin: 20px;

      }

      .apply-btn {
        border-radius: 10px;

        margin: 20px;
        background-color: green;
      }

      .container-content {
        height: 550px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .inner-content {
        margin-top: 100px;
        text-align: center;
        border: 2px solid black;
        padding: 50px;
        border-radius: 20px;
        font-size: larger;
        color: black;
      }
    </style>

    <script>
      function showAlert() {
        alert("Make sure you follow these");
      }
    </script>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>