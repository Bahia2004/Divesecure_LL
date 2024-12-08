<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="<?=site_url();?>">
            Scuba Diving
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">
            </ul>
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <?php if(! logged_in()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/login');?>">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/register');?>">Register</a>
                </li>
                <?php endif; ?>
                <li class="nav-item">
                    <a class="nav-link" href="#"><?=html_escape(get_username(get_user_id()));?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=site_url('auth/logout');?>">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    /* Navbar Background and Styling */
    nav.navbar {
        background-color: #0044cc; /* Blue background for the navbar */
        padding: 1rem 2rem; /* Add padding for better spacing */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for navbar */
    }

    .navbar-brand {
        color: #37AFE1; /* White color for the brand */
        font-weight: bold;
        font-size: 1.5rem; /* Increase font size for branding */
        transition: color 0.3s ease; /* Smooth transition on hover */
    }

    .navbar-brand:hover {
        color: #f1c40f; /* Gold color on hover */
    }

    .navbar-toggler-icon {
        background-color: white; /* White color for the hamburger menu */
    }

    .navbar-nav .nav-link {
        color: white; /* White color for navbar links */
        font-weight: 500;
        font-size: 1.1rem; /* Slightly larger font size for readability */
        margin-left: 1rem; /* Space between nav items */
        transition: color 0.3s ease; /* Smooth color change on hover */
    }

    .navbar-nav .nav-link:hover {
        color: #f1c40f; /* Gold color on hover */
    }

    /* Media Queries for Mobile Responsiveness */
    @media (max-width: 768px) {
        .navbar-nav .nav-link {
            font-size: 1rem; /* Smaller font size for mobile */
            margin-left: 0.1rem; /* Less space between items on mobile */
        }
    }
</style>
