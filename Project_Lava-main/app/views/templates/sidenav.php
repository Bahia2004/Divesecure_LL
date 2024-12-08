<div class="col-md-4">
    <div class="card mb-2 shadow-sm">
        <div class="card-header bg-primary text-white">Dashboard</div>
        <div class="card-body">
            <div class="list-group-flush">
                <a href="<?=site_url();?>" class="list-group-item list-group-item-action">
                    <i class="bi bi-card-checklist"></i> Dashboard
                </a>
                <?php if(! is_teacher(get_user_id())):?>
                    <a href="<?=site_url('camera/take-picture');?>" class="list-group-item list-group-item-action">
                        <i class="bi bi-camera"></i> Take Selfie
                    </a>
                <?php endif;?>
                <a href="#" data-bs-toggle="modal" data-bs-target="#updateProfile" class="list-group-item list-group-item-action">
                    <i class="bi bi-person-lines-fill"></i> Update Profile
                </a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#updatePassword" class="list-group-item list-group-item-action">
                    <i class="bi bi-pencil-square"></i> Change Password
                </a>
            </div>
        </div>
    </div>
</div>

<style>
    /* Card styling */
    .card {
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
    }

    /* Card Header Styling */
    .card-header {
        background-color: #007bff; /* Primary blue background */
        color: white;
        font-weight: bold;
        font-size: 1.25rem;
    }

    /* List Group Styling */
    .list-group-item {
        border: none; /* Remove border */
        padding: 120px 168px; /* Add padding for a cleaner look */
        font-size: 1rem; /* Larger font size for readability */
        color: #333; /* Dark text color */
        background-color: transparent;
        transition: all 0.3s ease; /* Smooth transition for hover effects */
    }

    /* List Group Hover Effect */
    .list-group-item:hover {
        background-color: #f8f9fa; /* Light grey background on hover */
        color: #007bff; /* Blue text color on hover */
        border-left: 4px solid #007bff; /* Blue left border on hover */
    }

    /* Adding some padding and margins */
    .list-group-item i {
        margin-left: 10px; /* Space between icon and text */
        color: #007bff; /* Icon color */
    }

    /* Adjusting the item spacing */
    .list-group-item + .list-group-item {
        margin-top: 10px; /* Space between items */
    }

    /* Modal Button Adjustments */
    .list-group-item-action {
        cursor: pointer;
    }

    /* For responsiveness */
    @media (max-width: 768px) {
        .card-body {
            padding: 1rem; /* Adjust padding on small screens */
            margin-left: 20px;
        }
    }
</style>
