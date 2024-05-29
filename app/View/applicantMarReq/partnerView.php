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
    <style>
       
       
      table {
    font-family: arial, sans-serif;
    border-collapse: separate;
    border-spacing: 0;
    width: 100%;
    background-color: #dddddd;
}

td, th {
    border: 1px solid black;
    text-align: left;
    padding: 8px;
}

      


</style>
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
      <form>
        <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">

    <div class="wrap">
    <div class="content">
        <div class="menu-form">
                <h3> PERMOHONAN KEBENARAN PERKAHWINAN </h3>  
        </div>

        <form action="../../../public/index.php?action=userInfo" id="user-form" method="post">
      <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">

        <!-- User Infomrmation -->

        <!-- IC number -->

        <!-- Name -->
        <p>Nama:</p><br>
        <input type="<?php echo isset($userInfo['applicant_Name']) ? $userInfo['applicant_Name'] : ''; ?>">
        
        <!-- DOB -->

        <p>Tarikh Lahir:</p>
            <input type="<?php echo isset($userInfo['applicant_DOB']) ? $userInfo['applicant_DOB'] : ''; ?>">

        <!-- Birth Place -->
        <p>Tempat Lahir</p>
            <input type="<?php echo isset($userInfo['applicant_BirthPlace']) ? $userInfo['applicant_BirthPlace'] : ''; ?>">
        
         <!-- Phone Number -->

        <p>Nombor Telefon:</p>
            <input type="<?php echo isset($userInfo['applicant_Phone_Number']) ? $userInfo['applicant_Phone_Number'] : ''; ?>">
         
         <!-- Email -->

        <p>Email:</p>
            <input type="<?php echo isset($userInfo['applicant_email']) ? $userInfo['applicant_email'] : ''; ?>">
         
          <!-- Race -->

        <p>Kaum:</p>
            <input type="<?php echo isset($userInfo['applicant_Phone_Number']) ? $userInfo['applicant_Phone_Number'] : ''; ?>">
         
        <!-- Gender-->

        <p>Jantina:</p>
            <input type="<?php echo isset($userInfo['applicant_Phone_Number']) ? $userInfo['applicant_Phone_Number'] : ''; ?>">
        
          
        <!-- Nationality -->

        <p>Warganegara</p>
            <input type="<?php echo isset($userInfo['applicant_Nationality']) ? $userInfo['applicant_Nationality'] : ''; ?>">
          
        <!-- Job -->

        <p>Pekerjaan:</p>
            <input type="<?php echo isset($userInfo['applicant_Phone_Number']) ? $userInfo['applicant_Phone_Number'] : ''; ?>">
         
            <!-- Income -->

        <p>Gaji:</p>
            <input type="<?php echo isset($userInfo['applicant_Phone_Number']) ? $userInfo['applicant_Phone_Number'] : ''; ?>">
         
        
        
    </form>


        <div class="content-text">
            
    
    <button>Kembali</button>  
    <button>Setrerusnya</button> 
    
    </div>
   
</div>

</div>
       
</div>
     
</body>
</html>