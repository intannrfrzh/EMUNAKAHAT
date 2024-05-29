<?php 

class M5model {
    private $connect;

    public function __construct($database) {
        $this->connect = $database;
    }

    // grooms job function insert

    public function groomsJobInsert($job, $jobsType, $Salary, $nameAddress) {
        $query = $this->connect->prepare("INSERT INTO grooms_job (job, job_type, salary, name_address_employer) VALUES (?, ?, ?, ?)");
        $query->execute([$job, $jobsType, $Salary, $nameAddress]);
    }

    // close relative function insert

    public function closeInsert($closeName, $closeRelation, $closePhone) {
        $query = $this->connect->prepare("INSERT INTO close_relative (name, relationship, phone_number) VALUES (?, ?, ?)");
        $query->execute([$closeName, $closeRelation, $closePhone]);
    }

    // function to retrieve for user info

    public function retrieveUser($IC) {
        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT applicant_IC, applicant_Name, applicant_Address, applicant_Phone_Number, applicant_DOB, applicant_BirthPlace, applicant_Nationality, applicant_Bank_Name, applicant_Bank_Number FROM applicant WHERE applicant_IC = :ic');
        $stmt->bindParam(':ic', $IC);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $userInfo;

    }

    // function to retrieve for partner info

    public function retrievePartner($partnerIC) {
        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT partner_IC, partner_Name, partner_Address, partner_phone_number, partner_DOB, partner_birthPlace, partner_Nationality, partner_bank_name, partner_bank_number FROM partner WHERE partner_IC = :ic');
        $stmt->bindParam(':ic', $partnerIC);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $partnerInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $partnerInfo;

    }

    // function to insert the file to the database

    public function uploadFile($filePath) {
       
        $stmt = $this->connect->prepare('INSERT INTO documents (Documents_name) VALUES (:filePath)');
        $stmt->bindParam(':filePath', $filePath);

        try {
            $stmt->execute();
            echo "File uploaded successfully and inserted into the database.";
        } catch (PDOException $e) {
            echo "Error inserting file into the database: " . $e->getMessage();
        }
    }

    // get each row of incentive form from the database

    public function incentiveRetrieve() {

        include 'connect.php';

        $sql = "SELECT * FROM incentive_list";
        $result = mysqli_query($con, $sql);

        if (!$result) {
            throw new Exception("Failed to retrieve incentive data: " . mysqli_error($con));
        }

        $incentives = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $incentives[] = $row;
        }

        return $incentives;
    }

}
