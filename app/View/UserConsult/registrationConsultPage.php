<?php
require_once '../../../app/Config/database.php';
//require_once '../../../app/Model/M4model.php';
//equire controller
require_once '../../../app/Controller/M4controller/M4userController.php';

$db = (new Database())->connect();

$select = "SELECT * FROM applicant3 WHERE applicant_IC = '7507210651'";
    $result = mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($result);

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>PPNP</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../../mdb/css/mdb.min.css" />
  <!-- CSS link -->
  <link rel="stylesheet" href="../Common/userView.css">
  <link rel="stylesheet" href="../Common/sidebar.css">



</head>
<body>
  <?php
    require ('../../Model/M4model.php');
    include_once ('../../View/Common/heading.html');
    include_once ('../../View/Common/sidebar.php');
  ?>

  <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3">
    <form action="/index.php?action=registrationConsultInfo" id="regConsult-form" method="POST">
      <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">
        <section>
          <div style="border: 5px solid lightblue; background-color: #00FFFF;" class="container2 w-77 p-20">
          <center><h1 class="centered-text"><b>MAKLUMAT PEMOHON</b></h1></center>
          </div>
        </section>

        <!-- Registration form fields -->
        <div class="row mb-3">
          <label for="applicant_IC" class="col-sm-2 col-form-label">No K/P / No Passport</label>
          <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" id="applicant_IC" name="applicant_IC" value="<?php echo $array['applicant_IC']; ?>" required>
          </div>
        </div>

        <!-- Bangsa Pemohon -->

        <div class="row mb-3">
            <label for="applicant_name" class="col-sm-2 col-form-label">Nama Pemohon</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="applicant_Name" name="applicant_Name" value="<?php echo $array['applicant_Name']; ?>" required>
            </div>
          </div>

          <?php
$select1 = "SELECT * FROM partners3 WHERE partner_IC = '760630120866'";
$result1 = mysqli_query($connect,$select1);
$array1 = mysqli_fetch_assoc($result1);
          ?>

        <section>
          <div style="border: 5px solid lightblue; background-color: #00FFFF;" class="container2 w-77 p-20">
          <center><h1 class="centered-text"><b>MAKLUMAT PASANGAN</b></h1></center>
          </div>
        </section>
    
          <!-- ic Pasangan -->
          <div class="row mb-3">
            <label for="partnerIC" class="col-sm-2 col-form-label">No K/P / No Passport</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="partner_IC" name="partner_IC" value="<?php echo $array1['partner_IC']; ?>"required>
            </div>
          </div>

          <!-- nama Pasangan -->
          <div class="row mb-3">
            <label for="partnerName" class="col-sm-2 col-form-label">Nama Pasangan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="partner_Name" name="partner_Name" value="<?php echo $array1['partner_Name']; ?>"required>
            </div>
          </div>

        <section>
          <div style="border: 5px solid lightblue; background-color: #00FFFF;" class="container2 w-77 p-20">
            <center><h1 class="centered-text"><b>INFO ADUAN / KHIDMAT NASIHAT</b></h1></center>
          </div>
        </section>

                                                
                                                <div class="row mb-3">
                                                    <tr>
                                                        <th><label for="aduan" class="col-sm-2 col-form-label">Aduan/Khidmat Nasihat:&nbsp;</label></th>
                                                        <div class="col-sm-7">
                                                        <td><select name="consultationType" id="consultationType" class="form-control">
                                                                <option value="Aduan">Aduan</option>
                                                                <option value="Khidmat Nasihat">Khidmat Nasihat</option>
                                                                </div>
                                                            </select>
                                                    </tr>
                                                  </div>
                                                  <div class="row mb-3">
                                                    <tr>
                                                        <th><label for="Description" class="col-sm-2 col-form-label">Maklumat Aduan/Khidmat Nasihat:&nbsp;</label></th>
                                                        <div class="col-sm-4">
                                                        <td><textarea name="Description" id="Description" cols="100" rows="10" ></textarea></td>
                                                        </div>
                                                    </tr>
                                                    </div>

                                                    <section>
          <div style="border: 5px solid lightblue; background-color: #00FFFF;" class="container2 w-77 p-20">
            <center><h1 class="centered-text"><b>TEMPAH MASA SESI KONSULTASI</b></h1></center>
          </div>
        </section>
        <tr>

                                                            <center><table>
                                                            <td><input type="radio" name="request_DateTime" value="2024-10-09T08:00" id="request_DateTime">
                                                                <label for="request_DateTime">9 OCTOBER 2024, JAM 0800 - JAM1000</label><br><br>
                                                                <input type="radio" name="request_DateTime" value="2024-10-09T014:00"id="request_DateTime">
                                                                <label for="request_DateTime">9 COTOBER 2024, JAM 1400 - JAM1600</label><br><br>
                                                                <input type="radio" name="request_DateTime" value="2024-10-10T08:00"id="request_DateTime">
                                                                <label for="request_DateTime">10 OCTOBER 2024, JAM 0800 - JAM1000</label><br><br>
                                                                <input type="radio" name="request_DateTime" value="2024-10-10T14:00"id="request_DateTime">
                                                                <label for="request_DateTime">10 OCTOBER 2024, JAM 1400 - JAM1600</label><br><br>
                                                                <input type="radio" name="request_DateTime" value="2024-10-11T08:00"id="request_DateTime">
                                                                <label for="request_DateTime">11 OCTOBER 2024, JAM 0800 - JAM1000</label><br><br>
                                                            </td>
                                                            </table></center>
                                                        </tr>

                                                    <center><button type="submit" class="btn btn-success">Success</button></center>
                                                    </form>

            </div>
          </div>
          
        
          <!-- DOB Pemohon --

          <div class="row mb-3">
            <label for="partnerBOD" class="col-sm-2 col-form-label">Tarikh Lahir</label>
            <div class="col-sm-2">
              <input type="date" class="form-control form-control-sm" id="applicant_DOB" name="applicant_DOB" required>
            </div>
          </div>
            
          <!-- Bangsa Pemohon --

          <div class="row mb-3">
            <label for="bangsa" class="col-sm-2 col-form-label">Bangsa</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="applicant_race" name="applicant_race" required>
            </div>
          </div>
    
          <!-- Alamat Semasa Pemohon --

          <div class="row mb-3">
            <label for="alamatSemasa" class="col-sm-2 col-form-label">Alamat Semasa</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="applicant_Address" name="applicant_Address" required>
            </div>
          </div>
   
          <!-- Phone Number Pemohon --
    
          <div class="row mb-3">
            <label for="noPhone" class="col-sm-2 col-form-label">No. Telefon</label>
            <div class="col-sm-2">
              <input type="text" class="form-control form-control-sm" id="applicant_phone_number" name="applicant_phone_number" required>
            </div>
          </div>

          <!-- Sektor Pekerjaan Pemohon --
    
          <div class="row mb-3">
            <label for="jobSector" class="col-sm-2 col-form-label">Sektor Pekerjaan</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-lg" id="applicant_Job" name="applicant_Job" required>
            </div>
          </div>
    
          <!-- Gaji Pemohon --
    
          <div class="row mb-3">
            <label for="income" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="applicant_Income" name="applicant_Income" required>
            </div>
          </div>

          <section>
            <div style="border: 5px solid lightblue; background-color: #00FFFF;" class="container2 w-77 p-20 ">
              <h1 class="centered-text" ><b>MAKLUMAT PASANGAN</b></h1>
            </div>
          </section>

          <!-- No Kad Pengenalan Pasangan --
    
          <div class="row mb-3">
            <label for="partnerIC" class="col-sm-2 col-form-label">No K/P / No Passport</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="partner_IC" name="partner_IC" required>
            </div>
          </div>
    
          <!-- Nama Pasangan --
    
          <div class="row mb-3">
            <label for="partnerName" class="col-sm-2 col-form-label">Nama Pasangan</label>
            <div class="col-sm-4">
              <input type="text" class="form-control form-control-sm" id="partner_Name" name="partner_Name" required>
            </div>
          </div>
   
          <!-- Tarikh Lahir Pasangan --
    
          <div class="row mb-3">
            <label for="partnerBOD" class="col-sm-2 col-form-label">Tarikh Lahir</label>
            <div class="col-sm-2">
              <input type="date" class="form-control form-control-sm" id="partner_DOB" name="partner_DOB" required>
            </div>
          </div>

          <!-- Bangsa Pasangan --
    
          <div class="row mb-3">
            <label for="race" class="col-sm-2 col-form-label">Bangsa</label>
            <div class="col-sm-8">
              <input type="text" class="form-control form-control-lg" id="partner_race" name="partner_race" required>
            </div>
          </div>
    
          <!-- Alamat Semasa Pasangan --
    
          <div class="row mb-3">
            <label for="partnerAddress" class="col-sm-2 col-form-label">Alamat semasa</label>
            <div class="col-sm-2">
              <input type="text" class="form-control form-control-sm" id="partner_Address" name="partner_Address" required>
            </div>
          </div>
    
          <!-- Phone Number Pasangan --
    
          <div class="row mb-3">
            <label for="partnerNoPhone" class="col-sm-2 col-form-label">No. Telefon</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="partner_phone_number" name="partner_phone_number" required>
            </div>
          </div>
    
          <!-- Sektor Pekerjaan Pasangan --
    
          <div class="row mb-3">
            <label for="partnerJobSector" class="col-sm-2 col-form-label">Sektor Pekerjaan</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="partner_Job" name="partner_Job" required>
            </div>
          </div>
          
          <!-- Gaji Pasangan --
    
          <div class="row mb-3">
            <label for="PartnerIncome" class="col-sm-2 col-form-label">Gaji</label>
            <div class="col-sm-3">
              <input type="text" class="form-control form-control-sm" id="partner_Income" name="partner_Income" required>
            </div>
          </div>-->

          
     

  <!-- Your JavaScript code here -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
</body>
</html>
