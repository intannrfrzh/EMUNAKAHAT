<?php



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
                <h3> PENDAFTARAN KURSUS KAHWIN  </h3>  
        </div>
        <div class="content-text">
        <h3>TERMA DAN PERATURAN KURSUS PRA PERKAHWINAN ISLAM <br> JABATAN AGAMA ISLAM PAHANG</h3>
                    <p>1.Hanya peserta yang berdaftar sahaja dibenarkan menyertai kursus pada hari yang berkenaan. 
                       <br> 2.Bayaran penyertaan hendaklah dilakukan di kaunter Pejabat Agama Islam Daerah sebelum tarikh pelaksanaan kursus. 
                        <br>3.Pengesahan kehadiran hendaklah dibuat pada hari kursus dan pada setiap slot yang dijalankan. 
                        <br>4.Penangguhan kursus dibenarkan untuk satu kali sahaja dan hendaklah dibuat sekurang-kurangnya seminggu awal daripada tarikh yang didaftarkan kepada satu sesi kursus yang dibuka pendaftarannya sahaja. Tiada sebarang caj dikenakan. 
                        <br>5.Penangguhan kurang dari tempoh seminggu, bayaran penangguhan sebanyak RM60.00 akan dikenakan. 
                        <br>6.Penangguhan kursus adalah melalui kaunter Pejabat Agama Islam sahaja dengan membawa bersama resit pendaftaran. 
                        <br>7.Ketidakhadiran tanpa maklum akan mengakibatkan pendaftaran kursus terbatal dan yuran tidak akan dikembalikan. Pendaftaran baharu perlu dibuat bagi mengikuti semula kursus. 
                        <br>8.Pembatalan pendaftaran kursus, yuran tidak akan dikembalikan. 
                        <br>9.Peserta kursus hendaklah berpakaian kemas, sopan dan menutup aurat. Pakaian jarang dan ketat adalah dilarang sama sekali. 
                        <br>10.Peserta hendaklah menjaga adab dan tingkahlaku serta tidak menimbulkan suasana tidak tenteram sepanjang masa kursus ini berjalan. 
                        <br>11.Peserta yang hadir ke kursus juga hendaklah mematuhi langkah-langkah keselamatan yang telah ditetapkan oleh pihak penganjur dan Pejabat Agama Islam Daerah. 
                        <br>12.Sebarang masalah berkaitan kursus, sila rujuk/maklum kepada urusetia bertugas. Peserta hendaklah mematuhi segala peraturan dan arahan dari semasa ke semasa oleh urusetia.
                    </p>
                    </div>
                    <button type=submit>
                    <a  href="../../../app/View/applicantMarCourse/viewOrgList.php">DAFTAR SEKARANG</a>
                    </button>
    </div>
</div>
     
</body>
</html>