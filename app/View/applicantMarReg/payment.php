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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
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

    <!--MARRIAGE REGISTRATION PAYMENT-->
    <div style="border: 2px solid black; background-color: #D9D9D9; padding: 20px;" class="container-content w-50">

        <form>
            <div style="height: auto; position: relative; top: 20px;"
                class="row mb-3 postion-input d-flex justify-content-center">

                <!-- Your content of input here -->
                <h1>PEMBAYARAN UNTUK PENDAFTARAN PERKAHWINAN</h1>

                <div class="mb-3 row">
                    <label id="kategori" for="kategori" class="col-sm-12 col-form-label">Kategori daftar perkahwinan : </label>
                    <div class="col-sm-12">
                        <p>Sila tandakan kotak bagi jenis pembayaran yang ingin dilakukan</p>
                        <checkbox>
                            <input type="checkbox" name="marriage_app_payment" value="1">Pembayaran Pendaftaran Pernikahan (RM 45.00)
                            <br>
                            <input type="checkbox" name="marriage_card_payment" value="2">Pembayaran Kad Perakuan Pernikahan (RM 30.00)
                        </checkbox>

                        <br>
                        <a href="#">Sila klik di sini untuk mengarahkan anda ke tapak pembayaran</a>
                        <br>

                        <label>Sila lampirkan bukti pembayaran anda di sini</label>
                        <input type="file" name="payment_receipt" id="payment_receipt">
                    </div>
                </div>


                <br>
                <button type="submit" class="btn">
                    <a class="text-light" href="../../../app/View/applicantMarReg/userStatus.php">Teruskan</a>
                </button>

            </div>
        </form>
    </div>

    <style>
        h1 {
            text-align: center;
            padding: 20px;
            color: #000;
            font-size: 30px;
            font-weight: bold;
        }

        label {
            font-weight: bold;
            font-size: 18px;
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
            left: 40%;
            transform: translateX(-50%);
            margin-top: 20px;
        }

        .btn:hover {
            opacity: 3;
        }

        .btn:active {
            background-color: #38EBD0;
            box-shadow: 0 1px #666;
            transform: translateY(4px);
        }

        .container-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-bottom: 10px;
        }
    </style>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
