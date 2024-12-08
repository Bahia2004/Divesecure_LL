<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Diver - Diving School</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0"><i class="fas fa-user-plus"></i> Register New Diver</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo site_url('home/register'); ?>" method="POST">
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">First Name *</label>
                                    <input type="text" name="first_name" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Middle Name</label>
                                    <input type="text" name="middle_name" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Last Name *</label>
                                    <input type="text" name="last_name" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label class="form-label">Date of Birth *</label>
                                    <input type="date" name="dob" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Gender *</label>
                                    <select name="gender" class="form-select" required>
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Contact Number *</label>
                                    <input type="tel" name="contact_number" class="form-control" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Address *</label>
                                <textarea name="address" class="form-control" rows="2" required></textarea>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Emergency Contact Person *</label>
                                    <input type="text" name="emergency_contact_person" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Emergency Contact Number *</label>
                                    <input type="tel" name="emergency_contact_number" class="form-control" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label class="form-label">Diving Experience *</label>
                                    <select name="experience" class="form-select" required>
                                        <option value="">Select Experience Level</option>
                                        <option value="Beginner">Beginner</option>
                                        <option value="Intermediate">Intermediate</option>
                                        <option value="Advanced">Advanced</option>
                                        <option value="Professional">Professional</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Diving Certification *</label>
                                    <input type="text" name="diving_certification" class="form-control" required>
                                </div>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-save"></i> Register Diver
                                </button>
                                <a href="<?php echo site_url('home'); ?>" class="btn btn-secondary">
                                    <i class="fas fa-arrow-left"></i> Back to Home
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
