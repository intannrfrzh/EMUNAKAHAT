<?php

class userMarRegController {

    private $M3model;

    public function __construct($M3model) 
    {
        $this->M3model = $M3model;
    }

    //for form
    public function husbandForm($applicant_IC, $applicant_name, $applicant_BOD, $applicant_race, $applicant_citizen, $applicant_level_education, $applicant_work_sector, $applicant_work_position, $applicant_income, $applicant_address, $applicant_ic_address, $applicant_phone_number) 
    {
        $this->M3model->husbandFormRetrieve($applicant_IC, $applicant_name, $applicant_BOD, $applicant_race, $applicant_citizen, $applicant_level_education, $applicant_work_sector, $applicant_work_position, $applicant_income, $applicant_address, $applicant_ic_address, $applicant_phone_number) ;
    }

    public function wifeForm($partner_IC, $partner_name, $partner_BOD, $partner_race, $partner_citizen, $partner_level_education, $partner_work_sector, $partner_work_position, $partner_income, $partner_address, $partner_ic_address, $partner_phone_number) 
    {
        $this->M3model->wifeFormRetrieve($partner_IC, $partner_name, $partner_BOD, $partner_race, $partner_citizen, $partner_level_education, $partner_work_sector, $partner_work_position, $partner_income, $partner_address, $partner_ic_address, $partner_phone_number) ;
    }

    public function marriageForm($register_date, $husband_name, $wife_name, $marriage_date, $marriage_time, $marriage_place, $dowry_type, $dowry_amount, $gift_amount, $other_gift, $solemnizer_name, $wali_IC, $wali_name, $wali_address, $wali_DOB, $wali_age, $wali_phone_number, $wali_relationship, $witness_IC, $witness1_name, $witness2_name, $witness1_phone_number, $witness2_phone_number, $witness1_address, $witness2_address)
    {
        $this->M3model->marriageFormRetrieve($register_date, $husband_name, $wife_name, $marriage_date, $marriage_time, $marriage_place, $dowry_type, $dowry_amount, $gift_amount, $other_gift, $solemnizer_name, $wali_IC, $wali_name, $wali_address, $wali_DOB, $wali_age, $wali_phone_number, $wali_relationship, $witness_IC, $witness1_name, $witness2_name, $witness1_phone_number, $witness2_phone_number, $witness1_address, $witness2_address);
    }

    //for files
    public function uploadFile($file) {
        // Process the uploaded file
        $fileName = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileError = $file['error'];

        // Check for errors during the upload
        if ($fileError !== UPLOAD_ERR_OK) {
            // Handle the error appropriately (e.g., display an error message)
            echo "Error uploading file.";
            return;
        }

        // Validate file type, size, or perform any other necessary checks here

        // Create the 'uploads' directory if it doesn't exist
        $uploadsDir = 'uploads/';
        if (!is_dir($uploadsDir)) {
            mkdir($uploadsDir);
        }

        // Move the uploaded file to the desired location
        $destination = $uploadsDir . $fileName;
        if (move_uploaded_file($fileTmpName, $destination)) {
            // Pass the file path to the model for further processing
            $this->M3model->uploadFile($destination);
            echo "File uploaded successfully.";
        } else {
            // Handle the file move failure
            echo "Error moving file.";
        }
    }

}

