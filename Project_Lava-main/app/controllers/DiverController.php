<?php
// app/controllers/DiverController.php

// app/controllers/DiverController.php

namespace App\Controllers;

use App\Models\DiverModel;
use DateTime;

class DiverController {
    protected $diverModel;

    public function __construct() {
        // Initialize the DiverModel to interact with the database
        $this->diverModel = new DiverModel();
    }

    // Handle the registration form submission
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Collect POST data from the form
            $data = [
                'last_name' => xss_clean($_POST['last_name']),
                'first_name' => xss_clean($_POST['first_name']),
                'middle_name' => xss_clean($_POST['middle_name']),
                'dob' => xss_clean($_POST['dob']),
                'gender' => xss_clean($_POST['gender']),
                'address' => xss_clean($_POST['address']),
                'contact_number' => xss_clean($_POST['contact_number']),
                'emergency_contact_number' => xss_clean($_POST['emergency_contact_number']),
                'emergency_contact_person' => xss_clean($_POST['emergency_contact_person']),
                'experience' => xss_clean($_POST['experience']),
                'diving_certification' => xss_clean($_POST['diving_certification']),
            ];

            // Calculate age from the date of birth
            $dob = new DateTime($data['dob']);
            $today = new DateTime('today');
            $data['age'] = $dob->diff($today)->y;

            // Save the diver information to the database using the model
            $this->diverModel->registerDiver($data);

            // Set a flash message and redirect after successful registration
            set_flash_alert('success', 'Registration successful!');
            header('Location: /home');  // Redirect to home page after registration
            exit;
        }

        // If not POST, show the registration form
        include 'app/views/register_diver.php';
    }
}
