<?php
require_once '../app/Config/database.php';
require_once '../app/Controller/M4controller/userControl.php';

class M4model {
    private $connect;

    public function __construct($database) {
        $this->connect = $database;
    }


    public function registrationConsultInfo($partner_IC, $partner_Name, $partner_DOB, $partner_phone_number, $partner_race, $partner_Address, $partner_Job, $partner_Income, $applicant_IC, $applicant_Name, $applicant_DOB, $applicant_phone_number, $applicant_race, $applicant_Address, $applicant_Job, $applicant_Income) {
      $query = $this->connect->prepare("INSERT INTO Partners (partner_IC, partner_Name, partner_DOB, partner_phone_number, partner_race, partner_Address, partner_Job, partner_Income) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $query2 = $this->connect->prepare("INSERT INTO Applicants (applicant_IC, applicant_Name, applicant_DOB, applicant_phone_number, applicant_race, applicant_Address, applicant_Job, applicant_Income) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
  
      $query->bindParam(1, $partner_IC);
      $query->bindParam(2, $partner_Name);
      $query->bindParam(3, $partner_DOB);
      $query->bindParam(4, $partner_phone_number);
      $query->bindParam(5, $partner_race);
      $query->bindParam(6, $partner_Address);
      $query->bindParam(7, $partner_Job);
      $query->bindParam(8, $partner_Income);
  
      $query2->bindParam(1, $applicant_IC);
      $query2->bindParam(2, $applicant_Name);
      $query2->bindParam(3, $applicant_DOB);
      $query2->bindParam(4, $applicant_phone_number);
      $query2->bindParam(5, $applicant_race);
      $query2->bindParam(6, $applicant_Address);
      $query2->bindParam(7, $applicant_Job);
      $query2->bindParam(8, $applicant_Income);
  
      $query->execute();
      $query2->execute();
  }
  
}
// $database = new PDO("mysql:host=localhost;dbname=eMunakahatDB", "root", ""); 

if ($database) {
    $M4Model = new M4model($database);
    $userControl = new userControl($M4Model);
} else {
    // Handle the case when the database connection fails
}


