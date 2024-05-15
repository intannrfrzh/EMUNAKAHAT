<?php
//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "emunakahat") or die(mysqli_error($link));



//SQL query




$query = "SELECT * FROM applicant2"
	or die(mysqli_connect_error());

    $result = mysqli_query($link,$query);

   


       if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          // Assign the values to variables
          $name = $row['applicant2_Name'];
          $dob = $row['applicant2_DOB'];
          $bp = $row['applicant2_birthplace'];
          $phonenum = $row['applicant2_phonenumber'];
          $email = $row['applicant2_email'];
          $race = $row['applicant2_race'];
          $gender = $row['applicant2_gender'];
          $Nationality = $row['applicant2_Nationality'];
          $Job = $row['applicant2_Job'];
          $Income = $row['applicant2_Income'];
          ?>
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

                <form action="../../../public/index.php?action=userInfo" id="user-form" method="post">
      <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">

        <!-- User Infomrmation -->

        <!-- IC number -->

        <!-- Name -->
        <p>Nama:</p><br>
        <input type="<?php echo isset($userInfo['applicant2_Name']) ? $userInfo['applicant2_Name'] : ''; ?>">
        
        <!-- DOB -->

        <p>Tarikh Lahir:</p>
            <input type="<?php echo isset($userInfo['applicant2_DOB']) ? $userInfo['applicant2_DOB'] : ''; ?>">

        <!-- Birth Place -->
        <p>Tempat Lahir</p>
            <input type="<?php echo isset($userInfo['applicant2_birthplace']) ? $userInfo['applicant2_birthplace'] : ''; ?>">
        
         <!-- Phone Number -->

        <p>Nombor Telefon:</p>
            <input type="<?php echo isset($userInfo['applicant2_phonenumber']) ? $userInfo['applicant2_phonenumber'] : ''; ?>">
         
         <!-- Email -->

        <p>Email:</p>
            <input type="<?php echo isset($userInfo['applicant2_email']) ? $userInfo['applicant2_email'] : ''; ?>">
         
          <!-- Race -->

        <p>Kaum:</p>
            <input type="<?php echo isset($userInfo['applicant2_race']) ? $userInfo['applicant2_race'] : ''; ?>">
         
        <!-- Gender-->

        <p>Jantina:</p>
            <input type="<?php echo isset($userInfo['applicant2_gender']) ? $userInfo['applicant2_gender'] : ''; ?>">
        
          
        <!-- Nationality -->

        <p>Warganegara</p>
            <input type="<?php echo isset($userInfo['applicant2_Nationality']) ? $userInfo['applicant2_Nationality'] : ''; ?>">
          
        <!-- Job -->

        <p>Pekerjaan:</p>
            <input type="<?php echo isset($userInfo['applicant2_Job']) ? $userInfo['applicant2_Job'] : ''; ?>">
         
            <!-- Income -->

        <p>Gaji:</p>
            <input type="<?php echo isset($userInfo['applicant2_Income']) ? $userInfo['applicant2_Income'] : ''; ?>">
         
        
        
    </form>

    <?php
                }
                } else {
                    echo "0 results";

                    }
                    // Close the database connection
                  mysqli_close($link);
                  ?>

        </div>
        <div class="content-text">
            
    
    <button>Kembali</button>  
    <button>Seterusnya</button> 
    
    </div>
   
</div>

</div>
       
</div>
     
</body>
</html>