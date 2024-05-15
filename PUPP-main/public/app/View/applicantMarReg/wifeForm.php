<?php
require_once '../../../app/Config/database.php';
require_once '../../../app/Model/M3model.php';

//require controller
require_once '../../../app/Controller/M3controller/userMarRegController.php';
require_once '../../../app/Controller/M3controller/staffMarRegController.php';
$db = (new Database())->connect();

$select = "SELECT * FROM partners3 WHERE partner_IC = '760630120866'";
    $result = mysqli_query($connect,$select);
    $array = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>PPUP</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../Bootstrap//mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../css/userView.css">
</head>

<body style="background-color: white;">
    <!-- Start your project here-->

    <!-- heading -->

    <?php

    include_once '../../View/Common/heading.html';
    ?>

    <!-- sidebar -->

    <?php
    include_once '../../View/Common/sidebar.php';
    ?>

    <!-- main content -->

    <!--MARRIAGE REGISTRATION WIFE FORM-->
    <div style="border: 2px solid black; background-color: #D9D9D9; height: auto;" class="container-content w-75 p-3 ">

        <form>
            <div style="height: auto; position: relative; top: 20px;"
                class="row mb-3 postion-input d-flex justify-content-center">

                <!-- Your content of input here -->
                <!--navigation bar for form-->
                <center>
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" href="../../../app/View/applicantMarReg/wifeForm.php">MAKLUMAT SUAMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page"
                                href="../../../app/View/applicantMarReg/wifeForm.php">MAKLUMAT ISTERI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../app/View/applicantMarReg/marriageForm.php">MAKLUMAT
                                PERKAHWINAN</a>
                        </li>
                    </ul>
                </center>

                <form>
                    <div class="row mb-3">
                        <label for="partner_IC" class="col-sm-2 col-form-label">No. Kad Pengenalan : </label>
                        <div class="col-sm-10">
                            <input type="text" name="partner_IC" id="partner_IC" class="form-control" value="<?php echo $array['partner_IC']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_name" class="col-sm-2 col-form-label">Nama Isteri : </label>
                        <div class="col-sm-10">
                            <input type="text" name="partner_name" id="partner_name" class="form-control" value="<?php echo $array['partner_Name']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_DOB" class="col-sm-2 col-form-label">Tarikh Lahir : </label>
                        <div class="col-sm-10">
                            <input type="date" name="partner_DOB" id="partner_DOB" class="form-control" value="<?php echo $array['partner_DOB']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_age" class="col-sm-2 col-form-label">Umur : </label>
                        <div class="col-sm-10">
                            <input type="text" name="partner_age" id="partner_age" class="form-control" value="<?php echo $array['partner_age']; ?>" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_race" class="col-sm-2 col-form-label">Bangsa : </label>
                        <div class="col-sm-10">
                            <select id="dropdown" name="partner_race" class="form-control" value="<?php echo $array['partner_race']; ?>" required>
                                <option value="M">MELAYU</option>
                                <option value="C">CINA</option>
                                <option value="I">INDIA</option>
                                <option value="L">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_Nationality" class="col-sm-2 col-form-label">Warganegara : </label>
                        <div class="col-sm-10">
                            <select id="dropdown" name="partner_Nationality" class="form-control" value="<?php echo $array['partner_Nationality']; ?>" required>
                                <option value="W">WARGANEGARA</option>
                                <option value="B">BUKAN WARGANEGARA</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_level_education" class="col-sm-2 col-form-label">Taras Pendidikan : </label>
                        <div class="col-sm-10">
                            <select id="dropdown" name="partner_level_education" class="form-control" value="<?php echo $array['partner_level_education']; ?>" required>
                                <option value="SR">SEKOLAH RENDAH</option>
                                <option value="SR">SEKOLAH MENENGAH</option>
                                <option value="SIJ">SIJIL</option>
                                <option value="DIP">DIPLOMA</option>
                                <option value="DEG">DEGREE</option>
                                <option value="MAS">MASTER</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_work_sector" class="col-sm-2 col-form-label">Sektor Pekerjaan : </label>
                        <div class="col-sm-10">
                            <select id="dropdown" name="partner_work_sector" class="form-control" value="<?php echo $array['partner_work_sector']; ?>" required>
                                <option value="K">KERAJAAN</option>
                                <option value="S">SWASTA</option>
                                <option value="L">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="wife_Job" class="col-sm-2 col-form-label">Nama Pekerjaan : </label>
                        <div class="col-sm-10">
                            <input type="text" name="partner_Job" id="partner_Job"
                                class="form-control" value="<?php echo $array['partner_Job']; ?>" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_income" class="col-sm-2 col-form-label">Pendapatan : </label>
                        <div class="col-sm-10">
                            <input type="text" name="partner_income" id="partner_income" class="form-control"
                            value="<?php echo $array['partner_income']; ?>"required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_Address" class="col-sm-2 col-form-label">Alamat Semasa : </label>
                        <div class="col-sm-10">
                            <input type="text" name="partner_Address" id="partner_Address" class="form-control"
                            value="<?php echo $array['partner_Address']; ?>" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_birthplace" class="col-sm-2 col-form-label">Alamat Dalam K/P : </label>
                        <div class="col-sm-10">
                            <input type="text" name="partner_birthplace" id="partner_birthplace" class="form-control"
                            value="<?php echo $array['partner_birthplace']; ?>" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_phone_number" class="col-sm-2 col-form-label">No. Telefon : </label>
                        <div class="col-sm-10">
                            <input type="text" name="partner_phone_number" id="partner_phone_number"
                                class="form-control" value="<?php echo $array['partner_phone_number']; ?>"required />
                        </div>
                    </div>
            </div>
            <!--button-->
            <button type="submit" class="btn">
                <a class="text-light" href="../../../app/View/applicantMarReg/husbandForm.php">Kembali</a>
            </button>
            <button type="submit" class="btn">
                <a class="text-light" href="../../../app/View/applicantMarReg/MarriageForm.php">Teruskan</a>
            </button>
        </form>


    </div>




    <!-- Your content of input here -->




    </div>

    <style>
        h1 {
            text-align: center;
            padding: 20px;
            color: #000;
            font-size: 50px;
            font-weight: bold;
        }

        /* .form-control {
            color: black;
            background-color: #fff;
            border-radius: 1rem;
            width: 100%;
            height: auto;
            padding: 0.7rem;
            margin: 0.625rem;
        }*/

        label {
            font-weight: bold;
            font-size: 20px;
        }

        .btn {
            background-color: #1e72b0;
            color: white;
            border-radius: 0.5rem;
            cursor: pointer;
            width: auto;
            height: 10%;
            opacity: 0.9;
            font-size: 20px;
            font-weight: bold;
            position: relative;
            left: 78%;
            bottom: 0px;
        }

        .btn:hover {
            opacity: 3;
        }

        .btn:active {
            background-color: #38EBD0;
            box-shadow: 0 1px #666;
            transform: translateY(4px);
        }

        .not-btn {
            border-radius: 10px;
            padding: 10px;
            margin: 20px;

        }

        .apply-btn {
            border-radius: 10px;
            padding: 10px;
            margin: 20px;
            background-color: green;
        }

        .container-content {
            height: 550px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .inner-content {
            text-align: center;
            border: 2px solid black;
            padding: 50px;
            border-radius: 20px;
            font-size: larger;
            color: black;
        }
    </style>




    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>