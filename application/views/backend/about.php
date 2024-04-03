<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Beru Tesfa Primary School</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">
            <a href="index.php" class="navbar-brand">
            <h3 class="m-0 text-primary"><i class="fa fa-book-reader me-3"></i>Beru Tesfa Primary School </h3>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="<?php echo base_url(); ?>index.php?index_home" class="nav-item nav-link active">Home</a>
                    <a href="<?php echo base_url(); ?>index.php?about" class="nav-item nav-link">About Us</a>
                    <a href="<?php echo base_url(); ?>index.php?classes" class="nav-item nav-link">Classes</a>
                    <div class="nav-item dropdown">
                        <a href="<?php echo base_url(); ?>index.php?index" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                            <a href="<?php echo base_url(); ?>index.php?facility" class="dropdown-item">School Facilities</a>
                            <a href="<?php echo base_url(); ?>index.php?team" class="dropdown-item">Popular Teachers</a>
                            <a href="<?php echo base_url(); ?>index.php?testimonials" class="dropdown-item">Testimonial</a>
                            <a href="<?php echo base_url(); ?>index.php?appointment" class="dropdown-item">Make Appointment</a>
                           </div>
                    </div>
                    <a href="<?php echo base_url(); ?>index.php?contact" class="nav-item nav-link">Contact Us</a>
                </div>
                <a href="<?php echo base_url(); ?>index.php?login" class="btn btn-primary rounded-pill px-3 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>
    
            </div>
        </nav>
        <!-- Navbar End -->



        <!-- Page Header End -->
        <div class="container-xxl py-5 page-header position-relative mb-5">
            <div class="container py-5">
                <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Pages</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->
        <!-- About Start -->
        <div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-4">Learn More About Our Work And Our Cultural Activities</h1>
                <p>Ethiopia's culture is unique in Africa, with influences from Judaism, Christianity and Islam as well as traditional local folklore that combine between the Kingdom of Abyssinia and ancient Yemen and the Kingdom of Solomon the Wise</p>
                <p class="mb-4">Ethiopia contains over 80 different ethnic groups. Their ancestries vary, with some tracing back to Bantu or Nilotic tribes of sub-Saharan Africa whilst others have closer heritage to the Cushitic tribes of the Middle East.</p>
                <div class="row g-4 align-items-center">
                    <div class="col-sm-6">
                        <a class="btn btn-primary rounded-pill py-3 px-5" id="read-more-link" onclick="toggleAdditionalContent(event)">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                <div class="row">
                    <div class="col-12 text-center">
                        <img class="img-fluid w-75 rounded-circle bg-light p-3" src="img/about-1.jpg" alt="">
                    </div>
                    <div class="col-6 text-start" style="margin-top: -150px;">
                        <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="col-6 text-end" style="margin-top: -150px;">
                        <img class="img-fluid w-100 rounded-circle bg-light p-3" src="img/about-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="container" id="additional-content" style="display: none;">
            <p>Education and culture in Ethiopia are deeply intertwined, with a rich history that has been shaped by diverse cultural influences. Here's an overview of education and culture in Ethiopia:</p>
        <h3>Diverse Cultural Heritage:</h3>
        <p>Ethiopia is known for its diverse cultural heritage, with influences from various traditions, religions, and ethnic groups. The country's cultural mosaic is a result of the interplay of indigenous cultures and external influences, including ancient civilizations, Islam, and Christianity. The Ethiopian culture is often referred to as a "melting pot" of traditions.</p>
        <h3>Language and Writing:</h3>
        <p>Ethiopia is home to a variety of languages, but Amharic is the official language and serves as a unifying force in the country. Ge'ez, an ancient Semitic language, has played a significant role in Ethiopia's cultural and religious history. The Ge'ez script is used for liturgical purposes in the Ethiopian Orthodox Tewahedo Church.</p>
         <h3>Education and Historical Centers:</h3>
         <p>Education has deep roots in Ethiopian culture. Historically, monasteries and churches served as centers of learning, where religious texts were transcribed and preserved. Notably, the city of Axum is known for its ancient obelisks and historical significance.</p>
        <h3>Ethiopian Orthodox Tewahedo Church:</h3>
        <p>The Ethiopian Orthodox Tewahedo Church is a fundamental part of Ethiopian culture and has a profound influence on education and spirituality. Many schools and monastic institutions are affiliated with the Church.</p>
       <h3>Ancient Manuscripts:</h3>
        <p>Ethiopia is home to numerous ancient manuscripts, some of which are preserved in monasteries and libraries. These manuscripts contain religious texts, historical records, and cultural insights, contributing to the preservation of the country's cultural heritage.</p>
       <h3>Traditional Education:</h3>
      <p>In addition to formal education, Ethiopia has a rich tradition of oral education, where knowledge, wisdom, and cultural values are passed down through storytelling, proverbs, and folk traditions.</p>
     <h3>Modern Education System:</h3>
     <p>Ethiopia has made significant strides in modern education in recent decades. The country has a formal education system that includes primary, secondary, and tertiary education. Efforts have been made to improve access to education for all citizens.</p>
     <h3>UNESCO World Heritage Sites:</h3>
     <p>Ethiopia boasts several UNESCO World Heritage Sites, including Lalibela, a town known for its rock-hewn churches, and Aksum, an ancient city that is historically significant.</p>
     <h3>Arts and Crafts:</h3>
      <p>Ethiopian culture is rich in arts and crafts, including traditional music, dance, painting, and handwoven textiles. These artistic expressions often reflect the country's diverse cultural traditions.</p>
      <h3>Cultural Festivals:</h3>
      <p>Ethiopia celebrates various cultural festivals, with some of the most prominent being Timket (Epiphany), Meskel (Finding of the True Cross), and Enkutatash (New Year). These celebrations are a testament to the strong cultural and religious identity of the Ethiopian people.</p>
       <h3>Cultural Preservation:</h3>
       <p>Ethiopia has made efforts to preserve and protect its cultural heritage, and organizations like the Authority for Research and Conservation of Cultural Heritage (ARCCH) work towards safeguarding and promoting the nation's cultural treasures.</p>
    <p>In Ethiopia, culture and education are deeply interconnected, with an emphasis on preserving traditional values while embracing modern education and development. This unique blend of cultural diversity and educational advancement makes Ethiopia a fascinating and culturally rich nation.</p>
    </div>
    </div>
</div>
 
<script>
    function toggleAdditionalContent(event) {
        event.preventDefault();
        var additionalContent = document.getElementById('additional-content');
        var readMoreLink = document.getElementById('read-more-link');

        if (additionalContent.style.display === 'none') {
            additionalContent.style.display = 'block';
            readMoreLink.innerText = 'Read Less';
        } else {
            additionalContent.style.display = 'none';
            readMoreLink.innerText = 'Read More';
        }
    }
</script>
                </div>
            </div>
        </div>
        <!-- About End -->
        <!-- Call To Action Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="bg-light rounded">
                    <div class="row g-0">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                            <div class="position-relative h-100">
                                <img class="position-absolute w-100 h-100 rounded" src="img/call-to-action.jpg" style="object-fit: cover;">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="h-100 d-flex flex-column justify-content-center p-5">
                                <h1 class="mb-4">Become A Teacher</h1>
                                <p class="mb-4">A teacher is a professional educator who prepares students to continue their studies to enter the job market by providing knowledge. Teachers can also educate their students in soft skills , such as listening and time management, and hard skills, such as technical knowledge.
                                </p>
                                <a class="btn btn-primary py-3 px-5" href="">Be Come Professional Teacher</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call To Action End -->


        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Popular Teachers</h1>
                    <p>The other will centre around that aspirational Venn diagram mixture of being knowledgeable, being fair, and getting great results, all of which come together to become that most unattainable of attributes.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/team-1.jpg" alt="">
                            <div class="team-text">
                                <h3>Full Name</h3>
                                <p>Designation</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/team-2.jpg" alt="">
                            <div class="team-text">
                                <h3>Full Name</h3>
                                <p>Designation</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="team-item position-relative">
                            <img class="img-fluid rounded-circle w-75" src="img/team-3.jpg" alt="">
                            <div class="team-text">
                                <h3>Full Name</h3>
                                <p>Designation</p>
                                <div class="d-flex align-items-center">
                                    <a class="btn btn-square btn-primary mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-square btn-primary  mx-1" href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-8">
                        <h3 class="text-white mb-4">Get In Touch</h3>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Street, Addis Ababa, Ethiopia</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+251 910678902</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>berutesfa@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8">
                        <h3 class="text-white mb-4">Quick Links</h3>
                        <a class="btn btn-link text-white-50" href="<?php echo base_url(); ?>index.php?about">About Us</a>
                        <a class="btn btn-link text-white-50" href="<?php echo base_url(); ?>index.php?contact">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="<?php echo base_url(); ?>index.php?facility">Our Services</a>
                        <a class="btn btn-link text-white-50" href="#">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="#">Terms & Condition</a>
                    </div>
            
                    <div class="col-lg-3 col-md-6">
                        <h3 class="text-white mb-4">Newsletter</h3>
                        <p>Here signup to write new letter to school headmaster or administration.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                        <a href="<?php echo base_url(); ?>index.php?login" class="btn btn-primary rounded-pill px-3 d-md-block">SignUp<i class="fa fa-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container"> 
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">School Management System</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="#">Shime T</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.php">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->



        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>