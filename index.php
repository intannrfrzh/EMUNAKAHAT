<?php
ob_start();
// index.php

// Include database
require_once(__DIR__.'/app/Config/database.php');

// Include all controller files
require_once(__DIR__.'/app/Controller/temptController.php');
require_once(__DIR__.'/app/Controller/M1controller/M1staffController.php');
require_once(__DIR__.'/app/Controller/M1controller/M1userController.php');
require_once(__DIR__.'/app/Controller/M2controller/M2staffCourseController.php');
require_once(__DIR__.'/app/Controller/M2controller/M2staffRequestController.php');
require_once(__DIR__.'/app/Controller/M2controller/M2userCourseController.php');
require_once(__DIR__.'/app/Controller/M2controller/M2userRequestController.php');
require_once(__DIR__.'/app/Controller/M3controller/M3staffController.php');
require_once(__DIR__.'/app/Controller/M3controller/M3userController.php');
require_once(__DIR__.'/app/Controller/M4controller/M4staffController.php');
require_once(__DIR__.'/app/Controller/M4controller/M4userController.php');
//require_once(__DIR__.'/app/Controller/M5controller/M5staffController.php');
//require_once(__DIR__.'/app/Controller/M5controller/M5userController.php')

// Include all model files
require_once(__DIR__.'/app/Model/M1model.php');
require_once(__DIR__.'/app/Model/M2model.php');
require_once(__DIR__.'/app/Model/M3model.php');
require_once(__DIR__.'/app/Model/M4model.php');
//require_once(__DIR__.'/app/Model/M5model.php');

// Your other code goes here...
$db = (new Database())->connect();
$M1Model = new M1model($db);
$M2Model = new M2model($db);
$M3Model = new M3model($db);
$M4Model = new M4model($db);
//$M5Model = new M5model($db);

// Instantiate the controller
$controller = new TemptController();
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
//$userController = new userController($M5Model);
//$staffController = new staffController($M5Model);

$controller->handleRequest();

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

        case 'registrationConsultInfo':

            $applicant_IC = $_POST['applicant_IC'];
            $applicant_Name = $_POST['applicant_Name'];
            $partner_IC = $_POST['partner_IC'];
            $partner_Name = $_POST['partner_Name'];
            $consultationType = $_POST['consultationType'];
            $Description = $_POST['Description'];
            $request_DateTime = $_POST['request_DateTime'];
    
            $userControl->registrationConsultInfo($partner_IC, $partner_Name, $applicant_IC, $applicant_Name, $request_DateTime, $Description, $consultationType);

            header ('Location: app\View\UserConsult\mainUserPage.php');
            exit;
            break;
    
    default:
        // Handle default action if needed
        break;
}

ob_end_flush();
?>