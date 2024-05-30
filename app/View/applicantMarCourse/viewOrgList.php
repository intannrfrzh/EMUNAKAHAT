<?php
//Connect to the database server.
$link = mysqli_connect("localhost", "root", "") or die(mysqli_connect_error());

//Select the database.
mysqli_select_db($link, "systemkahwin") or die(mysqli_error($link));



//SQL query
$query = "SELECT * FROM course"
	or die(mysqli_connect_error());

    $result = mysqli_query($link,$query);

   


       if (mysqli_num_rows($result) > 0) {
        // Output data of each row
        while($row = mysqli_fetch_assoc($result)) {
          // Assign the values to variables
          $c_organizer = $row['course_organizer'];
          $c_place = $row['course_place'];
          $c_date = $row['course_date'];
          $c_cap = $row['course_capacity'];
          $c_availability = $row['course_available'];
          ?>
          
          


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>viewOrgList</title>
  
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
    <link rel="stylesheet" href="../css/userView.css"> 
    <link rel="stylesheet" href="../Common/sidebar.css">
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
                <h3> PENDAFTARAN KURSUS KAHWIN  </h3>  
        </div>
             <div class="content-text2">
                <p>Pilih Anjuran <p>
                <div>
                <select id="anjuran" name="program">
                <option value="semua">SEMUA PEJABAT AGAMA DAERAH</option>
                <option value="pahang">JABATAN AGAMA ISLAM NEGERI PAHANG</option>
                <option value="bentong">JABATAN AGAMA ISLAM BENTONG</option>
                <option value="bera">JABATAN AGAMA ISLAMA BERA</option>
                </select><br><br>
                 </div>
             
                 <table>
                    <tr>
                        
                         <th>Anjuran</th>
                         <th>Tempat</th>
                         <th>Tarikh</th>
                         <th>Kapasiti Peserta </th>
                         <th>Kekosongan</th>
                         <th>Papar Lanjut</th>
                         <th>Daftar Penyertaan</th>
                     </tr>

                   
                     <?php while ($row = mysqli_fetch_assoc($result)): ?>
    <tr>
        <td><?php echo $row['course_organizer']; ?></td>
        <td><?php echo $row['course_place']; ?></td>
        <td><?php echo $row['course_date']; ?></td>
        <td><?php echo $row['course_capacity']; ?></td>
        <td><?php echo $row['course_available']; ?></td>
        <td><button>PAPAR</button></td>
        <td><button>DAFTAR</button></td>
    </tr>
<?php endwhile; ?>


                    
                    </table>  
                    <?php
                }
                } else {
                    echo "0 results";

                    }
                    // Close the database connection
                  mysqli_close($link);
                  ?>
            
                </div>
    <br>
    
    
    <button type=submit>
        <a  href="../../../app/View/applicantMarCourse/viewTerms.php">KEMBALI</a>
    </button>

    <button type=submit>
        <a  href="../../../app/View/applicantMarCourse/regCourseForm.php">SETERUSNYA</a>
    </button>


    </div>
</div>

</body>
</html>