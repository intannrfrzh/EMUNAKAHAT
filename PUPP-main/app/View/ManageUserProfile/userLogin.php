<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>userLogin</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../Bootstrap/mdb.min.css" />

  <!-- CSS -->
  <style>
    body {
      background-color: #f2f2f2;
    }

    .container-content {
      border: 2px solid black;
      background-color: #d9d9d9;
      width: 75%;
      padding: 20px;
      margin: 0 auto;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      font-weight: bold;
    }

    .form-group input[type="text"],
    .form-group select {
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-submit {
      text-align: center;
      margin-top: 30px;
    }

    .form-submit input[type="submit"] {
      padding: 10px 30px;
      border-radius: 5px;
      background-color: green;
      color: white;
      border: none;
      cursor: pointer;
    }

    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    form {
      border: 3px solid #f1f1f1;
    }

    input[type=text],
    input[type=password] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }

    button {
      background-color: #04AA6D;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      opacity: 0.8;
    }

    .cancelbtn {
      width: auto;
      padding: 10px 18px;
      background-color: #f44336;
    }

    .imgcontainer {
      text-align: center;
      margin: 24px 0 12px 0;
    }

    .avatar-icon {
      font-size: 100px;
      color: #333;
    }

    .container {
      padding: 16px;
    }

    span.psw {
      float: right;
      padding-top: 16px;
    }

    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
        display: block;
        float: none;
      }

      .cancelbtn {
        width: 100%;
      }
    }

    .section-separator {
      border-top: 2px solid black;
      margin: 20px 0;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .button-container a {
      flex: 1;
      margin: 0 5px;
      display: inline-block;
      text-align: center;
      padding: 10px 5px;
      /* Adjust the padding values as needed */
      border-radius: 5px;
      background-color: green;
      color: white;
      text-decoration: none;
      font-size: 14px;
      /* Adjust the font size as needed */
    }

    /* Added styles */
    .center {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .inline-link {
      margin: 0 10px;
      display: inline-block;
    }

    .button-submit {
      flex: 1;
      margin: 0 5px;
      display: inline-block;
      text-align: center;
      padding: 10px 5px;
      /* Adjust the padding values as needed */
      border-radius: 5px;
      background-color: green;
      color: white;
      text-decoration: none;
      font-size: 14px;
    }
  </style>
</head>

<body>

  <!-- heading -->
  <?php include_once('../../View/Common/headingRegister.html'); ?>

  <!-- main content -->
  <form action="action_page.php" method="post">
    <div class="imgcontainer">
      <i class="fas fa-user avatar-icon"></i>
    </div>

    <div class="container">
      <label for="applicant_IC"><b>No. Kad Pengenalan</b></label>
      <input type="text" placeholder="Masukkan No. Kad Pengenalan" name="ic" required>

      <label for="applicant_password"><b>Kata Laluan</b></label>
      <input type="password" placeholder="Masukkan Kata Laluan" name="password" required>

      <label for="account-type">Jenis Akaun:</label>
      <select name="account-type" id="account-type" required>
        <option value="Pengguna">Pemohon</option>
        <option value="Staf">Staf</option>
        <option value="Admin">Admin</option>
      </select>
      <br><br>

      <div class="text-center">
        <script>
          function goToNewInterface() {
            window.location.href = "userProfileView.php";
          }
        </script>
        <a class="btn btn-primary" href="#" onclick="goToNewInterface()">Masuk</a>
      </div>

      <div>
        <label>
          <input type="checkbox" checked="checked" name="remember"> Ingat Butiran
        </label>
      </div>
    </div>

    <div class="center">
      <!-- Registration -->
      <a href="../ApplicantRegistration/registration.php">Daftar Pengguna</a>
    </div>

    <div class="center">
      <!-- Forgot password -->
      <a href="../ManageUserProfile/userForgotPassword.php">Lupa katalaluan?</a>
    </div>

  </form>

  <script>
    function goToNewInterface() {
      var accountType = document.getElementById("account-type").value;
      if (accountType === "Staf") {
        window.location.href = "../staffIncentive/listView.php"; // Replace "staffPage.html" with the actual URL of the staff page
      } else {
        window.location.href = "userProfileView.php"; // Replace "userProfileView.php" with the actual URL of the user profile page
      }
    }
  </script>


</body>

</html>