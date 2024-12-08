<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Scuba Diving</title>
    <link rel="icon" type="image/png" href="<?=base_url();?>public/img/favicon.ico"/>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="<?=base_url();?>public/css/main.css" rel="stylesheet">
    <link href="<?=base_url();?>public/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.4.0/css/buttons.dataTables.min.css" />

    <style>
        /* Navbar Styling */
        nav.navbar {
            background-color: #37AFE1; /* Blue background for the navbar */
        }

        .navbar-brand {
            color: white !important; /* Ensures the brand text is white */
            font-weight: 600;
        }

        .navbar-nav .nav-link {
            color: white; /* White text for nav items */
            font-weight: 500;
            transition: color 0.3s ease; /* Smooth transition effect */
        }

        .navbar-nav .nav-link:hover {
            color: #f1c40f; /* Gold color on hover */
        }

        .navbar-toggler-icon {
            background-color: white; /* Make the hamburger menu icon white */
        }

        /* Add some padding to the top of the body to prevent content being hidden behind the navbar */
        body {
            padding-top: 70px; /* Adjust this based on your navbar height */
        }

        /* Additional Styling for Navbar on Mobile */
        @media (max-width: 76px) {
            .navbar-nav .nav-link {
                font-size: 14px; /* Slightly smaller font for mobile */
            }
        }
    </style>

</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light shadow-sm">
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
                    <!-- Additional links can be added here -->
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('auth/login');?>">Login</a>
                    </li>                       
                    <li class="nav-item">
                        <a class="nav-link" href="<?=site_url('auth/register');?>">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content goes here -->
    <div class="container mt-4">
        <!-- Your content section -->
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
