<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Daftar Perkahwinan</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css" />
    <!-- css link -->
    <link rel="stylesheet" href="../css/userView.css">
    <link rel="stylesheet" href="../Common/sidebar.css">
</head>

<body>
    <!-- Start your project here-->
    <?php
        include_once (__DIR__ . '/../Common/heading.html');
    ?>

    <!-- sidebar -->
    <?php
        include_once (__DIR__ . '/../Common/sidebar.php');
    ?>

    <!-- main content -->
    <!--MARRIAGE REGISTRATION MAIN MENU-->
    <div style="border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3 ">

        <form action="../../../app/View/applicantMarReg/husbandForm.php" method="GET">
            <div style="height: 520px;position: relative; top: 20px;"
                class="row mb-3 postion-input d-flex justify-content-center">

                <!-- Your content of input here -->
                <h1>DAFTAR PERKAHWINAN</h1>

                <div class="mb-3 row">
                    <label for="kategori" class="col-sm-2 col-form-label">Kategori daftar perkahwinan: </label>
                    <div class="col-sm-10">
                        <select id="kategori" name="kategori" class="form-control" required>
                            <option disabled selected value>Sila pilih kategori</option>
                            <option value="luar/dalam">Perkahwinan di dalam/luar negara</option>
                            <option value="sukarela">Perkahwinan sukarela</option>
                        </select>
                    </div>
                </div>

                <br>
                <button type="submit" class="btn">
                    Teruskan
                </button>

            </div>
        </form>
    </div>

    <style>
        h1 {
            text-align: center;
            padding: 20px;
            color: #000;
            font-size: 50px;
            font-weight: bold;
        }

        .form-control {
            color: black;
            background-color: #fff;
            border-radius: 1rem;
            width: 100%;
            height: auto;
            padding: 0.7rem;
            margin: 0.625rem;
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
            left: 35rem;
            bottom: 0px;
        }

        .btn:hover {
            opacity: 1;
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

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>
