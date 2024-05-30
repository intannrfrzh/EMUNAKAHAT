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

      require ('../../Model/M4model.php')
    ?>

    <?php

      include_once ('../../View/Common/heading.html')
    ?>

    <!-- sidebar -->

    <?php
      include_once ('../../View/Common/sidebar.php')
    ?>
    
    <!-- main content -->

    <div style="border: 2px solid black; background-color: #D9D9D9;height:550px" class="container-content w-75 p-3">
      <form action="../../../public/index.php?action=groomsJob" id="grooms-job" method="post">
        <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">

          <section>
              <div style="border: 5px solid lightblue; background-color: #00FFFF;" class="container2 w-77 p-20 ">
                <h1 class="centered-text" ><b>PENASIHAT</b></h1>
              </div>
          </section>

          <!-- Pilih Penasihat -->
    
          <div class="row mb-3">
            <label for="staff_name" class="col-sm-2 col-form-label">Penasihat</label>
            <div class="col-sm-4">
              <select id="dropdown" name="dropdown" class="form-control">
              <option value="">Pilih Penasihat</option>
                <?php
                  $options = array("Ali", "Aisyah", "Zahwan");
                  foreach ($options as $option) {
                    echo '<option value="' . $option . '">' . $option . '</option>';
                  }
                ?>
              </select>
            </div>
          </div>
    
          <!-- Sebab Penukaran -->
    
          <div class="row mb-3">
            <label for="changed_reason" class="col-sm-2 col-form-label">Sebab Penukaran</label>
            <div class="col-sm-4">
              <input name="changed_reason" type="text" class="form-control form-control-sm" id="changed_reason">
            </div>
          </div>
    
          <section>
              <div style="border: 5px solid lightblue; background-color: #00FFFF;" class="container2 w-77 p-20 ">
                <h1 class="centered-text" ><b>PERTUKARAN TARIKH</b></h1>
              </div>
          </section>

          <!-- Tarikh Baru -->
    
          <div class="row mb-3">
            <label for="requested_Date" class="col-sm-2 col-form-label">Tarikh Baru</label>
            <div class="col-sm-2">
              <input type="requested_Date" class="form-control form-control-sm" id="requested_Date">
            </div>
          </div>
    
          <button href="#" class="insert-btn" type="submit">SAVE</button>
        </div>
        </form>
    </div>

    <style>
      .insert-btn {
        width: 100px;
        position: relative;
        left: 400px;
      }
    </style>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>

   
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
