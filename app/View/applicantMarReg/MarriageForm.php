<?php
require_once '../../../app/Config/database.php';
require_once '../../../app/Model/M3model.php';

//require controller
require_once '../../../app/Controller/M3controller/M3userController.php';
require_once '../../../app/Controller/M3controller/M3staffController.php';
$db = (new Database())->connect();

$select = "SELECT * FROM register_marriage WHERE M_app_ID = ''";
$result = mysqli_query($connect, $select);
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
    <link rel="stylesheet" href="../Common/sidebar.css">
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

    <!--MARRIAGE REGISTRATION MARRIAGE FORM -->
   

        <form>
        <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <form action="../../../public/index.php?action=husbandFormRet" id="husband-form" method="post">
                    <div class="text-center mb-4">
                        <h1>DAFTAR PERKAHWINAN</h1>
                    </div>
                    <ul class="nav nav-tabs justify-content-center mb-4">
                        <li class="nav-item">
                            <a class="nav-link" href="../../../app/View/applicantMarReg/husbandForm.php">MAKLUMAT SUAMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../app/View/applicantMarReg/wifeForm.php">MAKLUMAT ISTERI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../../app/View/applicantMarReg/marriageForm.php">MAKLUMAT PERKAHWINAN</a>
                        </li>
                    </ul>
                <form>
                    <p>Ruang yang bertanda(*) adalah ruang yang wajib diisi</p>

                    <h2>BUTIRAN PERKAHWINAN</h2>
                    <div class="row mb-3">
                        <label for="register-date" class="col-sm-2 col-form-label">Tarikh Mohon : </label>
                        <div class="col-sm-10">
                            <input type="date" name="register_date" id="register_date" class="form-control" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="husband_name" class="col-sm-2 col-form-label">Nama Suami : </label>
                        <div class="col-sm-10">
                            <input type="text" name="husband_name" id="husband_name" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wife_name" class="col-sm-2 col-form-label">Nama Isteri : </label>
                        <div class="col-sm-10">
                            <input type="text" name="wife_name" id="wife_name" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="marriage-date" class="col-sm-2 col-form-label">Tarikh Akad Nikah : </label>
                        <div class="col-sm-10">
                            <input type="date" name="marriage_date" id="marriage_date" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="marriage-time" class="col-sm-2 col-form-label">Masa Akad Nikah : </label>
                        <div class="col-sm-10">
                            <input type="time" name="marriage_time" id="marriage_time" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="marriage-place" class="col-sm-2 col-form-label">Tempat akad Nikah : </label>
                        <div class="col-sm-10">
                            <input type="text" name="marriage_place" id="marriage_place" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="dowry-type" class="col-sm-2 col-form-label">Jenis Mas Kahwin : </label>
                        <div class="col-sm-10">
                            <select name="dowry_type" id="dropdown">
                                <option value="TUNAI">TUNAI</option>
                                <option value="EMAS">EMAS</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="dowry-amount" class="col-sm-2 col-form-label">Mas Kahwin : </label>
                        <div class="col-sm-10">
                            <input type="text" name="dowry_amount" id="dowry_amount" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="gift-amount" class="col-sm-2 col-form-label">Hantaran : </label>
                        <div class="col-sm-10">
                            <input type="text" name="gift_amount" id="gift_amount" class="form-control" required />
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="other-gift" class="col-sm-2 col-form-label">Pemberian Lain : </label>
                        <div class="col-sm-10">
                            <input type="text" name="other_gift" id="other_gift" class="form-control" />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="solemnizer-name" class="col-sm-2 col-form-label">Nama Jurunikah : </label>
                        <div class="col-sm-10">
                            <input type="text" name="solemnizer_name" id="solemnizer_name" class="form-control"
                                required />
                        </div>
                    </div>

                    <h2>BUTIRAN WALI</h2>
                    <div class="row mb-3">
                        <label for="wali-name" class="col-sm-2 col-form-label">Nama wali : </label>
                        <div class="col-sm-10">
                            <input type="text" name="wali_name" id="wali_name" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wali-ic" class="col-sm-2 col-form-label">No. Kad Pengenalan : </label>
                        <div class="col-sm-10">
                            <input type="text" name="wali_IC" id="wali_IC" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wali-age" class="col-sm-2 col-form-label">Umur : </label>
                        <div class="col-sm-10">
                            <input type="text" name="wali_age" id="wali_age" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wali-address" class="col-sm-2 col-form-label">Alamat : </label>
                        <div class="col-sm-10">
                            <input type="text" name="wali_address" id="wali_address" class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wali-phone-number" class="col-sm-2 col-form-label">No. Telefon : </label>
                        <div class="col-sm-10">
                            <input type="text" name="wali_phone_number" id="wali_phone_number" class="form-control"
                                required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="wali-relationship" class="col-sm-2 col-form-label">Hubungan Dengan Pengantin :
                        </label>
                        <div class="col-sm-10">
                            <select id="dropdown" name="wali_relationship" class="form-control" required>
                                <option value="ABG">ABANG</option>
                                <option value="ADK">ADIK</option>
                                <option value="BP">BAPA</option>
                                <option value="DTK">DATUK</option>
                                <option value="WL">LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>

                    <h2>BUTIRAN SAKSI</h2>

                    <div class="row mb-3">
                        <label for="witness1-name" class="col-sm-2 col-form-label">Nama Saksi 1 : </label>
                        <div class="col-sm-10">
                            <input type="text" name="witness1_name" id="witness1_name" class="form-control" required />
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="witness1-ic" class="col-sm-2 col-form-label">No. Kad Pengenalan : </label>
                        <div class="col-sm-10">
                            <input type="text" name="witness1_IC" id="witness1_IC" class="form-control" required />
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="witness1-phonenum" class="col-sm-2 col-form-label">No. Telefon : </label>
                        <div class="col-sm-10">
                            <input type="text" name="witness1_phone_number" id="witness1_phone_number"
                                class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="witness1-address" class="col-sm-2 col-form-label">Alamat : </label>
                        <div class="col-sm-10">
                            <input type="text" name="witness1_address" id="witness1_address" class="form-control"
                                required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="witness2-name" class="col-sm-2 col-form-label">Nama Saksi 2 : </label>
                        <div class="col-sm-10">
                            <input type="text" name="witness2_name" id="witness2_name" class="form-control" required />
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="witness2-ic" class="col-sm-2 col-form-label">No. Kad Pengenalan : </label>
                        <div class="col-sm-10">
                            <input type="text" name="witness2_IC" id="witness2_IC" class="form-control" required />
                        </div>
                    </div>


                    <div class="row mb-3">
                        <label for="witness2-phonenum" class="col-sm-2 col-form-label">No. Telefon : </label>
                        <div class="col-sm-10">
                            <input type="text" name="witness2_phone_number" id="witness2_phone_number"
                                class="form-control" required />
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="witness2-address" class="col-sm-2 col-form-label">Alamat : </label>
                        <div class="col-sm-10">
                            <input type="text" name="witness2_address" id="witness2_address" class="form-control"
                                required />
                        </div>
                    </div>
                </form>

            </div>
            <!--button-->
            <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-secondary">
                    <a class="text-light" href="../../../app/View/applicantMarReg/husbandForm.php">Kembali</a>
                </button>
                <button type="submit" class="btn btn-primary">
                    <a class="text-light" href="../../../app/View/applicantMarReg/DL_document.php">Teruskan</a>
                </button>
            </div>
        </form>


    </div>




    <!-- Your content of input here -->




    </div>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 800px;
        }

        .card {
            border-radius: 1rem;
        }

        .card-body {
            padding: 2rem;
        }

        h1 {
            color: #000;
            font-size: 2rem;
            font-weight: bold;
        }

        label {
            font-weight: bold;
            font-size: 1rem;
        }

        .btn {
            border-radius: 0.5rem;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
        }

        .btn a {
            color: white;
            text-decoration: none;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .nav-tabs .nav-item .nav-link.active {
            background-color: #007bff;
            color: white;
        }
    </style>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>