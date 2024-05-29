<?php

class M1model {
    private $connect;

    public function __construct($database) {
        $this->connect = $database;
    }

    // Log in account
    public function loginAccount($ic, $password) {

        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT * FROM Account WHERE ic = :ic');
        $stmt->bindParam(':ic', $ic);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if the user exists
        if ($user) {
            // Verify the password
            if (password_verify($password, $user['password'])) {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    // Add initial applicant info
    public function addApplicantInfo($ic, $name, $dob, $birthPlace, $phoneNum, $email, $race, $gender, $nationality, $address, $job, $income, $workplaceAddress, $bankName, $bankNumber, $password) {

        // Add SQL Query
        $query = $this->connect->prepare("
            INSERT INTO Applicant 
            (ic, name, dob, birthPlace, phoneNum, email, race, gender, nationality, address, job, income, workplaceAddress, bankName, bankNumber, password) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        // Return execution result
        return $query->execute([$ic, $name, $dob, $birthPlace, $phoneNum, $email, $race, $gender, $nationality, $address, $job, $income, $workplaceAddress, $bankName, $bankNumber, $password]);
    }

    // Get applicant data using user ic
    public function getApplicantProfileInfo($ic) {

        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT * FROM Applicant WHERE ic = :ic');
        $stmt->bindParam(':ic', $ic);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $userinfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $userinfo;
    }

    // Get all applicant data
    public function getAllApplicantInfo() {

        // Prepare SQL statement
        $stmt = $this->connect->prepare('SELECT * FROM Applicant');

        // Execute SQL statement
        $stmt->execute();

        // Fetch all rows at once
        $applicantDetailsList = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $applicantDetailsList;
    }

    // Update applicant data using user ic
    public function updateApplicantProfileInfo($ic, $name, $dob, $birthPlace, $phoneNum, $email, $race, $gender, $nationality, $address, $job, $income, $workplaceAddress, $bankName, $bankNumber, $password) {

        // Prepare your update statement
        $sql = "UPDATE Applicant SET 
                name = :name, 
                dob = :dob, 
                birthPlace = :birthPlace, 
                phoneNum = :phoneNum, 
                email = :email, 
                race = :race, 
                gender = :gender, 
                nationality = :nationality, 
                address = :address, 
                job = :job, 
                income = :income, 
                workplaceAddress = :workplaceAddress, 
                bankName = :bankName, 
                bankNumber = :bankNumber, 
                password = :password 
            WHERE ic = :ic";

        // Prepare the statement
        $stmt = $this->connect->prepare($sql);

        // Bind parameters
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':birthPlace', $birthPlace);
        $stmt->bindParam(':phoneNum', $phoneNum);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':race', $race);
        $stmt->bindParam(':gender', $gender);
        $stmt->bindParam(':nationality', $nationality);
        $stmt->bindParam(':address', $address);
        $stmt->bindParam(':job', $job);
        $stmt->bindParam(':income', $income);
        $stmt->bindParam(':workplaceAddress', $workplaceAddress);
        $stmt->bindParam(':bankName', $bankName);
        $stmt->bindParam(':bankNumber', $bankNumber);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':ic', $ic);

        // Execute the statement
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    // Get staff data using user ic
    public function getStaffProfileInfo($staff_ID) {

        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT * FROM staff_Account WHERE staff_ID = :id');
        $stmt->bindParam(':id', $staff_ID);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $staffInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $staffInfo;
    }

    // Other functions can be added here
    //get admin profile info function
    public function getAdminProfileInfo($id) {
        // Prepare SQL statement with placeholders to prevent SQL injection
        $stmt = $this->connect->prepare('SELECT * FROM Admin WHERE id = :id');
        $stmt->bindParam(':id', $id);

        // Execute SQL statement
        $stmt->execute();

        // Store the result of user from MySQL
        $adminInfo = $stmt->fetch(PDO::FETCH_ASSOC);

        return $adminInfo;
    }
}
