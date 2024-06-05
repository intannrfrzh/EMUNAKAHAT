<?php
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
//require_once(__DIR__.'/app/Controller/M4controller/M4staffController.php');
//require_once(__DIR__.'/app/Controller/M4controller/M4userController.php');
//require_once(__DIR__.'/app/Controller/M5controller/M5staffController.php');
//require_once(__DIR__.'/app/Controller/M5controller/M5userController.php')

// Include all model files
require_once(__DIR__.'/app/Model/M1model.php');
require_once(__DIR__.'/app/Model/M2model.php');
require_once(__DIR__.'/app/Model/M3model.php');
//require_once(__DIR__.'/app/Model/M4model.php');
//require_once(__DIR__.'/app/Model/M5model.php');

// Your other code goes here...
$db = (new Database())->connect();
$M1Model = new M1model($db);
$M2Model = new M2model($db);
$M3Model = new M3model($db);
//$M4Model = new M4model($db);
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
//$staffControl = new staffControl($M4Model);
//$userControl = new userControl($M4Model);
//$userController = new userController($M5Model);
//$staffController = new staffController($M5Model);

$controller->handleRequest();
