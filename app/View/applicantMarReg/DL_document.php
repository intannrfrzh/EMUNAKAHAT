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

    <!--DALAM LUAR DOCUMENT UPLOAD-->

    <div style="border: 2px solid black; background-color: #D9D9D9; padding: 20px; width: 70%;" class="container-content">

        <form>
            <div style="height: auto; position: relative; top: 20px;"
                class="row mb-3 postion-input d-flex justify-content-center">

                <!-- Your content of input here -->
                <h1>DOKUMEN TAMBAHAN</h1>

                <p>1. Borang 3A/3B (Kebenaran Berkahwin)/ Borang 4 (Persetujuan dan Wakalah Wali) Asal</p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile01">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                </div>

                <p>2. Borang 5 (Catatan Akad Nikah)</p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile02">
                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
                </div>

                <p>3. Gambar Berukuran Passport (Latar Belakang Putih) 1 Keping Bagi Pengantin Lelaki Bersongkok</p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile03">
                    <label class="input-group-text" for="inputGroupFile03">Upload</label>
                </div>

                <p>4. Gambar Berukuran Passport (Latar Belakang Putih) 1 Keping Bagi Pengantin Perempuan Bertudung Gelap
                </p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile04">
                    <label class="input-group-text" for="inputGroupFile04">Upload</label>
                </div>

                <p>5. Salinan Kad Pengenalan Saksi-saksi Perkahwinan</p>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" id="inputGroupFile05">
                    <label class="input-group-text" for="inputGroupFile05">Upload</label>
                </div>



            </div>

            <!-- button -->
            <div style="text-align: left;">
            <button type="submit" class="btn">
                <a class="text-light">Kemaskini</a>
            </button>
            <button type="submit" class="btn">
                <a class="text-light" href="../../../app/View/applicantMarReg/payment.php">Teruskan</a>
            </button>
            </div>

        </form>
    </div>



    <!-- Your content of input here -->




    </div>

    <style>

.input-group-text {
    background-color: #1e72b0; /* Change to your desired color */
    color: white; /* Text color */
    border-color: #1e72b0; /* Border color */
}

        h1 {
            text-align: center;
            padding: 20px;
            color: #000;
            font-size: 50px;
            font-weight: bold;
        }

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
            top: 1rem;
            left: 40rem;
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