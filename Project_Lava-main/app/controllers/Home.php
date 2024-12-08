<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Home extends Controller {

    public function __construct() {
        parent::__construct();

        // Ensure the user is logged in before accessing the controller
        if (!logged_in()) {
            redirect('auth');
        }

        // Load the DiverModel
        $this->call->model('DiverModel');
    }

    // Display the homepage
    public function index() {
        $this->call->view('homepage');
    }

    // Display the terms and conditions page
    public function terms() {
        $this->call->view('terms_and_conditions');
    }

    // Handle diver registration
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Process form data
            $data = [
                'last_name' => $this->xss_clean($_POST['last_name']),
                'first_name' => $this->xss_clean($_POST['first_name']),
                'middle_name' => $this->xss_clean($_POST['middle_name']),
                'dob' => $this->xss_clean($_POST['dob']),
                'gender' => $this->xss_clean($_POST['gender']),
                'address' => $this->xss_clean($_POST['address']),
                'contact_number' => $this->xss_clean($_POST['contact_number']),
                'emergency_contact_number' => $this->xss_clean($_POST['emergency_contact_number']),
                'emergency_contact_person' => $this->xss_clean($_POST['emergency_contact_person']),
                'experience' => $this->xss_clean($_POST['experience']),
                'diving_certification' => $this->xss_clean($_POST['diving_certification']),
                'preferred_diving_date' => $this->xss_clean($_POST['preferred_diving_date']),
                'diving_spot' => $this->xss_clean($_POST['diving_spot']),
            ];
    
            // Save data using the model
            if ($this->DiverModel->registerDiver($data)) {
                // Generate PDF certificate using the model (call the correct method here)
                $this->DiverModel->download_pdf(); // Use the correct method name

                // Store PDF path in session and redirect to success page
                redirect('/pdf_success'); // Redirect to the success page after saving data
            } else {
                die('Failed to register diver.');
            }
        }
    
        // Render registration form for GET requests
        $this->call->view('register_diver');
    }

    // Display the PDF success page
    public function pdf_success() {
        // Render the success page for the PDF generation
        $this->call->view('pdf_success');
    }

    // XSS cleaning function to sanitize input data
    private function xss_clean($data) {
        return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    }
}
