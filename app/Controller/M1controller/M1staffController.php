<?php

class staffProfileController {
    private $M1model;

    public function __construct($M1model)
    {
        $this->M1model = $M1model;
    }

    // Retrieve registration form information from the model 
    public function retrieveRegistration() {
        return $this->M1model->registrationRetrieve();
    }
}


class LoginController {
    private $accountModel;
    private $M1model;

    // Login controller's constructor
    public function __construct($M1model) {
        $this->M1model = new M1model($M1model);
    }

    // User (Staff and Applicant) login account function
    public function staffLoginAccountFunction($ic, $password, $userType) {
        // Send the input to the account model to verify the user
        if ($this->M1model->loginAccount($ic, $password)) {
            // Check the user type
            if ($userType == 'Pemohon') {
                echo '<script>alert("Berjaya log masuk.");</script>';
                header("Location: index.php?action=viewProfile&from=view");
            } elseif ($userType == 'Staf') {
                echo '<script>alert("Berjaya log masuk.");</script>';
                header("Location: index.php?action=viewProfile&from=view");
            }
        } else {
            // If the user does not exist, show an error message
            echo '<script>alert("No. Kad Pengenalan dan Kata Laluan Tidak Padan");</script>';
            header("Location: ../app/View/ManageUserProfile/userLogin.php");
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

    // Admin login account function
    public function adminLoginAccountFunction($id, $password) {
        // Send the input to the account model to verify the user
        if ($this->accountModel->adminLoginAccount($id, $password)) {
            header("Location: index.php?action=viewProfile&from=view");
        } else {
            // If the user does not exist, show an error message
            echo '<script>alert("No. Kad Pengenalan dan Kata Laluan Tidak Padan");</script>';
            header("Location: ../app/View/ManageUserProfile/userLogin.php");
        }
    }

    // function resetPassword($ic, $email){
    //   $query = "SELECT * FROM Account_Info WHERE User_IC = :ic";
    //   $stmt = $this->($query);
    //   $stmt->bindParam(':ic', $ic);
    //   $stmt->execute();
      
    
    // }
}


