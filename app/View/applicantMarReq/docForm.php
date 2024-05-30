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
    <link rel="stylesheet" href="../../mdb/css/mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../Common/userView.css">
    <link rel="stylesheet" href="../Common/sidebar.css"> 
   <style>
    .file-input-group {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
      }

      .file-input-group input[type="file"] {
        max-width: 200px; /* Adjust the value as needed */
        flex: 1;
      }

      .file-input-group button {
        margin-left: 10px;
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
                <h3> PERMOHONAN KEBENARAN PERKAHWINAN   </h3>  
        </div>
             <div class="content-text2">
                <form>
                <p><b> SILA CETAK DAN MUAT NAIK BORANG/DOKUMEN DI BAWAH  <b></p><br>
                
                <div class="file-input-group">
                <label for="formFile" class="form-label">Permohonan Untuk Kebenaran Berkahwin:</label>
                <button class="btn btn-primary" onclick="window.print()">Print</button>
                <input class="form-control" type="file" id="formFile"><br>
                </div>    

                <div class="file-input-group">  
                <label for="formFile" class="form-label">Persetujuan dan Wakalah Wali:</label>
                <button class="btn btn-primary" onclick="window.print()">Print</button>
                <input class="form-control" type="file" id="formFile"><br>
                </div>  

                <div class="file-input-group">  
                <label for="formFile" class="form-label">Akuan Pemastautinan:</label>
                <button class="btn btn-primary" onclick="window.print()">Print</button>
                <input class="form-control" type="file" id="formFile"><br>
                </div>  
                
                <div class="file-input-group">  
                <label for="formFile" class="form-label">Borang Ujian Saringan HIV Pemohon:</label>
                <button class="btn btn-primary" onclick="window.print()">Print</button>
                <input class="form-control" type="file" id="formFile"><br>
                </div>  
                 
                 
            </form>
                
            
    </div>
    <br>
    <button>Kembali</button>
    <button>Seterusnya</button>
    <button>Simpan</button>
    </div>
</div>

</body>
</html>