<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class DiverModel extends Model {

    /**
     * Register a new diver.
     *
     * @param array $data The diver data to be inserted into the database.
     * @return bool Returns true on success, false on failure.
     */
    public function registerDiver($data) {
        // Use Lavalust's table query builder to insert data into the 'divers' table
        $queryResult = $this->db->table('divers')->insert([
            'last_name' => $data['last_name'],
        'first_name' => $data['first_name'],
        'middle_name' => $data['middle_name'],
        'dob' => $data['dob'],
        'gender' => $data['gender'],
        'address' => $data['address'],
        'contact_number' => $data['contact_number'],
        'emergency_contact_number' => $data['emergency_contact_number'],
        'emergency_contact_person' => $data['emergency_contact_person'],
        'experience' => $data['experience'],
        'diving_certification' => $data['diving_certification'],
        'preferred_diving_date' => $data['preferred_diving_date'],
        'diving_spot' => $data['diving_spot'],
        ]);

        // Check if the query was successful
        if ($queryResult) {
            return true;
        } else {
            // Handle error here (logging or custom error message)
            return false;
        }
    }

    /**
     * Generate and download the PDF certificate for the diver.
     */
    public function download_pdf() {
        // Initialize mPDF
        $mpdf = new \Mpdf\Mpdf();

        // Content for the PDF - First Page (Notice)
        $html = '
        <div style="text-align: center;">
            <br><br><br><br>
            <h1 style="font-weight: bold;">NOTICE OF SCUBA DIVING APPROVAL</h1>
            <p>This is to inform that you are now cleared to participate in the Scuba Diving Activity at City of Tourism and Culture. By your participation, you have agreed to the terms and conditions, including the assumption of all associated risks and the release of liability for City of Tourism and Culture and its personnel.</p>
            <p>You have confirmed that you are in good health and fully understand the risks involved in scuba diving.</p>
            <p>We wish you a safe and enjoyable diving experience!</p>
        </div>';

        // Write the HTML content for the first page (Notice)
        $mpdf->WriteHTML($html);

        // Add a page break for the second page (Image)
        $mpdf->AddPage();

        // Add an image (ensure the image path is correct and centered)
        $imagePath = $_SERVER['DOCUMENT_ROOT'] . '/public/images/cert.png'; // Absolute path to the image

        // Center the image on the page by setting the X position dynamically
        $pageWidth = $mpdf->w;  // Get the page width
        $imageWidth = 150;  // Set the desired image width
        $xPosition = ($pageWidth - $imageWidth) / 2;  // Center the image

        // Adjust the Y position to move the image higher
        $yPosition = 45; // Move the image up by adjusting this value

        // Add the image to the PDF with the calculated position
        $mpdf->Image($imagePath, $xPosition, $yPosition, $imageWidth, 0, 'png', '', true, false); // Centered image

        // Output the PDF to the browser
        $mpdf->Output();
    }
    
}
