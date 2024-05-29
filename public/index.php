<?php

// Include required files
require_once '../app/Config/database.php';
require_once '../app/Model/M5model.php';
require_once '../app/Model/M3model.php';
require_once '../app/Model/M1model.php';
require_once '../app/Model/M2model.php';
require_once '../app/Model/M4model.php';

require_once '../app/Controller/M5controller/userController.php';
require_once '../app/Controller/M5controller/staffController.php';

require_once '../app/Controller/M1controller/userProfileController.php';
require_once '../app/Controller/M1controller/staffProfileController.php';

require_once '../app/Controller/M2controller/staffCourseController.php';
require_once '../app/Controller/M2controller/staffRequestController.php';
require_once '../app/Controller/M2controller/userCourseController.php';                                                   
require_once '../app/Controller/M2controller/userRequestController.php';

require_once '../app/Controller/M3controller/staffMarRegController.php';
require_once '../app/Controller/M3controller/userMarRegController.php';

require_once '../app/Controller/M4controller/staffControl.php';
require_once '../app/Controller/M4controller/userControl.php';

$db = (new Database())->connect();
$M5Model = new M5model($db);
$M3Model = new M3model($db);
$M1Model = new M1model($db);
$M2Model = new M2model($db);
$M4Model = new M4model($db);

$userController = new userController($M5Model);
$staffController = new staffController($M5Model);
$userProfileController = new userProfileController($M1Model);
$staffProfileController = new staffProfileController($M1Model);
$staffCourseController = new staffCourseController($M2Model);
$staffRequestController = new staffRequestController($M2Model);
$userCourseController = new userCourseController($M2Model);
$userRequestController = new userRequestController($M2Model);
$staffMarRegController = new staffMarRegController($M3Model);
$userMarRegController = new userMarRegController($M3Model);
$staffControl = new staffControl($M4Model);
$userControl = new userControl($M4Model);



$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
    // passing the data from the closeRelative.php to the index.php
    case 'closeRelative':
        $closeName = $_POST['closeName'];
        $closeRelation = $_POST['closeRelation'];
        $closePhone = $_POST['closePhone'];

        $userController->closeForm($closeName, $closeRelation, $closePhone);

        header('Location: ../app/View/applicantIncentive/closeView.php');
        break;

    // passing the data from the grooms.php to the index.php
    case 'groomsJob':
        $job = $_POST['job'];
        $jobsType = $_POST['jobsType'];
        $Salary = $_POST['groomsSalary'];
        $nameAddress = $_POST['nameAddress'];

        $userController->jobForm($job, $jobsType, $Salary, $nameAddress);

        header('Location: ../app/View/applicantIncentive/groomsView.php');
        break;

    // passing the data from the userInfo to the index
    case 'userInfo':
        if (isset($_POST['userIC'])) {
            $IC = $_POST['userIC'];
            $userInfo = $userController->getUserInfo($IC);
            include '../app/View/applicantIncentive/userView.php';
        }
        break;

    // passing the data from the partnerInfo to the index
    case 'partnerInfo':
        if (isset($_POST['partnerIC'])) {
            $partnerIC = $_POST['partnerIC'];
            $partnerInfo = $userController->getpartnerInfo($partnerIC);
            include '../app/View/applicantIncentive/partnerView.php';
        }
        break;

    // passing the data from the document to the index
    case 'document':
        $file = $_FILES['file'];

        $userController->uploadFile($file);

        header('Location: ../app/View/applicantIncentive/documentView.php');
        break;

    // passing the data from the incentive to the index
    case 'incentivelist':
        $incentivelist = $staffController->Retrieveincentive();
        include '../app/View/staffIncentive/listView.php';
        break;

    case 'createAccount':
        $ic = $_POST['ic'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $phoneNume = $_POST['phoneNum'];

        $userProfileController->applicantRegisterFunction($ic, $userType, $name, $dob, $birthPlace, $phoneNum, $email, $race, $gender, $nationality, $address, $job, $income, $workplaceAddress, $bankName, $bankNumber, $password);
        break;

    case 'loginAccount':
        $ic = $_POST['ic'];
        $password = $_POST['password'];
        $userType = $_POST['userType'];

        $userProfileController->userLoginAccountFunction($ic, $password, $userType);
        break;

    case 'forgotPassword':
        $ic = $_POST['formIC'];
        $email = $_POST['formEmail'];
        // $userProfileController->resetPassword($ic, $email);
        break;

    case 'viewProfile':
        $from = isset($_GET['from']) ? $_GET['from'] : '';
        $userProfileController->viewProfileFunction($from);
        break;
    
    default:
        // Handle default action if needed
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-MUNAKAHAT</title>
<!-- MDB icon -->
<link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="../app/Bootstrap/mdb.min.css" />

  <!-- css link -->
    <link rel="stylesheet" href="../app/View/css/userView.css">
    <link rel="stylesheet" href="../app/View/css/sidebar.css">

</head>
<body>
<!-- Start your project here-->

  <!-- heading -->

  <?php

include_once '../app/View/Common/heading.html';
?>

<!-- sidebar -->

<?php
include_once '../app/View/Common/sidebar.php';
?>
</body>
</html>
</body>

</html>
