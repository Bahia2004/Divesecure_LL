<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Successful</title>
    <style>
        body {
            background-image: url('/public/images/iq.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            text-align: center;
            animation: fadeIn 1.5s ease;
        }

        h1 {
            color: #4CAF50;
            font-size: 2rem;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 30px;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 10px;
            font-size: 1.1rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

        .btn:active {
            background-color: #388e3c;
        }

        .footer {
            margin-top: 30px;
            font-size: 0.9rem;
            color: #777;
        }

        .footer a {
            color: #4CAF50;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
            animation: fadeInModal 0.5s ease;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            max-width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .modal-header {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 15px;
        }

        .modal-body {
            font-size: 1rem;
            color: #555;
        }

        .modal-footer {
            text-align: right;
        }

        .close {
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @keyframes fadeInModal {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* FAQ Section */
        .faq-item {
            background-color: #f4f4f4;
            padding: 10px;
            margin-bottom: 10px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .faq-item:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registration Successful!</h1>
        <p>Your registration was completed successfully. Thank you for joining our community!</p>
        
        <a href="download_pdf" class="btn">Download PDF Certificate</a>
        <a href="/home" class="btn">Go to Dashboard</a>

        <div class="footer">
            <p>Need help? <a href="#" id="contactLink">Contact Us</a> or visit our <a href="#" id="faqLink">FAQ</a> page.</p>
        </div>
    </div>

    <!-- FAQ Modal -->
    <div id="faqModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeFAQModal">&times;</span>
                <h2>Frequently Asked Questions</h2>
            </div>
            <div class="modal-body">
                <p><strong>What is our service?</strong> We provide a variety of services to help our community grow.</p>
                <p><strong>How can I contact support?</strong> You can contact support via the contact form or email us directly.</p>
                <!-- Add more FAQ items as needed -->
            </div>
            <div class="modal-footer">
                <button class="btn" id="closeFAQModalBtn">Close</button>
            </div>
        </div>
    </div>

    <!-- The Contact Modal -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" id="closeModal">&times;</span>
                <h2>Contact Us</h2>
            </div>
            <div class="modal-body">
                <form id="contactForm">
                    <label for="name">Your Name:</label><br>
                    <input type="text" id="name" name="name" required><br><br>

                    <label for="email">Your Email:</label><br>
                    <input type="email" id="email" name="email" required><br><br>

                    <label for="message">Your Message:</label><br>
                    <textarea id="message" name="message" rows="4" required></textarea><br><br>

                    <button type="submit" class="btn">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" id="closeModalBtn">Close</button>
            </div>
        </div>
    </div>

    <script>
        // FAQ Modal Logic
        document.getElementById("faqLink").onclick = function() {
            document.getElementById("faqModal").style.display = "block";
        }

        // Close FAQ Modal
        document.getElementById("closeFAQModal").onclick = function() {
            document.getElementById("faqModal").style.display = "none";
        }

        // When the user clicks the "Close" button at the bottom of the FAQ modal, close it
        document.getElementById("closeFAQModalBtn").onclick = function() {
            document.getElementById("faqModal").style.display = "none";
        }

        // Get the modal and links
        var modal = document.getElementById("contactModal");
        var contactLink = document.getElementById("contactLink");
        var closeModal = document.getElementById("closeModal");
        var closeModalBtn = document.getElementById("closeModalBtn");

        // When the user clicks the "Contact Us" link, open the modal
        contactLink.onclick = function() {
            modal.style.display = "block";
        }

        // When the user clicks the close button (×), close the modal
        closeModal.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks the "Close" button at the bottom, close the modal
        closeModalBtn.onclick = function() {
            modal.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        }
    </script>
</body>
</html>
