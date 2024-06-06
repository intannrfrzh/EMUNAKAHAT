<?php
//require_once ('app\Config\database.php');
//require_once ('app\Controller\M4controller\M4userController.php');

class M4model {
    private $connect;

    public function __construct($database) {
        $this->connect = $database;
    }


    public function registrationConsultInfo($partner_IC, $partner_Name, $applicant_IC, $applicant_Name,$request_DateTime, $Description, $consultationType) {
      //$query = $this->connect->prepare("INSERT INTO partners3 (partner_IC, partner_Name) VALUES (?, ?)");
    // $query2 = $this->connect->prepare("INSERT INTO applicant3 (applicant_IC, applicant_Name) VALUES (?, ?)");
    $query = $this->connect->prepare("INSERT INTO consultation_session (applicant_IC, applicant_Name, partner_IC, partner_Name, request_DateTime, Description, consultationType) VALUES (?, ?, ?, ?, ?, ?, ?)");
  
      $query->bindParam(1, $partner_IC);
      $query->bindParam(2, $partner_Name);
      $query->bindParam(1, $request_DateTime);
      
      $query->bindParam(3, $Description);
      $query->bindParam(4, $consultationType);
      
  
      $query->bindParam(6, $applicant_IC);
      $query->bindParam(7, $applicant_Name);
      
  
    //  $query->execute();
    // $query2->execute();
      $query->execute([$partner_IC, $partner_Name, $applicant_IC, $applicant_Name, $request_DateTime, $Description, $consultationType]);
  }
  
}
$database = new PDO("mysql:host=localhost;dbname=systemkahwin", "root", ""); 


//if ($database) {
//    $M4Model = new M4model($database);
//    $userControl = new userControl($M4Model);
//} else {
    // Handle the case when the database connection fails
//}


