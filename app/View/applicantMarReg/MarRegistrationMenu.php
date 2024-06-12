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
    <!-- Custom CSS -->
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
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <form action="../../../app/View/applicantMarReg/husbandForm.php" method="GET">
                    <div class="text-center mb-4">
                        <h1>DAFTAR PERKAHWINAN</h1>
                    </div>
                    <div class="mb-3 row">
                        <label for="kategori" class="col-sm-4 col-form-label">Kategori daftar perkahwinan: </label>
                        <div class="col-sm-8">
                            <select id="kategori" name="kategori" class="form-control" required>
                                <option disabled selected value>Sila pilih kategori</option>
                                <option value="luar/dalam">Perkahwinan di dalam/luar negara</option>
                                <option value="sukarela">Perkahwinan sukarela</option>
                            </select>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Teruskan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        h1 {
            color: #000;
            font-size: 2rem;
            font-weight: bold;
        }

        .form-control {
            color: black;
            background-color: #fff;
            border-radius: 1rem;
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

        .btn:active {
            background-color: #38EBD0;
            box-shadow: 0 1px #666;
            transform: translateY(4px);
        }

        .container {
            max-width: 800px;
        }

        .card {
            border: 2px solid black;
            background-color: #D9D9D9;
        }

        .card-body {
            padding: 2rem;
        }

        @media (max-width: 768px) {
            .col-form-label {
                text-align: center;
            }
        }
    </style>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>
</html>
