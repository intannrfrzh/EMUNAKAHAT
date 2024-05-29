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
      include_once ('../../View/Common/sidebarstaff.php')
    ?>
    
    <!-- main content -->

    <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3 ">
      <form>
        <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">

    <div class="wrap">
    <div class="content">
        <div class="menu-form">
                <h3> SENARAI PERMOHONAN KURSUS KAHWIN </h3>  
        </div>
        <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        <table>
                    <tr>
                        <th>Bil</th>
                         <th>Nama Pemohon</th>
                         <th>No.Slip Permohonan</th>
                         <th>Tarikh Mohon</th>
                         <th>Status</th>
                         <th>Operasi</th>
                     </tr>
                     <tr>
                        <td>1</td>
                        <td>Ali bin Abu</td>
                        <td>M2/2022/03</td>
                        <td>2022-06-15</td>
                        <td>TELAH HANTAR</td>
                        <td><button>Lihat</button><button>Sahkan</button><button>Tolak</button></td>
                     </tr>
                    </table> 
    </form>
        <div class="content-text">
            
    
    <button>Kembali</button>  
    <button>Seterusnya</button> 
    
    </div>
   
</div>

</div>
       
</div>
     
</body>
</html>