<?php

class userProfileController {
  private $M1model;

  public function __construct($M1model) {
    $this->M1model = $M1model;
  }

  // Index method
  public function index() {
    // This method could be used for any default action for the userProfileController,
    // such as displaying a homepage or dashboard.
    echo "Welcome to the User Profile Controller!";
}


  // Applicant register
  public function applicantRegisterFunction($ic, $userType, $name, $dob, $birthPlace, $phoneNum, $email, $race, $gender, $nationality, $address, $job, $income, $workplaceAddress, $bankName, $bankNumber, $password) {

    // Password Encrypt
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // create account function
    $id = $this->M1model->createAccount($ic, $userType, $hashed_password);

    $this->addApplicantInfo($ic, $name, $dob, $birthPlace, $phoneNum, $email, $race, $gender, $nationality, $address, $job, $income, $workplaceAddress, $bankName, $bankNumber);
  }

  // applicant info 
  public function addApplicantInfo($ic, $name, $dob, $birthPlace, $phoneNum, $email, $race, $gender, $nationality, $address, $job, $income, $workplaceAddress, $bankName, $bankNumber) {

    // Call add applicant info function in M1model
    $this->M1model->addApplicantInfo($ic, $name, $dob, $birthPlace, $phoneNum, $email, $race, $gender, $nationality, $address, $job, $income, $workplaceAddress, $bankName, $bankNumber);
  }

  // Staff register 
  public function staffRegisterFunction($staff_ID, $userType, $staff_name, $staff_gender, $staff_phone_number, $staff_email, $staff_position, $staffPassword) {

    // Password Encryption
    $hashed_password = password_hash($staffPassword, PASSWORD_DEFAULT);

    // create account 
    $id = $this->M1model->createAccount($staff_ID, $userType, $hashed_password);

    $this->addStaffInfoFunction($staff_ID, $staff_name, $staff_gender, $staff_phone_number, $staff_email, $staff_position);
  }

  // staff's info 
  public function addStaffInfoFunction($staff_ID, $staff_name, $staff_gender, $staff_phone_number, $staff_email, $staff_position) {

    // Call add staff info function in M1model
    $this->M1model->addStaffInfo($staff_ID, $staff_name, $staff_gender, $staff_phone_number, $staff_email, $staff_position);
  }

  // login account 
  public function userLoginAccountFunction($ic, $password, $userType) {
    // Send the input to the M1model to verify the user
    if ($this->M1model->loginAccount($ic, $password)) {
      // Check the user type
      if ($userType == 'Pemohon') {
        // Redirect to the appropriate page for Pemohon
      } elseif ($userType == 'Staf') {
        // Redirect to the appropriate page for Staf
      }
    } else {
      // If not exist, show an error message
    }
  }

  // Admin login account function
  public function adminLoginAccountFunction($id, $password) {
    // Send the input to the M1model to verify the user
    if ($this->M1model->adminLoginAccount($id, $password)) {
      // Redirect to the appropriate page for admin
    } else {
      // If the user does not exist, show an error message
    }
  }

  public function viewProfileFunction($from) {
            
    session_start();
    $usertype = $_SESSION['currentUserType'] ;
    
    if($usertype == "Pemohon"){

        $ic = $_SESSION['currentUserIC'];
        $user = $this->M1model->getApplicantProfileInfo($ic);

        if($from == 'view'){
            header('Location: ../app/View/ManageUserProfile/viewApplicantProfileDetailsView.php?returnInfo='.  urlencode(serialize($user)));

        }else if($from == 'edit'){
            header('Location: ../app/View/ManageUserProfile/editApplicantProfileDetailsView.php?returnInfo='.  urlencode(serialize($user)));
            
        }
        

    }elseif($usertype == "Kakitangan"){

        $id = $_SESSION['accountId'];
        $user = $this->M1model->getStaffProfileInfo($id);
        echo $user['StaffName'];

        if($from == 'view'){
            header('Location: ../app/View/ManageUserProfile/viewStaffProfileDetailsView.php?returnInfo='.  urlencode(serialize($user)));

        }else if($from == 'edit'){
            header('Location: ../app/View/ManageUserProfile/editStaffProfileDetailsView.php?returnInfo='.  urlencode(serialize($user)));
            
        }

    }elseif($usertype == "Admin"){

        $id = $_SESSION['accountId'];

        $adminInfo = $this->M1model->getAdminProfileInfo($id);

        if($from == 'view'){
            
            header('Location: ../app/View/ManageUserProfile/viewAdminProfileDetailsView.php?returnInfo='.  urlencode(serialize($adminInfo)));

        }else if($from == 'edit'){
            //Redirect the user to the admin edit profile
            header('Location: ../app/View/ManageUserProfile/editAdminProfileDetailsView.php?returnInfo='.  urlencode(serialize($adminInfo)));
        }
        
    }else{

        echo "Problem";
    }
    
}

// function resetPassword($ic, $email){
//   $query = "SELECT * FROM Account_Info WHERE User_IC = :ic";
//   $stmt = $this->($query);
//   $stmt->bindParam(':ic', $ic);
//   $stmt->execute();
  

// }


}



