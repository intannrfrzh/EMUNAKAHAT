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

    <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3 ">
      <div class="inner-content">
        <p><strong>Anda pasti mahu buang data terkini</strong> </p>
        <button class="apply-btn" onclick="window.location.href = 'mainUserPage.php';">Apply</button>
        <button class="not-btn" onclick="window.location.href = 'mainUserPage.php';">Not Now</button>
      </div>
    </div>

    <style>

      .not-btn {
        border-radius: 10px;
        padding: 10px;
        margin: 20px;
        
      }

      .apply-btn {
        border-radius: 10px;
        padding: 10px;
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
        text-align: center;
        border: 2px solid black;
        padding: 50px;
        border-radius: 20px;
        font-size: larger;
        color: black;
      }
    </style>
    
    
    
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
