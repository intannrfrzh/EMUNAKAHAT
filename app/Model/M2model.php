<?php 

class M2model {
    private $connect;

    public function __construct($database) {
        $this->connect = $database;
    }
    
    public function retrieveCourse($course_ID)
    {
        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT course_ID, course_organizer, course_place, course_date,course_capacity,course_available FROM course WHERE course_ID = :id');
        $stmt->bindParam(':id', $course_ID);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $courseInfo = $stmt->fetch(PDO::FETCH_ASSOC);
        return $courseInfo;
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


    //  user function to insert course registration form values

    public function CourseInsert($c_app_state, $c_app_jobsector, $c_app_educationlevel, $c_app_date){
        $query=$this->connect->prepare("INSERT INTO course_application(c_app_state,c_app_jobsector,c_app_educationlevel,c_app_date)VALUES(?,?,?,?)");
        $query->execute([$c_app_state, $c_app_jobsector, $c_app_educationlevel, $c_app_date]);
    }

    public function Uploadpayment($coursepayment){

       
            // Save the file path in the database or perform any desired actions
            // You can write your database insert/update code here
            // Example:
            $stmt = $this->connect->prepare('INSERT INTO course_application (proofofpayment_course) VALUES (:filePath)');
            $stmt->bindParam(':filePath', $filePath);
    
            try {
                $stmt->execute();
                echo "File uploaded successfully and inserted into the database.";
            } catch (PDOException $e) {
                echo "Error inserting file into the database: " . $e->getMessage();
            }
        
    }



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

    public function RequestInsert($request_date,$request_marriagecountry, $request_marriagestate, $request_marriageplace, $request_marriagedate,$request_dowrytype,$request_dowryamount){
        $query=$this->connect->prepare("INSERT INTO request_marriage(request_date,request_marriagecountry, request_marriagestate, request_marriageplace, request_marriagedate,request_dowrytype,request_dowryamount)VALUES(?,?,?,?,?,?,?)");
        $query->execute([$witness1_name,$witness2_name,$witness1_phone_number,$witness2_phone_number,$witness1_address,$witness2_address]);
    }

    public function WaliInsert($wali_name,$wali_address,$wali_DOB,$wali_age,$wali_phone_number,$wali_relationship){
        $query=$this->connect->prepare("INSERT INTO wali(wali_name,wali_address,wali_DOB,wali_age,wali_phone_number,wali_relationship)VALUES(?,?,?,?,?,?)");
        $query->execute([$wali_name,$wali_address,$wali_DOB,$wali_age,$wali_phone_number,$wali_relationship]);
    }

    public function WitnessInsert($witness1_name,$witness2_name,$witness1_phone_number,$witness2_phone_number,$witness1_address,$witness2_address){
        $query=$this->connect->prepare("INSERT INTO witness(witness1_name,witness2_name,witness1_phone_number,witness2_phone_number,witness1_address,witness2_address)VALUES(?,?,?,?,?,?)");
        $query->execute([$witness1_name,$witness2_name,$witness1_phone_number,$witness2_phone_number,$witness1_address,$witness2_address]);
    }


    public function uploadFile($filePath) {
        // Save the file path in the database or perform any desired actions
        // You can write your database insert/update code here
        // Example:
        $stmt = $this->connect->prepare('INSERT INTO request_document (ReqDoc_name) VALUES (:filePath)');
        $stmt->bindParam(':filePath', $filePath);

        try {
            $stmt->execute();
            echo "File uploaded successfully and inserted into the database.";
        } catch (PDOException $e) {
            echo "Error inserting file into the database: " . $e->getMessage();
        }
    }

    public function Uploadpayment2($coursepayment2){

       
        // Save the file path in the database or perform any desired actions
        // You can write your database insert/update code here
        // Example:
        $stmt = $this->connect->prepare('INSERT INTO request_marriage (proof_of_payment_request) VALUES (:filePath)');
        $stmt->bindParam(':filePath', $filePath);

        try {
            $stmt->execute();
            echo "File uploaded successfully and inserted into the database.";
        } catch (PDOException $e) {
            echo "Error inserting file into the database: " . $e->getMessage();
        }



        
    
}

}

