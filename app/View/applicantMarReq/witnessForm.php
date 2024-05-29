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
                <h3> PERMOHONAN KEBENARAN PERKAHWINAN   </h3>  
        </div>
             <div class="content-text2">
                <form>
                <p><b> MAKLUMAT SAKSI <b></p><br>
                
                <div>
                    <label for="ic"><b>No.Kad Pengenalan Saksi 1:</b></label>
                    <input type="text" id="ic" name="ic"><br><br>
                </div>

                 <div>
                    <label for="phonenum"><b>No.Telefon Saksi 1:</b></label>
                    <input type="text" id="phonenum" name="phonenum"><br><br>
                 </div>
    
                 <label for="address"><b>Alamat Saksi 1:</b></label>
                    <textarea id="subject" name="subject"  style="height: 3px 0px"></textarea><br><br>
                 </div>

                 <div>
                    <label for="ic2"><b>No.Kad Pengenalan Saksi 2:</b></label>
                    <input type="text" id="ic2" name="ic2"><br><br>
                </div>

                <div>
                    <label for="nama"><b>Nama Saksi 1:</b></label>
                    <input type="text" id="nama" name="nama"><br><br>
                </div>

                 <div>
                    <label for="phonenum"><b>No.Telefon Saksi 1:</b></label>
                    <input type="text" id="phonenum" name="phonenum"><br><br>
                 </div>
    
                 <label for="address"><b>Alamat Saksi 1:</b></label>
                    <textarea id="subject" name="subject"  style="height: 3px 0px"></textarea><br><br>
                 </div>

                 <div>
                    <label for="phonenum"><b>No.Telefon Saksi 1:</b></label>
                    <input type="text" id="phonenum" name="phonenum"><br><br>
                 </div>
    
                 <label for="address"><b>Alamat Saksi 1:</b></label>
                    <textarea id="subject" name="subject"  style="height: 3px 0px"></textarea><br><br>
                 </div>

                 <div>
                    <label for="nama"><b>Nama Saksi 2:</b></label>
                    <input type="text" id="nama" name="nama"><br><br>
                </div>

                 <div>
                    <label for="phonenum"><b>No.Telefon Saksi 2:</b></label>
                    <input type="text" id="phonenum" name="phonenum"><br><br>
                 </div>
    
                 <label for="address"><b>Alamat Saksi 2:</b></label>
                    <textarea id="subject" name="subject"  style="height: 3px 0px"></textarea><br><br>
                 </div>
                 <button>Kembali</button>
    <button>Seterusnya</button>
    <button>Simpan</button>
         
            </form>
                
            
    </div>
    <br>
    
    </div>
</div>

</body>
</html>