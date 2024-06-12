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
    <div style="border: 2px solid black; background-color: #D9D9D9; padding: 20px;" class="container-content w-75 ">

        <form>
            <div style="height: auto; position: relative; top: 20px;"
                class="row mb-3 postion-input d-flex justify-content-center">

                <!-- Your content of input here -->
                <h1>SEMAKAN STATUS PERMOHONAN</h1>

                <table border="1" cellspacing="0" align="center">
                    <tr>
                        <th>Bil</th>
                        <th>KP/Nama Suami</th>
                        <th>No. Slip Permohonan</th>
                        <th>Tarikh Mohon</th>
                        <th>Status</th>
                        <th>Operasi</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>7507210651/MOHAMAD YUNOS BIN MAN</td>
                        <td>123456789012</td>
                        <td>12/12/2021</td>
                        <td>Permohonan Diterima</td>
                        <td><a href="../../../app/View/applicantMarReg/husbandForm.php">Lihat</a></td>
                    </tr>

                </table>

            </div>

            <!-- button -->
            <br>
            <div style="text-align: center;">
                <button type="submit" class="btn">
                    <a class="text-light">Kemaskini</a>
                </button>
                <button type="submit" class="btn">
                    <a class="text-light" href="../../../app/View/applicantMarReg/MarRegistrationMenu.php">Teruskan</a>
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

        table {
            border-collapse: collapse;
            width: 00%;
            background-color: #fff;
        }

        td, th {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #666;
            color: white;
        }

        .btn {
            background-color: #1e72b0;
            color: white;
            border-radius: 0.5rem;
            cursor: pointer;
            width: auto;
            opacity: 0.9;
            font-size: 20px;
            font-weight: bold;
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
            padding-bottom: 20px;
        }
    </style>

    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
