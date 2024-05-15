<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Close Relative</title>
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
      include_once ('../../View/Common/sidebar.php')
    ?>

    <!-- main content -->

    <div style="border: 2px solid black; background-color: #D9D9D9;height:550px" class="container-content w-75 p-3 ">
    <h3><u>Close Relative Information</u></h3>
      <form action="../../../public/index.php?action=closeRelative" id="close-form" method="post">
        <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">
    
          <!-- Name -->
    
          <div class="row mb-3">
            <label for="close-name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-4">
              <input name="closeName" type="text" class="form-control form-control-sm" id="close-name">
            </div>
          </div>
          
          <!-- Relationship -->
    
          <div class="row mb-3">
            <label for="relation" class="col-sm-2 col-form-label">Relationship</label>
            <div class="col-sm-4">
              <input name="closeRelation" type="text" class="form-control form-control-sm" id="relation">
            </div>
          </div>
    
    
          <!-- Phone number -->
    
          <div class="row mb-3">
            <label for="close-phone" class="col-sm-2 col-form-label">Phone number</label>
            <div class="col-sm-4">
              <input name="closePhone" type="text" class="form-control form-control-sm" id="close-phone">
            </div>
          </div>
          
  
         </div>
         <button class="btn btn-primary" type="submit">Insert</button>
        </form>
        <button style="position: absolute; left:1000px; bottom:30px" class="btn btn-primary"><a class="text-light" href="../../../app/View/applicantIncentive/documentView.php">Next</a></button>
    </div>
    
    
    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
