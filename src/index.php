<?php
    session_start();
    // Generate CSRF token if not set
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alex Metzger | My Portfolio </title>
    <meta name="description" content="Alex Metzger is an independent Software Developer trying to develop a career in the field.">
    <meta name="keywords" content="Alex Metzger, web design, web developers, hire web designers, startup web design, The Domain Designers">
    <meta name="author" content="Alex Metzger">
    <link rel="icon" type="image/x-icon" href="assets/images/alex-pic.png">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <script type="text/javascript" src="https://unpkg.com/@play-ai/web-embed"></script>
    <script type="text/javascript">
    addEventListener("load", () => {
        PlayAI.open('0wDta2U5IN1EU0QQOJ-w4');
    });
    </script>
    <script src="js/ShapeIntersectionObserver.js"></script>
    <script src="js/navbarController.js"></script>
    <script src="js/showSuccessMessage.js" defer></script>
</head>
<body>

    <header class="hero">
        <nav class="navbar">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        
            <ul class="mobile-menu">
                <li><a href="#about-section">About</a></li>
                <li><a href="#portfolio-section">Projects</a></li>
                <li><a href="#contact-section">Contact</a></li>
            </ul>

            <ul class="nav-links">
                <li><a href="#about-section">About</a></li>
                <li><a href="#portfolio-section">Projects</a></li>
                <li><a href="#contact-section">Contact</a></li>
            </ul>

            <ul class="social-icons">
                <li><a href="mailto:ametzger08@gmail.com"><img src="assets/icons/email-blue.svg" width="25" height="25"></a></li>
                <li><a href="tel:+15758059738"><img src="assets/icons/phone-blue.svg" width="20" height="20"></a></li>
                <li><a href="https://www.linkedin.com/in/alex-metzger-699802233/"><img src="assets/icons/linkedin-blue.svg" width="25" height="25"></a></li>
                <li><a href="https://www.github.com/Metameg"><img src="assets/icons/github-blue.svg" width="25" height="25"></a></li>
            </ul> 

        </nav>
        

        <div class="hero-content">
            <div class="text-content">
                <h2>I AM</h2>
                <h1>Alex Metzger</h1>
                <p>Software Developer | Backend 
                </p>
                <a href="#contact-section"><button class="cta-button">Get in Touch</button></a>
            </div>
            <div class="img-container">
                <div class="image-content">
                    <img src="assets/images/blob.svg">
                    <img src="assets/images/alex-pic.png" class="headshot" alt="Alex Metzger's Headshot">
                </div>
            </div>
        </div>
    </header>

    <section class="section-divider">
        <div class="skewed-right"></div>
    </section>


    <section id="about-section">
        <h1>About Me</h1>
        <div class="paragraphs">
            <p>I'm an aspiring software developer from Houston, TX, currently pursuing a graduate degree in Artificial Intelligence at the University of Northern Texas. My diverse experiences have fueled my passion for technology and problem-solving through code.</p>
            <p>As I work toward transitioning into the software development industry, I'm eager to apply my AI knowledge to real-world projects. My goal is to create intelligent, impactful applications that make a difference.</p>
        </div>
    </section>

    <section id="portfolio-section">
        <h1>Recent Projects</h1>
        <div class="card-container">
            <a href="#" class="card omniclip-card">
                <div class="card-title">OmniClip</div>
            </a>
            <a href="https://thedomaindesigners.com/" class="card tdd-card">
                <div class="card-title">The Domain Designers</div>
            </a>
        </div>

        <div class="button-container">
            <a href="https://github.com/Metameg" class="custom-btn portfolio-btn">Source Code</a>
        </div>
    </section>

    <section class="section-divider">
        <div class="skewed-left"></div>
    </section>

    <section class="resume-section">
        <div class="shape-container">
            <section class="resume-overlay">
                <div class="resume-container">
                    <div class="header">
                        <h1>Alexander Metzger</h1>
                        <p>Denton, TX 76201 | <a href="tel:+15758059738">575-805-9738</a> | <a href="mailto:ametzger08@gmail.com">ametzger08@gmail.com</a></p>
                    </div>
                    
                    <div class="summary">
                        <h2>Professional Summary</h2>
                        <p>Talented Freelance Developer skilled at completing daily assignments and producing creative solutions for business requirements. Always willing to take on new task.
                    </div>
                    
                    <div class="skills">
                        <h2>Skills</h2>
                        <ul>
                            <li>Python</li>
                            <li>C++</li>
                            <li>JavaScript</li>
                            <li>Pytorch</li>
                            <li>HTML</li>
                            <li>MySQL</li>
                            <li>Java</li>
                            <li>CSS3</li>
                            <li>Cloud Computing (AWS)</li>
                        </ul>
                    </div>
                    
                    <div class="experience">
                        <h2>Experience</h2>
                        <h3>Unloader / Processor | Walmart | Denton, TX</h3>
                        <p>August 2024 - Current</p>
                        <ul>
                            <li>Unloaded trailers using power equipment</li>
                            <li>Ensured pallet case counts were correct</li>
                            <li>Used Walmart's freight processing and inventory systems to process incoming freight</li>
                        </ul>

                        <h3>Backup Systems Operator / Freezer Orderfiller  | Walmart | Corinne, UT</h3>
                        <p>August 2023 - August 2024</p>
                        <ul>
                            <li>Performed daily audits of equipment used throughout warehouse</li>
                            <li>Monitored system performance to identify potential issues and ensure optimal operations.</li>
                            <li>Prioritized help desk requests based on urgency and business impact </li>
                            <li>Managed technical support and maintenance for company-owned mobile devices.</li>
                        </ul>
                        
                        <h3>Freezer Orderfiller  | Walmart | McCarran, NV</h3>
                        <p>February 2019 - August 2023</p>
                        <ul>
                            <li>Achieved performance targets by quickly identifying, locating and counting merchandise for each order.</li>
                            <li>Built and stacked secure pallets of consumable and non-consumable goods.</li>
                        </ul>

                        <h3>IT Trainee | ECS | Houston, TX</h3>
                        <p>August 2023 - August 2024</p>
                        <ul>
                            <li>Troubleshooted problems with various software for employees</li>
                            <li>Installed software on employee PCs</li>
                            <li>Troubleshooted networking issues for the office</li>
                        </ul>
                    </div>
            
                    <div class="education">
                        <h2>Education</h2>
                        <h3>MS Artificial Intelligence | University of North Texas</h3>
                        <p>In Progress</p>
                        <h3>BS Computer Science | Southern New Hampshire University</h3>
                        <p>Graduated Magna Cum Laude | GPA: 3.73</p>
                    </div>
            
                    <div class="button-container">
                        <a href="Alex-Metzger_Resume.pdf" class="custom-btn portfolio-btn" download="Alex-Metzger_Resume.pdf">Download PDF</a>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="section-divider">
        <div class="skewed-right"></div>
    </section>

    <section id="contact-section">
        <div class="contact-info">
            <img src="assets/images/contact_me.svg" width="200" height="500">
        </div>
        <form id="contact_form" class="contact-form" method="post" enctype="multipart/form-data">
            <h2>Contact Me</h2>
            <p class="form-msg">Give me a shout!</p>    
            <div class="form-info">
                <p>Email: <a href="mailto:ametzger08@gmail.com">ametzger08@gmail.com</a></p>
                <p>Phone: <a href="tel:+15758059738">575-805-9738</a></p>
            </div>

            <div class="validation-box">
                <input id="full_name" type="text" placeholder="Name" name="name" required>
                <img id="name_success" class="success_icon" src="assets/icons/green_check.svg" width="20" height="20">
            </div>
            <span id="name_error" class="error_msg">Field is Required</span>

            <div class="validation-box">
                <input id="email" type="email" placeholder="Email" name="email" required>
                <img id="email_success" class="success_icon" src="assets/icons/green_check.svg" width="20" height="20">
            </div>
            <span id="email_error" class="error_msg">Field is Required</span>

            <div class="validation-box">
                <input id="phone" type="phone" placeholder="Phone" name="phone" required>
                <img id="phone_success" class="success_icon" src="assets/icons/green_check.svg" width="20" height="20">
            </div>  
            <span id="phone_error" class="error_msg">Field is Required</span>

            <div class="validation-box">
                <textarea id="message" placeholder="Message" name="message" required></textarea>
                <img id="message_success" class="success_icon" src="assets/icons/green_check.svg" width="20" height="20">
            </div>
            <span id="message_error" class="error_msg">Field is Required</span>

            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
            <button type="submit" class="custom-btn">Submit</button>
            <span id="form_error" class="error">
                There was a problem submitting the form. <br />
                Check the fields for errors.
            </span>
            <div id="responseMessage"></div>

        </form>
        
        <div id="spinner_overlay" class="spinner-overlay">
            <div class="spinner"></div>
        </div>

        <div class="section-divider">
            <div class="skewed-left footer-section-divider"></div>
        </div>

    </section>
     
    <!-- Response Message for debugging -->
    
    <script type="module" src="js/contactForm.js"></script>
    <script type="module" src="js/validators.js"></script>
    <script type="module">
        import {validators} from "./js/validators.js";

        $(document).ready(function() {
            $('#contact_form').submit(function(e) {
                e.preventDefault(); 
                console.log("submitted")    ;

                const isValid = validators.validateForm();

                if (!isValid) {
                    event.preventDefault();
                    // Display error message beneath the form
                    document.getElementById('form_error').style.display = "block";
                    document.querySelector('.success').style.display = "none";
                    // Prevent form submission
                    event.preventDefault();

                    return;
                }
                // Display loader
                // $('#loader').show();
                $('#spinner_overlay').css('display', 'flex');


                var formData = new FormData(this);
                for (var pair of formData.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }
                $.ajax({
                    url: 'plugins/contactForm/sendMail.php',
                    type: 'POST',
                    data: formData,
                    contentType: false,
                    processData: false,
                    dataType: 'json', // Expect JSON response
                    success: function(response) {
                        if (response.status === 'success') {
                            $('#responseMessage').html('<p class="success">' + response.message + '</p>');
                            $('.success').css('display', 'block');
                            $('.error').css('display', 'none');
                            $('#contact_form')[0].reset(); // Optionally reset form fields
                            <?php
                                echo 'showMessage("Email sent successfully!");';
                            ?>
                        } else {
                            // $('#responseMessage').html('<p class="error">' + response.message + '</p>');
                            $('.success').css('display', 'none');
                            $('.error').css('display', 'block');
                            <?php
                                echo 'showMessage("Oops! Something went wrong.");';
                            ?>

                        }

                        
                    },
                    error: function(xhr, status, error) {
                        // $('#responseMessage').html('<p class="error">Error: ' + error + '</p>');
                        $('.success').css('display', 'none');
                        $('.error').css('display', 'block');
                        <?php
                            echo 'showMessage("Oops! Something went wrong.");';
                        ?>
                    },
                    complete: function() {
                        // Hide loader when request completes
                        $('#spinner_overlay').css('display', 'none');

                    }
                });
            });
        });
    </script>

    <footer>
        <div class="footer-top">
            <div class="logo">
                <p>ALEX METZGER</p>
            </div>
        </div>
        <div class="footer-bottom">
            <ul class="social-icons">
                    <li><a href="mailto:ametzger08@gmail.com"><img src="assets/icons/email.svg" width="50" height="50"></a></li>
                    <li><a href="tel:+15758059738"><img src="assets/icons/phone.svg" width="50" height="50"></a></li>
                    <li><a href="https://linkedin.com/in/alex-metzger-699802233"><img src="assets/icons/linkedin.svg" width="50" height="50"></a></li>
                    <li><a href="https://github.com/Metameg"><img src="assets/icons/github.svg" width="50" height="50"></a></li>
            </ul> 
            <p>&copy; Copyright. All rights reserved.</p>
        </div>
    </footer>
    <script type="module" src="js/contactForm.js"></script>
</body>
</html>
