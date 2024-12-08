<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diver Registration</title>
    <!-- Google Fonts API -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-image: url('/public/images/ss.jpg');
            background-size: cover;
            background-position: center;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 215vh;
        }

        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            color: #4CAF50;
            font-weight: 500;
        }

        label {
            font-size: 1rem;
            color: #333;
            margin-bottom: 8px;
            display: inline-block;
        }

        input[type="text"], input[type="date"], select, textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            height: 100px;
        }

        button {
            background-color: #007bff;
            color: white;
            font-size: 1rem;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            width: 100%;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .form-group input[type="text"]:focus, .form-group select:focus, .form-group input[type="date"]:focus {
            border-color: #007bff;
            outline: none;
        }

        .form-group textarea:focus {
            border-color: #007bff;
            outline: none;
        }

        .terms {
            font-size: 0.9rem;
            color: #555;
        }

        .terms a {
            color: #007bff; /* Change color for the Terms and Conditions link */
            text-decoration: none;
        }

        .terms a:hover {
            text-decoration: underline;
        }

        .terms-and-conditions {
            font-size: 0.9rem;
            color: #555;
            margin-top: 20px;
        }

        .terms-and-conditions h4 {
            margin-top: 15px;
        }

        .terms-and-conditions p {
            margin: 5px 0;
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
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
        }

        .modal-content {
            background-color: #fff;
            margin: 15% auto;
            padding: 20px;
            border-radius: 4px;
            width: 80%;
        }

        .modal-header, .modal-body, .modal-footer {
            margin-bottom: 20px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 24px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Diver Registration</h1>
        <form action="/register_diver" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>
            <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
                <input type="hidden" id="min_age" name="min_age" value="18">
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
                <label for="contact_number">Contact Number:</label>
                <input type="text" id="contact_number" name="contact_number" pattern="\d{11}" title="Enter a valid 11-digit phone number" required>
            </div>
            <div class="form-group">
                <label for="emergency_contact_number">Emergency Contact Number:</label>
                <input type="text" id="emergency_contact_number" name="emergency_contact_number" pattern="\d{11}" title="Enter a valid 11-digit phone number" required>
            </div>
            <div class="form-group">
                <label for="emergency_contact_person">Emergency Contact Person:</label>
                <input type="text" id="emergency_contact_person" name="emergency_contact_person" required>
            </div>
            <div class="form-group">
                <label for="experience">Experience:</label>
                <select id="experience" name="experience" required>
                    <option value="Beginner">Beginner</option>
                    <option value="Intermediate">Intermediate</option>
                    <option value="Advanced">Advanced</option>
                    <option value="Professional">Professional</option>
                </select>
            </div>
            <div class="form-group">
                <label for="diving_certification">Diving Certification:</label>
                <select id="diving_certification" name="diving_certification" required>
                    <option value="None">None</option>
                    <option value="Open Water Diver">Open Water Diver</option>
                    <option value="Advanced Open Water Diver">Advanced Open Water Diver</option>
                    <option value="Rescue Diver">Rescue Diver</option>
                    <option value="Dive Master">Dive Master</option>
                    <option value="Instructor">Instructor</option>
                </select>
            </div>
            <div class="form-group">
                <label for="preferred_diving_date">Preferred Diving Date:</label>
                <input type="date" id="preferred_diving_date" name="preferred_diving_date" min="<?php echo date('Y-m-d'); ?>" required>
            </div>
            <div class="form-group">
                <label for="diving_spot">Diving Spot:</label>
                <select id="diving_spot" name="diving_spot" required>
                    <option value="Select Diving Spot">Select Diving Spot</option>
                    <option value="Spot 1: Coral Gardens">Spot 1: Coral Gardens</option>
                    <option value="Spot 2: Sunken Ship">Spot 2: Sunken Ship</option>
                    <option value="Spot 3: Shark Reef">Spot 3: Shark Reef</option>
                </select>
            </div>
            <div class="terms">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree to the <a href="javascript:void(0);" onclick="openModal()">Terms and Conditions</a>.</label>
            </div>

            <!-- Confirm information checkbox -->
            <div class="form-group terms">
                <input type="checkbox" id="confirm-info" name="confirm-info" required>
                <label for="confirm-info">I confirm that the information provided is accurate.</label>
            </div>

            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>

    <!-- Modal -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <div class="terms-and-conditions">
                <h4>Terms and Conditions</h4>
                <p>Welcome to our diving registration process! Please read the terms and conditions carefully.</p>
                <p>1. The registration is for experienced divers only. Beginners need to undergo training before registering.</p>
                <p>2. All divers must adhere to safety guidelines at all times.</p>
                <p>3. Liability waivers must be signed by all participants before diving.</p>
                <p>4. Refunds are not available once a booking is confirmed.</p>
                <p>5. All personal information will be kept confidential and used solely for registration purposes.</p>
                <p>6. By registering, you agree to comply with all local and international diving regulations.</p>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var dob = document.getElementById("dob").value;
            var minAge = document.getElementById("min_age").value;
            var birthDate = new Date(dob);
            var today = new Date();
            var age = today.getFullYear() - birthDate.getFullYear();
            var monthDifference = today.getMonth() - birthDate.getMonth();
            if (monthDifference < 0 || (monthDifference === 0 && today.getDate() < birthDate.getDate())) {
                age--;
            }
            if (age < minAge) {
                alert("You must be at least " + minAge + " years old to register.");
                return false;
            }
            return true;
        }

        function openModal() {
            var modal = document.getElementById("modal");
            modal.style.display = "block";
        }

        function closeModal() {
            var modal = document.getElementById("modal");
            modal.style.display = "none";
        }
    </script>
</body>
</html>
