<?php

class userControl {

    private $M4model;

    public function __construct($M4model)
    {
        $this->M4model = $M4model;
    }

    public function registrationConsultInfo($partner_IC, $partner_Name, $partner_DOB, $partner_phone_number, $partner_race, $partner_Address, $partner_Job, $partner_Income, $applicant_IC, $applicant_Name, $applicant_DOB, $applicant_phone_number, $applicant_race, $applicant_Address, $applicant_Job, $applicant_Income) {

        $id = $this->M4model->registrationConsultInfo($partner_IC, $partner_Name, $partner_DOB, $partner_phone_number, $partner_race, $partner_Address, $partner_Job, $partner_Income, $applicant_IC, $applicant_Name, $applicant_DOB, $applicant_phone_number, $applicant_race, $applicant_Address, $applicant_Job, $applicant_Income);

    }

}

