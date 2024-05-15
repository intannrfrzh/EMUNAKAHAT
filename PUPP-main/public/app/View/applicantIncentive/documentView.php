<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Documents</title>
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

  <!-- start for the content of the input -->

  <div style="border: 2px solid black; background-color: #D9D9D9;height:550px" class="container-content w-75 p-3 ">
    <h3><u>Documents Information</u></h3>
    <form action="../../../public/index.php?action=documents" id="close-form" method="post">
      <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">

        <!-- documents upload -->

        <!-- grooms ic -->

        <div class="input-group mb-3 col-md-6">
          <label class="input-group-text" for="inputGroupFile01">Grooms IC</label>
          <input type="file" class="form-control" id="inputGroupFile01" name="file">
        </div>


        <!-- bride ic -->

        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01">Bride IC</label>
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>

        <!-- marriage card -->

        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01">Marriage Card</label>
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>

        <!-- account bank state -->

        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01">Account Bank Statements</label>
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>

        <!-- 3 month of grooms pay -->

        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01">3 month of grooms pay slip</label>
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>

        <!-- confirmation residen -->

        <div class="input-group mb-3">
          <label class="input-group-text" for="inputGroupFile01">Confirmation Residency letter</label>
          <input type="file" class="form-control" id="inputGroupFile01">
        </div>

        <!-- upload button -->
        <div style="width:200px">
          <button class="btn btn-primary" type="submit"><a href="../../../app/View/applicantIncentive/documentView.php" class="text-light">Upload</a></button>
        </div>






      </div>

    </form>

    <button id="submitButton" style="position: absolute; left:1000px; bottom:30px" class="btn btn-primary"><a class="text-light">Submit</a></button>
  </div>

  <script>
    document.getElementById("submitButton").addEventListener("click", function() {
      alert("Your Bantuan Perkahwinan Form has been Submitted");
    });
  </script>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>