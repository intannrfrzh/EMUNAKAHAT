<?php 

class M3model {
    private $connect;

    public function __construct($database) {
        $this->connect = $database;
    }


    // function to retrieve for husband(applicant) info
    public function husbandFormRetrieve($IC) {
        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT applicant_IC, applicant_Name, applicant_Address, applicant_Phone_Number, applicant_DOB, applicant_BirthPlace, applicant_Nationality, applicant_Bank_Name, applicant_Bank_Number FROM applicant WHERE applicant_IC = :ic');
        $stmt->bindParam(':ic', $IC);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $userInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $userInfo;

    }

    // function to retrieve for wife(partner) info
    public function wifeFormRetrieve($partnerIC) {
        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT partner_IC, partner_Name, partner_Address, partner_phone_number, partner_DOB, partner_birthPlace, partner_Nationality, partner_bank_name, partner_bank_number FROM partner WHERE partner_IC = :ic');
        $stmt->bindParam(':ic', $partnerIC);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $partnerInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $partnerInfo;

    }

    // function to retrieve for marriage info
    public function marriageFormRetrieve($M_app_ID) {
        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT * FROM register_marriage WHERE applicant_IC = :ic');
        $stmt->bindParam(':ic', $M_app_ID);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $marriageInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $marriageInfo;

    }

    public function uploadFile($filePath) {
        // Save the file path in the database or perform any desired actions
        // You can write your database insert/update code here
        // Example:
        $stmt = $this->connect->prepare('INSERT INTO marriage_document (MD_name) VALUES (:filePath)');
        $stmt->bindParam(':filePath', $filePath);

        try {
            $stmt->execute();
            echo "File uploaded successfully and inserted into the database.";
        } catch (PDOException $e) {
            echo "Error inserting file into the database: " . $e->getMessage();
        }
    }

}

