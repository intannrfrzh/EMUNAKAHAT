<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>View Bantuan</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="../../Bootstrap/mdb.min.css" />

    <!-- css link -->
    <link rel="stylesheet" href="../css/userView.css">




</head>

<body style="background-color: white; ">
    <!-- Start your project here-->

    <!-- heading -->

    <?php

    include_once(__DIR__ . '/../../View/Common/heading.html');
    ?>

    <!-- sidebar -->

    <?php
    include_once(__DIR__ . '/../../View/Common/sidebarstaff.php');
    ?>

    <!-- main content -->

    <!-- user information -->

    <!-- start for the content of the input -->


    <div style="height:1700px ;border: 2px solid black; background-color: #D9D9D9;" class="container-content w-75 p-3 ">

        <div style="position: relative; left:450px;margin-bottom:50px">
            <p style="color: black;">View Bantuan Perkahwinan</p>
        </div>

        <h3><u>User Information</u></h3>

        <form id="user-form" method="post">
            <div style="position: relative; top: 20px;" class="row mb-3 postion-input d-flex justify-content-center">


                <!-- User Infomrmation -->

                <!-- IC number -->

                <div class="row mb-3">
                    <label for="IC-number" class="col-sm-2 col-form-label">IC number</label>
                    <div class="col-sm-4">
                        <input name="userIC" type="text" class="form-control form-control-sm" id="IC-number">

                    </div>
                </div>

                <!-- Name -->

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="name">
                    </div>
                </div>

                <!-- Address -->

                <div class="row mb-3">
                    <label for="address" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control form-control-sm" id="address">
                    </div>
                </div>

                <!-- Phone Number -->

                <div class="row mb-3">
                    <label for="phone-number" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-2">
                        <input type="text" class="form-control form-control-sm" id="phone-number">
                    </div>
                </div>

                <!-- BOD -->

                <div class="row mb-3">
                    <label for="BOD" class="col-sm-2 col-form-label">Birth of Date</label>
                    <div class="col-sm-2">
                        <input type=text" class="form-control form-control-sm" id="BOD">
                    </div>
                </div>

                <!-- Birth Place -->

                <div class="row mb-3">
                    <label for="birth-place" class="col-sm-2 col-form-label">Birth Place</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" id="birth-place">
                    </div>
                </div>

                <!-- Nationality -->

                <div class="row mb-3">
                    <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" id="nationality">
                    </div>
                </div>

                <!-- Bank Name -->

                <div class="row mb-3">
                    <label for="bank-name" class="col-sm-2 col-form-label">Bank Name</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control form-control-sm" id="bank-name">
                    </div>
                </div>

                <!-- Bank Number -->

                <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">Bank Number</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control form-control-sm" id="bank-number">
                    </div>
                </div>
            </div>

            <!-- Patner Information -->

            <h3><u>Partner Information</u></h3>

            <!-- IC number -->

            <div class="row mb-3">
                <label for="IC-number" class="col-sm-2 col-form-label">IC number</label>
                <div class="col-sm-4">
                    <input name="userIC" type="text" class="form-control form-control-sm" id="IC-number">
                </div>
            </div>

            <!-- Name -->

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" id="name">
                </div>
            </div>


            <!-- Address -->

            <div class="row mb-3">
                <label for="address" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control form-control-sm" id="address">
                </div>
            </div>

            <!-- Phone Number -->

            <div class="row mb-3">
                <label for="phone-number" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control form-control-sm" id="phone-number">
                </div>
            </div>

            <!-- BOD -->

            <div class="row mb-3">
                <label for="BOD" class="col-sm-2 col-form-label">Birth of Date</label>
                <div class="col-sm-2">
                    <input type=text" class="form-control form-control-sm" id="BOD">
                </div>
            </div>

            <!-- Birth Place -->

            <div class="row mb-3">
                <label for="birth-place" class="col-sm-2 col-form-label">Birth Place</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" id="birth-place">
                </div>
            </div>

            <!-- Nationality -->

            <div class="row mb-3">
                <label for="nationality" class="col-sm-2 col-form-label">Nationality</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" id="nationality">
                </div>
            </div>

            <!-- Bank Name -->

            <div class="row mb-3">
                <label for="bank-name" class="col-sm-2 col-form-label">Bank Name</label>
                <div class="col-sm-3">
                    <input type="text" class="form-control form-control-sm" id="bank-name">
                </div>
            </div>

            <!-- Bank Number -->

            <div class="row mb-3">
                <label for="name" class="col-sm-2 col-form-label">Bank Number</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm" id="bank-number">
                </div>
            </div>

            <!-- grooms job information -->

            <h3><u>Grooms Job Information</u></h3>

            <!-- Job -->

            <div class="row mb-3">
                <label for="job" class="col-sm-2 col-form-label">Job</label>
                <div class="col-sm-4">
                    <input name="job" type="text" class="form-control form-control-sm" id="job">
                </div>
            </div>

            <!-- Jobs Type -->

            <div class="row mb-3">
                <label for="jobs-type" class="col-sm-2 col-form-label">Jobs Type</label>
                <div class="col-sm-4">
                    <input name="jobsType" type="text" class="form-control form-control-sm" id="jobs-type">
                </div>
            </div>


            <!-- Salary -->

            <div class="row mb-3">
                <label for="salary" class="col-sm-2 col-form-label">Salary</label>
                <div class="col-sm-4">
                    <input name="groomsSalary" type="number" class="form-control form-control-sm" id="salary">
                </div>
            </div>

            <!-- Name and address of the employer -->

            <div class="row mb-3">
                <label for="name-address" class="col-sm-2 col-form-label">Name and address of the employer</label>
                <div class="col-sm-8">
                    <input name="nameAddress" type="text" class="form-control form-control-lg" id="name-address">
                </div>
            </div>


            <!-- close relative information -->

            <!-- Name -->

            <div class="row mb-3">
                <label for="close-name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-4">
                    <input name="closeName" type="text" class="form-control form-control-sm" id="close-name">
                </div>
            </div>

            <!-- Relationship -->

            <div class="row mb-3">
                <label for="relation" class="col-sm-2 col-form-label">Relationship</label>
                <div class="col-sm-4">
                    <input name="closeRelation" type="text" class="form-control form-control-sm" id="relation">
                </div>
            </div>


            <!-- Phone number -->

            <div class="row mb-3">
                <label for="close-phone" class="col-sm-2 col-form-label">Phone number</label>
                <div class="col-sm-4">
                    <input name="closePhone" type="text" class="form-control form-control-sm" id="close-phone">
                </div>
            </div>



    </div>


    </form>

    <!-- button next -->
    <button><a href="../../../app/View/applicantIncentive/partnerView.php">Next</a></button>
    </div>

    <style>
        .btn-next {
            width: 300px;
        }
    </style>



    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>