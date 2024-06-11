<?php

include '../../Controller/M2Controller/M2userRequestController.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PPNP</title>
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
    <link rel="stylesheet" href="../../mdb/css/mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../Common/userView.css">
    <link rel="stylesheet" href="../Common/sidebar.css"> 
    
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
                <h3> PERMOHONAN KEBENARAN PERKAHWINAN   </h3>  
        </div>
             <div class="content-text2">
                <form>
                <p><b> MAKLUMAT PERKAHWINAN <b></p><br>
                <p> Nama Pemohon:</p><br>
                <p> Nama Pasangan:</p><br>

                <label for="tarikhmohon">Tarikh Mohon:</label>
                <input type="date" id="tarikhmohon" name="tarikhmohon"><br><br>


                <div>
                  <p><b>Tempat Kahwin<b></p>
                    <label for="tempat"><b>Negara:</b></label>
                    <input type="text" id="tempat" name="tempat"><br><br>
                </div>

                <div>
                 <label for="negeri"><b>Negeri:</b></label>
                <select id="negeri" name="negeri">
                <option value="semua">Perlis</option>
                <option value="pahang">Kedah</option>
                <option value="bentong">Pulau Pinang</option>
                <option value="bera">Perak</option>
                <option value="bera">Selangor</option>
                <option value="bera">Wilayah Persekutuan Kuala Lumpur</option>
                <option value="bera">Wilayah Putrajaya</option>
                <option value="bera">Negeri Sembilan</option>
                <option value="bera">Melaka</option>
                <option value="bera">Johor</option>
                <option value="bera">Pahang</option>
                <option value="bera">Kelantan</option>
                <option value="bera">Terengganu</option>
                <option value="bera">Sabah</option>
                <option value="bera">Sarawak</option>
                <option value="bera">Wilayah Labuan</option>
                </select><br><br>
                 </div>
                
                 <div>
                  <p><b>Maklumat Cadangan Majlis Akad Nikah<b></p>
                
                 <label for="tarikh">Tarikh Akad Nikah:</label>
                <input type="date" id="tarikh" name="tarikh"><br><br>

                <label for="address"><b>Alamat Tempat Kahwin:</b></label>
                    <textarea id="subject" name="subject"  style="height: 3px 0px"></textarea><br><br>
                 </div>

                 <div>
                    <label for="maskahwin"><b>Jenis Mas Kahwin:</b></label>
                    <input type="text" id="maskahwin" name="maskahwin"><br><br>
                 </div>
    

                 <div>
                 <label for="amount">Mas Kahwin:</label>
                <input type="number" id="amount" name="amount">
                 </div>

                 
                 
            </form>
                
            
    </div>
    <br>
    <button>Kembali</button>
    <button>Simpan</button>
    </div>
</div>

</body>
</html>