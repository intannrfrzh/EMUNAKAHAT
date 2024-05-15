<?php

include '../../Config/connect.php';

// $sql = "SELECT * FROM incentive_list";
// $result  = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Complaint list</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../Bootstrap/mdb.min.css" />

  <!-- css link -->
  <link rel="stylesheet" href="../css/userView.css">
</head>

<body style="background-color: white;">
  <!-- Start your project here-->

  <!-- heading -->

  <?php

  include_once('../../View/Common/heading.html');
  ?>

  <!-- sidebar -->

  <?php
  include_once('../../View/Common/sidebarstaff.php');
  ?>

  <!-- main content -->

  <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3 ">
    <div class="container">

    <!-- this is for search function -->
      <div style="width: 200px;" class="mb-3">
        <label for="searchInput" class="form-label">Search:</label>
        <input type="text" id="searchInput" class="form-control">
      </div>

      <!-- this is table for list of incentive form -->
      <table class="table" style="text-align: center;">
        <thead>
          <tr>
            <th scope="col">Incentive ID</th>
            <th scope="col">Applicant Name</th>
            <th scope="col">Submit Date</th>
            <th scope="col">IC number</th>
            <th scope="col">Complaint status</th>
            <th scope="col">Operations</th>
          </tr>
        </thead>
        <tbody>

          <?php
          include_once('../../Bootstrap/test.php');
          ?>



        </tbody>
      </table>
    </div>
  </div>


  <!-- this is javascript for search function -->
  <script>
    $(document).ready(function() {
      // Retrieve the table rows
      var rows = $('.table tbody tr');

      $('#searchInput').on('input', function() {
        var searchValue = $(this).val().toLowerCase();

        // Filter the rows based on the search term
        rows.filter(function() {
          $(this).toggle($(this).text().toLowerCase().indexOf(searchValue) > -1);
        });
      });
    });
  </script>

  <!-- End your project here-->

  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>

</html>




