<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DiveSecure - Explore the Depths of Calapan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons for Checkmark -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        /* Hero Section */
        #hero {
            background: url('/public/images/scuba.jpeg') no-repeat center center/cover;
            height: 100vh;
            color: white;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        #hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Dark overlay */
            z-index: 1;
        }

        #hero div {
            position: relative;
            z-index: 2;
        }

        #hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
        }

        #hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        #hero a {
            margin: 0 10px;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            text-decoration: none;
        }

        #hero .btn-primary {
            background-color: #007bff;
            border: none;
        }

        #hero .btn-secondary {
            background-color: #6c757d;
            border: none;
        }

        /* Section Headings */
        section h2 {
            text-align: center;
            margin-bottom: 2rem;
            font-weight: bold;
            color: #0056b3;
        }

        /* Section Padding */
        section {
            padding: 4rem 0;
        }

        #packages {
    background-color: #f0f8ff; /* Soft ocean blue */
    padding: 40px 0;
    text-align: center;
}

#packages h2 {
    font-size: 2.5rem;
    color: #00796b;
    margin-bottom: 30px;
    text-transform: uppercase;
}

#packages .col-md-4 {
    margin-bottom: 20px;
}

#packages h3 {
    font-size: 1.8rem;
    color: #00695c;
}

#packages p {
    font-size: 1.1rem;
    color: #004d40;
}

#packages .btn-primary {
    background-color: #00796b;
    border-color: #00796b;
    transition: background-color 0.3s ease;
}

#packages .btn-primary:hover {
    background-color: #004d40;
    border-color: #004d40;
}

.modal-content {
    border-radius: 10px;
}

.modal-header {
    background-color: #004d40;
    color: #fff;
    border-bottom: none;
}

.modal-footer {
    background-color: #f0f8ff;
    border-top: none;
}

        /* Registration Form */
        #registration form {
            max-width: 600px;
            margin: 0 auto;
            background: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        #registration form .form-label {
            font-weight: bold;
        }

        #registration button {
            width: 100%;
        }

        #dive-spots {
    background-color: #f0f8ff; /* Light blue background */
    padding: 50px 0;
}

#dive-spots h2 {
    color: #004d40; /* Deep green for titles */
    font-size: 2.5rem;
    font-weight: bold;
}

#dive-spots .badge {
    font-size: 0.9rem;
    padding: 5px 10px;
    border-radius: 20px;
    font-weight: bold;
}

#dive-spots ul {
    margin: 20px 0;
    font-size: 1.2rem;
    color: #00695c; /* Darker green for text */
}

#dive-spots video {
    border: 2px solid #004d40;
    border-radius: 10px;
}

#dive-spots p {
    font-size: 1rem;
    color: #004d40;
}



        /* Safety Guidelines */
        #safety {
            background-color: #f8f9fa;  /* Light gray background */
            padding-top: 3rem;
            padding-bottom: 3rem;
    }

#safety h2 {
    font-size: 2rem;
    font-weight: 600;
    color: #007bff;  /* Bootstrap primary color */
}

#safety ul {
    padding-left: 0;
}

#safety .list-group-item {
    font-size: 1.1rem;
    padding: 1.25rem;
    border: 1px solid #ddd;
    border-radius: 0.375rem;
    margin-bottom: 0.75rem;
}

#safety .list-group-item:last-child {
    margin-bottom: 0;
}

#safety .container {
    max-width: 800px;  /* Limit the width of the content */
}


        /* Testimonials Section */
        #testimonials {
    background-color: #f8f9fa; /* Light background */
    padding-top: 3rem;
    padding-bottom: 3rem;
}

#testimonials h2 {
    font-size: 2rem;
    font-weight: 600;
    color: #007bff; /* Bootstrap primary color */
}

#testimonials p {
    font-size: 1.25rem;
    font-style: italic;
}

#testimonials strong {
    font-size: 1rem;
    font-weight: bold;
    color: #333;
}


 /* FAQ Accordion */
#faqs {
    background-color: #e0f7fa; /* Light blue background */
    padding: 40px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.accordion-button {
    background-color: #4fc3f7; /* Light blue */
    color: white;
    font-weight: bold;
    transition: all 0.3s ease;
}

.accordion-button:not(.collapsed) {
    background-color: #0288d1; /* Darker blue */
    color: white;
}

.accordion-button:hover {
    background-color: #0288d1; /* Darker blue on hover */
}

.accordion-body {
    background-color: #b3e5fc; /* Lighter blue */
    font-size: 1.1rem;
    color: #333;
    border-top: 1px solid #0288d1; /* Darker blue border */
    transition: all 0.3s ease-in-out;
}

.accordion-item {
    margin-bottom: 1rem;
}

h2 {
    font-size: 1.5rem;
    color: #0288d1; /* Dark blue */
    text-align: center;
}


        /* Footer */
        footer {
            background: #333;
            color: white;
            padding: 1rem 0;
        }

        footer a {
            color: #007bff;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }

/* About Section */
#about {
    background: linear-gradient(135deg, #e0f7fa, #80deea); /* Light blue gradient background */
    padding: 60px 20px;
    border-radius: 8px;
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
    transition: all 0.4s ease;
}

/* Hover effect for About Section */
#about:hover {
    transform: translateY(-5px); /* Subtle hover effect */
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15); /* More intense shadow on hover */
}

/* Section Heading */
#about h2.display-4 {
    font-size: 2.5rem;
    font-weight: 600;
    color: #0288d1; /* Dark blue */
    margin-bottom: 30px;
}

/* Lead Paragraph */
#about p.lead {
    font-size: 1.2rem;
    color: #333;
    font-weight: 400;
    margin-bottom: 30px;
}

/* Subheading - Why Dive Here */
#about p.h4 {
    font-size: 1.5rem;
    color: #0288d1;
    font-weight: 500;
    margin-bottom: 20px;
}

/* List of Reasons to Dive */
#about ul.list-unstyled {
    font-size: 1.1rem;
    color: #555;
    list-style: none;
    padding-left: 0;
    margin-bottom: 40px;
}

#about ul.list-unstyled li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    transition: color 0.3s ease;
}

#about ul.list-unstyled li i {
    margin-right: 10px;
    font-size: 1.3rem;
}

#about ul.list-unstyled li:hover {
    color: #0288d1; /* Highlight list items on hover */
}

/* Marine Life Section */
#about .mt-5 {
    margin-top: 40px;
}

#about p.lead {
    font-size: 1.1rem;
    color: #555;
}

/* List of Marine Life */
#about ul.list-unstyled {
    font-size: 1.1rem;
    color: #555;
    list-style: none;
    padding-left: 0;
}

#about ul.list-unstyled li {
    margin-bottom: 10px;
    display: flex;
    align-items: center;
}

#about ul.list-unstyled li i {
    margin-right: 10px;
    font-size: 1.3rem;
}

#about ul.list-unstyled li i.text-primary {
    color: #0288d1; /* Blue check mark icon */
}

/* Responsive Typography */
@media (max-width: 767px) {
    #about h2.display-4 {
        font-size: 2rem;
    }

    #about p.lead {
        font-size: 1.1rem;
    }

    #about p.h4 {
        font-size: 1.3rem;
    }

    #about ul.list-unstyled li {
        font-size: 1rem;
    }

    #about ul.list-unstyled li i {
        font-size: 1.2rem;
    }
}

    /* Adding responsive typography for smaller screens */
    @media (max-width: 767px) {
        h2.display-4 {
            font-size: 2rem;
        }

        p.lead {
            font-size: 1.1rem;
        }

        p.h4 {
            font-size: 1.3rem;
        }
    }

/* Gallery Section Enhancements */
#gallery {
    background-color: #e0f7fa; /* Underwater theme */
    padding: 40px 0;
    position: relative;
}

#gallery h2 {
    font-family: 'Roboto', sans-serif;
    font-size: 2.5rem;
    color: #00796b;
    text-align: center;
    margin-bottom: 30px;
    text-transform: uppercase;
    letter-spacing: 2px;
    animation: fadeIn 2s ease-in-out;
}

.image-wrapper {
    position: relative;
    overflow: hidden;
    cursor: pointer;
}

.image-wrapper img {
    transition: transform 0.3s ease-in-out;
    border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.image-wrapper img:hover {
    transform: scale(1.05);
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
}

.image-caption {
    position: absolute;
    bottom: 10px;
    left: 0;
    width: 100%;
    text-align: center;
    background: rgba(0, 0, 0, 0.6);
    color: #fff;
    font-size: 1rem;
    padding: 5px 0;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
}

.image-wrapper:hover .image-caption {
    opacity: 1;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1050;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.8);
}

.modal-content {
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80%;
    border-radius: 12px;
}

#modalCaption {
    text-align: center;
    color: #fff;
    font-size: 1.2rem;
    margin-top: 15px;
}

.close {
    position: absolute;
    top: 20px;
    right: 35px;
    color: #fff;
    font-size: 2rem;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
}

.close:hover {
    color: #ff4d6d;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}



        



    </style>
</head>
<body>

    <?php include APP_DIR.'views/templates/header.php'; ?>

    <div id="app">
        <?php include APP_DIR.'views/templates/nav.php'; ?>

        <!-- Hero Section -->
        <div id="hero">
            <div>
                <h1>Explore the Depths of Calapan: Dive into Adventure!</h1>
                <p>Discover the underwater wonders of Calapan with our expert dive packages and courses.</p>
                <a href="register_diver" class="btn btn-primary">Register for Your Dive</a>
                <a href="#about" class="btn btn-secondary">Learn More</a>
            </div>
        </div>


        <section id="gallery" class="py-5">
    <div class="container">
        <h2 class="text-center">Explore Our Underwater World</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="image-wrapper">
                    <img src="/public/images/reef.jpeg" class="img-fluid rounded mb-3 gallery-img" alt="Coral reef">
                    <div class="image-caption">Coral Reef</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-wrapper">
                    <img src="/public/images/school.jpg" class="img-fluid rounded mb-3 gallery-img" alt="School of Fish">
                    <div class="image-caption">School of Fish</div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="image-wrapper">
                    <img src="/public/images/scuba2.jpeg" class="img-fluid rounded mb-3 gallery-img" alt="Underwater diver">
                    <div class="image-caption">Underwater Diver</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Image View -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
        <div id="modalCaption"></div>
    </div>
</section>



<!-- About Scuba Diving in Calapan -->
<section id="about" class="text-center py-5">
    <h2 class="display-4 text-primary mb-4">About Scuba Diving in Calapan</h2>
    <p class="lead mb-4">Calapan City offers a world-class scuba diving experience with its rich marine biodiversity and pristine dive spots. From vibrant coral reefs to fascinating wrecks, you'll find an underwater paradise here.</p>
    <p><strong class="h4 text-info">Why Dive Here?</strong></p>
    <ul class="list-unstyled mb-4">
        <li><i class="bi bi-check-circle text-success"></i> Stunning coral reefs teeming with marine life.</li>
        <li><i class="bi bi-check-circle text-success"></i> Exciting wreck dives for adventure seekers.</li>
        <li><i class="bi bi-check-circle text-success"></i> Witness rare marine species found only in this region.</li>
        <li><i class="bi bi-check-circle text-success"></i> Calm, clear waters offering excellent visibility for divers.</li>
        <li><i class="bi bi-check-circle text-success"></i> Year-round diving opportunities with warm water temperatures.</li>
    </ul>

    <p class="mt-5"><strong class="h4 text-info">Marine Life to Discover</strong></p>
    <p class="lead">Scuba diving in Calapan isn't just about the dive sites; it's also about the incredible marine life you'll encounter. Some of the notable species include:</p>
    <ul class="list-unstyled">
        <li><i class="bi bi-check-circle text-primary"></i> Vibrant clownfish hiding in anemones.</li>
        <li><i class="bi bi-check-circle text-primary"></i> Majestic manta rays gliding gracefully through the water.</li>
        <li><i class="bi bi-check-circle text-primary"></i> Enormous schools of barracuda.</li>
        <li><i class="bi bi-check-circle text-primary"></i> Endangered sea turtles gracefully swimming along the reefs.</li>
        <li><i class="bi bi-check-circle text-primary"></i> Colorful nudibranchs and small critters in the coral gardens.</li>
    </ul>
</section>


        <!-- Dive Packages Section -->
<section id="packages" class="py-5">
    <div class="container">
        <h2 class="text-center">Our Dive Packages</h2>
        <div class="row">
            <!-- Beginner Courses -->
            <div class="col-md-4">
                <h3>Beginner Courses</h3>
                <p>Intro to Diving</p>
                <p>Duration: 2 Days</p>
                <p>Price: ₱5000</p>
                <p>Inclusions: Gear, Instructor, Boat</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#beginnerModal">More Info</button>
            </div>
            <!-- Advanced Courses -->
            <div class="col-md-4">
                <h3>Advanced Courses</h3>
                <p>Advanced Diving Techniques</p>
                <p>Duration: 3 Days</p>
                <p>Price: ₱7000</p>
                <p>Inclusions: Gear, Instructor, Boat</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#advancedModal">More Info</button>
            </div>
            <!-- Guided Dives -->
            <div class="col-md-4">
                <h3>Guided Dives</h3>
                <p>Explore Dive Sites with Expert Guides</p>
                <p>Duration: 1 Day</p>
                <p>Price: ₱3000</p>
                <p>Inclusions: Gear, Guide, Boat</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#guidedModal">More Info</button>
            </div>
        </div>
    </div>
</section>

<!-- Modal Template -->
<div class="modal fade" id="beginnerModal" tabindex="-1" aria-labelledby="beginnerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="beginnerModalLabel">Beginner Courses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Our Beginner Courses are designed for those who are new to diving. You will learn basic skills and safety measures in a controlled environment.</p>
                <ul>
                    <li>Introductory Pool Session</li>
                    <li>1 Open Water Dive</li>
                    <li>Professional Instructor Guidance</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="advancedModal" tabindex="-1" aria-labelledby="advancedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="advancedModalLabel">Advanced Courses</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Take your diving skills to the next level with our Advanced Courses. Explore deeper waters and enhance your underwater navigation techniques.</p>
                <ul>
                    <li>Advanced Navigation Skills</li>
                    <li>Night Diving</li>
                    <li>Wreck and Reef Exploration</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="guidedModal" tabindex="-1" aria-labelledby="guidedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="guidedModalLabel">Guided Dives</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Experience the beauty of underwater life with our Guided Dives. Perfect for certified divers who want to explore the best dive sites.</p>
                <ul>
                    <li>Expert Dive Guides</li>
                    <li>Personalized Dive Plans</li>
                    <li>Safety-Oriented Approach</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>









<!-- Dive Spot Highlights -->
<section id="dive-spots" class="text-center py-5">
    <div class="container">
        <h2 class="display-4 mb-4">Explore Dive Spots</h2>
        <!-- Interactive Map -->
        <div id="map" class="leaflet-container mb-4" style="height: 400px; border-radius: 10px;"></div>

        <!-- Featured Spots -->
        <p><strong class="h4">Featured Spots:</strong></p>
        <ul class="list-unstyled">
            <li><strong>Spot 1:</strong> The Coral Gardens <span class="badge bg-success">Corals</span></li>
            <li><strong>Spot 2:</strong> The Wreck of the Sunken Ship <span class="badge bg-danger">Wreck Dive</span></li>
            <li><strong>Spot 3:</strong> The Shark Reef <span class="badge bg-warning">Marine Life</span></li>
        </ul>

        <!-- Video Highlights -->
        <div class="mt-5">
            <h3 class="mb-3">Dive Spot Highlights</h3>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <video controls class="img-fluid rounded">
                        <source src="/public/videos/coral_gardens.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p class="mt-2">The Coral Gardens</p>
                </div>
                <div class="col-md-4">
                    <video controls class="img-fluid rounded">
                        <source src="/public/videos/sunken_ship.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p class="mt-2">The Wreck of the Sunken Ship</p>
                </div>
                <div class="col-md-4">
                    <video controls class="img-fluid rounded">
                        <source src="/public/videos/shark_reef.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <p class="mt-2">The Shark Reef</p>
                </div>
            </div>
        </div>
    </div>
</section>


        <!-- Safety Guidelines -->
        <section id="safety" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">Safety Guidelines</h2>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Always dive with a certified instructor.</li>
            <li class="list-group-item">Never exceed your experience level.</li>
            <li class="list-group-item">Stay hydrated and avoid alcohol before diving.</li>
            <li class="list-group-item">Follow all safety protocols and guidelines during your dive.</li>
        </ul>
    </div>
</section>


<section id="testimonials" class="bg-light py-5">
    <div class="container">
        <h2 class="text-center mb-4">What Our Divers Say</h2>
        <div class="row">
            <div class="col-md-4">
                <p class="text-center">
                    <i class="bi bi-quote"></i> "The best dive experience ever! Calapan's marine life is stunning, and the dive operators are so professional."
                </p>
                <p class="text-center"><strong>- John Doe, Happy Diver</strong></p>
            </div>
            <div class="col-md-4">
                <p class="text-center">
                    <i class="bi bi-quote"></i> "An unforgettable adventure! The underwater world is beyond beautiful, and the guides made us feel completely safe."
                </p>
                <p class="text-center"><strong>- Jane Smith, Adventurous Diver</strong></p>
            </div>
            <div class="col-md-4">
                <p class="text-center">
                    <i class="bi bi-quote"></i> "The diving spots are amazing. I highly recommend diving in Calapan for anyone who loves marine life!"
                </p>
                <p class="text-center"><strong>- Mark Lee, Ocean Explorer</strong></p>
            </div>
        </div>
    </div>
</section>



 <!-- FAQs Accordion Section -->
<section id="faqs" class="container mt-5">
    <h2 class="text-center mb-4" style="font-size: 2rem; color: #ff4d6d;">Frequently Asked Questions</h2>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    What is the best time to go scuba diving in Calapan?
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    The best time for diving in Calapan is during the dry season, typically from December to May.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Do I need prior diving experience to register for courses?
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    No, we offer courses for both beginners and advanced divers. Our instructors will guide you through every step.
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- Footer Section -->
        <footer>
            <div class="container text-center">
                <p>&copy; 2024 DiveSecure. All Rights Reserved.</p>
                <a href="#">Terms of Service</a> | <a href="#">Privacy Policy</a>
            </div>
        </footer>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.bundle.min.js"></script>
    <script>

document.addEventListener('DOMContentLoaded', () => {
    const images = document.querySelectorAll('.gallery-img');
    const modal = document.getElementById('imageModal');
    const modalImg = document.getElementById('modalImage');
    const modalCaption = document.getElementById('modalCaption');
    const closeBtn = document.querySelector('.modal .close');

    images.forEach(img => {
        img.addEventListener('click', () => {
            modal.style.display = 'block';
            modalImg.src = img.src;
            modalCaption.textContent = img.alt;
        });
    });

    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.style.display = 'none';
        }
    });
});

// Initialize Map for Dive Spots
// Initialize the map centered on Calapan City
var map = L.map('map').setView([13.4115, 121.1803], 13); // Coordinates for Calapan City

// Add OpenStreetMap tile layer
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    maxZoom: 19,
    attribution: '© OpenStreetMap'
}).addTo(map);

// Dive spot markers within Calapan City area, now on the sea waters
var coralGardenMarker = L.marker([13.419311307824302,121.17306309866008]).addTo(map).bindPopup("<b>Coral Gardens</b><br>A stunning coral reef near Calapan.");
var sunkenShipMarker = L.marker([13.413666374495552,121.22734823244953]).addTo(map).bindPopup("<b>Wreck of the Sunken Ship</b><br>Explore the remnants of a historical shipwreck.");
var sharkReefMarker = L.marker([13.43803048764505,121.20563418524479]).addTo(map).bindPopup("<b>Shark Reef</b><br>Get up close with majestic marine life.");


    </script>
</body>
</html>
