<?php
// app/Controller/temptController.php

class TemptController {
    public function handleRequest() {
        // Here you can add logic to handle different requests
        // For now, it simply calls the template

        // Include the template
        include 'app/View/temp/template.php';
        //include 'app/View/temp/stafftemplate.php';
    }
}
