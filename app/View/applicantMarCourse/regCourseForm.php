<?php

//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "systemkahwin") or die(mysqli_error($link));


// SQL query with JOIN
$query = "SELECT * FROM course"
	or die(mysqli_connect_error());


          $result = mysqli_query($link, $query);

          if (mysqli_num_rows($result) > 0) {
              $row = mysqli_fetch_assoc($result);
              $c_organizer = $row['course_organizer'];
              $c_place = $row['course_place'];
              $c_date = $row['course_date'];
              
              // Fetching the rest of the rows (optional)
              // You can remove this loop if you only need the first row
              while ($row = mysqli_fetch_assoc($result)) {
                  // Additional processing or assignments if needed
              }


   

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
                <h3> PENDAFTARAN KURSUS KAHWIN  </h3>  
        </div>
             <div class="content-text2">
                <form>
                <p> Anjuran:<?php echo $c_organizer; ?></p><br>
                <p> Tempat: <?php echo $c_place; ?> </p><br>
     
                <p> Tarikh: <?php echo $c_date; ?>  </p><br>

                <div>
                    <label for="ic"><b>No.Kad Pengenalan:</b></label>
                    <input type="text" id="ic" name="ic"><br><br>
                </div>

                <div>
                    <label for="name"><b>Nama Pemohon:</b></label>
                    <input type="text" id="name" name="name"><br><br>
                 </div>
                
                 <div>
                    <label for="address"><b>Alamat Surat Menyurat:</b></label>
                    <textarea id="subject" name="subject"  style="height: 3px 0px"></textarea><br><br>
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
                    <label for="daerah"><b>Daerah:</b></label>
                    <input type="text" id="daerah" name="daerah"><br><br>
                 </div>
             
                 <div>
                 <label for="pekerjaan"><b>Sektor Pekerjaan:</b></label>
                <select id="pekerjaan" name="pekerjaan">
                <option value="semua">Sektor Awam</option>
                <option value="pahang">Sektor Swasta</option>
                </select><br><br>
                 </div>

                 <div>
                    <label for="pendidikan"><b>Tahap Pendidikan:</b></label>
                    <input type="text" id="pendidikan" name="pendidikan"><br><br>
                 </div>

                 <div>
                 <label for="jantina"><b>Jantina:</b></label>
                <select id="jantina" name="jantina">
                <option value="semua">Lelaki</option>
                <option value="pahang">Perempuan</option>
                </select><br><br>
                 </div>

                 <div>
                    <label for="nombor"><b>No.Telefon:</b></label>
                    <input type="text" id="nombor" name="nombor"><br><br>
                 </div>
                
                 <div>
                 <input type="checkbox" id="terma" name="terma" value="Terma">
                <label for="terma"> Saya telah membaca dan faham terma dan peraturan yang telah ditetapkan, dan bersetuju untuk menyertai Taklimat Khas Pra-Perkahwinan Islam ini</label><br>
                </div>
                 
            </form>
            <?php
                
                } else {
                    echo "0 results";

                    }
                    // Close the database connection
                  mysqli_close($link);
                  ?>
            
           
            
    </div>
    <br>

    <button type=submit>
        <a  href="../../../app/View/applicantMarCourse/viewOrgList.php">KEMBALI</a>
    </button>

    <button type=submit>
        <a  href="../../../app/View/applicantMarCourse/proofPayment.php">SETERUSNYA</a>
    </button>
    </div>
</div>

</body>
</html>