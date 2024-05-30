<?php

class staffMarRegController {

    private $M3model;

    public function __construct($M3model) {
        $this->M3model = $M3model;
    }

    public function showMarRegistrationMenu() {
        include __DIR__ . '/../View/applicantMarReg/MarRegistrationMenu.php';
    }
}
