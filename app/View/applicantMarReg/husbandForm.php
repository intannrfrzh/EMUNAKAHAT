<?php
require_once '../../../app/Config/database.php';
require_once '../../../app/Model/M3model.php';
require_once '../../../app/Controller/M3controller/M3userController.php';
require_once '../../../app/Controller/M3controller/M3staffController.php';
$db = (new Database())->connect();

$select = "SELECT * FROM applicant3 WHERE applicant_IC = '7507210651'";
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
    <link rel="stylesheet" href="../../Bootstrap/mdb.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/userView.css">
    <link rel="stylesheet" href="../Common/sidebar.css">
</head>

<body style="background-color: white;">
    <!-- Start your project here-->
    <!-- heading -->
    <?php include_once '../../View/Common/heading.html'; ?>
    <!-- sidebar -->
    <?php include_once '../../View/Common/sidebar.php'; ?>
    <!-- main content -->
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <form action="../../../public/index.php?action=husbandFormRet" id="husband-form" method="post">
                    <div class="text-center mb-4">
                        <h1>DAFTAR PERKAHWINAN</h1>
                    </div>
                    <ul class="nav nav-tabs justify-content-center mb-4">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../../../app/View/applicantMarReg/husbandForm.php">MAKLUMAT SUAMI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../app/View/applicantMarReg/wifeForm.php">MAKLUMAT ISTERI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../../../app/View/applicantMarReg/marriageForm.php">MAKLUMAT PERKAHWINAN</a>
                        </li>
                    </ul>
                    <div class="row mb-3">
                        <label for="applicant_IC" class="col-sm-3 col-form-label">No. Kad Pengenalan :</label>
                        <div class="col-sm-9">
                            <input type="text" name="applicant_IC" id="applicant_IC" class="form-control" value="<?php echo $array['applicant_IC'] ?? ''; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_name" class="col-sm-3 col-form-label">Nama Suami :</label>
                        <div class="col-sm-9">
                            <input type="text" name="applicant_name" id="applicant_name" class="form-control" value="<?php echo $array['applicant_Name'] ?? ''; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_DOB" class="col-sm-3 col-form-label">Tarikh Lahir :</label>
                        <div class="col-sm-9">
                            <input type="date" name="applicant_DOB" id="applicant_DOB" class="form-control" value="<?php echo $array['applicant_DOB'] ?? ''; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_age" class="col-sm-3 col-form-label">Umur :</label>
                        <div class="col-sm-9">
                            <input type="text" name="applicant_age" id="applicant_age" class="form-control" value="<?php echo $array['applicant_age'] ?? ''; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_race" class="col-sm-3 col-form-label">Bangsa :</label>
                        <div class="col-sm-9">
                            <select id="dropdown" name="applicant_race" class="form-control" required>
                                <option value="M" <?php echo isset($array['applicant_race']) && $array['applicant_race'] == 'M' ? 'selected' : ''; ?>>MELAYU</option>
                                <option value="C" <?php echo isset($array['applicant_race']) && $array['applicant_race'] == 'C' ? 'selected' : ''; ?>>CINA</option>
                                <option value="I" <?php echo isset($array['applicant_race']) && $array['applicant_race'] == 'I' ? 'selected' : ''; ?>>INDIA</option>
                                <option value="L" <?php echo isset($array['applicant_race']) && $array['applicant_race'] == 'L' ? 'selected' : ''; ?>>LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_Nationality" class="col-sm-3 col-form-label">Warganegara :</label>
                        <div class="col-sm-9">
                            <select id="dropdown" name="applicant_Nationality" class="form-control" required>
                                <option value="W" <?php echo isset($array['applicant_Nationality']) && $array['applicant_Nationality'] == 'W' ? 'selected' : ''; ?>>WARGANEGARA</option>
                                <option value="B" <?php echo isset($array['applicant_Nationality']) && $array['applicant_Nationality'] == 'B' ? 'selected' : ''; ?>>BUKAN WARGANEGARA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_level_education" class="col-sm-3 col-form-label">Taras Pendidikan :</label>
                        <div class="col-sm-9">
                            <select id="dropdown" name="applicant_level_education" class="form-control" required>
                                <option value="SR" <?php echo isset($array['applicant_level_education']) && $array['applicant_level_education'] == 'SR' ? 'selected' : ''; ?>>SEKOLAH RENDAH</option>
                                <option value="SM" <?php echo isset($array['applicant_level_education']) && $array['applicant_level_education'] == 'SM' ? 'selected' : ''; ?>>SEKOLAH MENENGAH</option>
                                <option value="SIJ" <?php echo isset($array['applicant_level_education']) && $array['applicant_level_education'] == 'SIJ' ? 'selected' : ''; ?>>SIJIL</option>
                                <option value="DIP" <?php echo isset($array['applicant_level_education']) && $array['applicant_level_education'] == 'DIP' ? 'selected' : ''; ?>>DIPLOMA</option>
                                <option value="DEG" <?php echo isset($array['applicant_level_education']) && $array['applicant_level_education'] == 'DEG' ? 'selected' : ''; ?>>DEGREE</option>
                                <option value="MAS" <?php echo isset($array['applicant_level_education']) && $array['applicant_level_education'] == 'MAS' ? 'selected' : ''; ?>>MASTER</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_job_sector" class="col-sm-3 col-form-label">Sektor Pekerjaan :</label>
                        <div class="col-sm-9">
                            <select id="dropdown" name="applicant_work_sector" class="form-control" required>
                                <option value="K" <?php echo isset($array['applicant_work_sector']) && $array['applicant_work_sector'] == 'K' ? 'selected' : ''; ?>>KERAJAAN</option>
                                <option value="S" <?php echo isset($array['applicant_work_sector']) && $array['applicant_work_sector'] == 'S' ? 'selected' : ''; ?>>SWASTA</option>
                                <option value="L" <?php echo isset($array['applicant_work_sector']) && $array['applicant_work_sector'] == 'L' ? 'selected' : ''; ?>>LAIN-LAIN</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_income" class="col-sm-3 col-form-label">Pendapatan :</label>
                        <div class="col-sm-9">
                            <input type="text" name="applicant_income" id="applicant_income" class="form-control" value="<?php echo $array['applicant_income'] ?? ''; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_Address" class="col-sm-3 col-form-label">Alamat Semasa :</label>
                        <div class="col-sm-9">
                            <input type="text" name="applicant_Address" id="applicant_Address" class="form-control" value="<?php echo $array['applicant_Address'] ?? ''; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_birthPlace" class="col-sm-3 col-form-label">Alamat Dalam K/P :</label>
                        <div class="col-sm-9">
                            <input type="text" name="applicant_birthPlace" id="applicant_birthPlace" class="form-control" value="<?php echo $array['applicant_birthPlace'] ?? ''; ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="husband_phone_number" class="col-sm-3 col-form-label">No. Telefon :</label>
                        <div class="col-sm-9">
                            <input type="text" name="applicant_phone_number" id="applicant_phone_number" class="form-control" value="<?php echo $array['applicant_phone_number'] ?? ''; ?>" required>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-secondary">
                            <a class="text-light" href="../../../app/View/applicantMarReg/marRegistrationMenu.php">Kembali</a>
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <a class="text-light" href="../../../app/View/applicantMarReg/wifeForm.php">Teruskan</a>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>

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
