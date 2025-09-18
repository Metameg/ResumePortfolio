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
    <!-- https://swiperjs.com/swiper-api -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 
    <!-- <script type="text/javascript" src="https://unpkg.com/@play-ai/web-embed"></script>
    <script type="text/javascript">
    addEventListener("load", () => {
        PlayAI.open('0wDta2U5IN1EU0QQOJ-w4');
    });
    </script> -->
    <script src="js/ShapeIntersectionObserver.js"></script>
    <script src="js/navbarController.js"></script>
    <script src="js/showSuccessMessage.js" defer></script>
    <script src="js/confetti.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js"></script>
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
            
            <!-- Southwest Candles -->
            <a href="https://southwestcandles.shop" class="card">
                <img src="assets/images/swcandles.jpg" alt="Southwest Candles" class="card-img" />
                <div class="card-content">
                    <div class="card-title">Southwest Candles</div>
                    <div class="pill-container">
                        <span class="pill">Custom Design</span>
                        <span class="pill">Stripe API</span>
                        <span class="pill">MYSQL</span>
                        <span class="pill">HTML5</span>
                        <span class="pill">CSS3</span>
                        <span class="pill">Javascript</span>
                        <span class="pill">PHP</span>
                    </div>
                </div>
            </a>

            <!-- OmniClip -->
            <a href="https://github.com/Metameg/Omniclip" class="card">
                <img src="assets/images/omni-thumbnail.jpg" alt="OmniClip" class="card-img" />
                <div class="card-content">
                    <div class="card-title">OmniClip</div>
                    <div class="pill-container">
                        <span class="pill">AI</span>
                        <span class="pill">Flask</span>
                        <span class="pill">MYSQL</span>
                        <span class="pill">CSS3</span>
                        <span class="pill">Javascript</span>
                    </div>
                </div>
            </a>

            <!-- The Domain Designers -->
            <a href="https://thedomaindesigners.com/" class="card">
                <img src="assets/images/tdd_logo.png" alt="The Domain Designers" class="card-img" />
                <div class="card-content">
                    <div class="card-title">The Domain Designers</div>
                    <div class="pill-container">
                        <span class="pill">Custom Design</span>
                        <span class="pill">HTML5</span>
                        <span class="pill">CSS3</span>
                        <span class="pill">Javascript</span>
                        <span class="pill">PHP</span>
                    </div>
                </div>
            </a>
        </div>

        <div class="button-container">
            <a href="https://github.com/Metameg" class="custom-btn portfolio-btn">Source Code</a>
        </div>
    </section>

    <!-- <section id="portfolio-section">
        <h1>Recent Projects</h1>
        <div class="card-container">
            <a href="https://southwestcandles.shop" class="card swcandles-card">
                <div class="card-title">Southwest Candles</div>
            </a>
            <a href="https://github.com/Metameg/Omniclip" class="card omniclip-card">
                <div class="card-title">OmniClip</div>
            </a>
            <a href="https://thedomaindesigners.com/" class="card tdd-card">
                <div class="card-title">The Domain Designers</div>
            </a>
        </div>

        <div class="button-container">
            <a href="https://github.com/Metameg" class="custom-btn portfolio-btn">Source Code</a>
        </div>
    </section> -->

    <section class="section-divider">
        <div class="skewed-left"></div>
    </section>

    <section class="resume-section">
        <div class="shape-container">
            <section class="resume-overlay">
            <div class="resume-container">
                
                <!-- Header -->
                <div class="header">
                    <h1>Alex Metzger</h1>
                    
                    <p>
                        <img src="assets/icons/phone.svg" width="20" height="20"><a href="tel:+15758059738">575-805-9738</a> | 
                        <img src="assets/icons/email.svg" width="20" height="20"><a href="mailto:ametzger08@gmail.com">ametzger08@gmail.com</a> | 
                        <img src="assets/icons/phone.svg" width="20" height="20"><a href="https://www.alex-metzger.com" target="_blank">alex-metzger.com</a>
                    </p>
                    <p>
                        <img src="assets/icons/github.svg" width="20" height="20"><a href="https://www.github.com/Metameg" target="_blank">GitHub</a> | 
                        <img src="assets/icons/linkedin.svg" width="20" height="20"><a href="https://www.linkedin.com/in/alex-metzger-699802233" target="_blank">LinkedIn</a>
                    </p>
                </div>

                <!-- Experience -->
                <div class="experience">
                <h2>Experience</h2>

                <h3>AI Research Assistant | University of North Texas</h3>
                <p>May 2025 - Present</p>
                <ul>
                    <li>Conducted AI research on multi-label classification tasks using 
                        <span class=" confetti-trigger">Large Language Models
                            <canvas class="confetti-canvas"></canvas>
                        </span>.
                    </li>
                    <li>Designed and executed experiments exploring mutual information as an alternative evaluation metric.</li>
                    <li>Applied <span class=" confetti-trigger">prompt engineering
                                    <canvas class="confetti-canvas"></canvas>
                                </span> techniques to optimize LLM performance.</li>
                    <li>Documented methodology, findings, and results for integration into research reports and publications.</li>
                    <li>Collaborated with team members to refine experimental design and interpret results.</li>
                </ul>

                <h3>Freelancer | The Domain Designers</h3>
                <p>Dec 2024 - Present</p>
                <ul>
                    <li>Designed and developed
                                 <span class=" confetti-trigger">responsive websites
                                    <canvas class="confetti-canvas"></canvas>
                                </span> for small business owners.</li>
                    <li>Built dynamic, user-friendly interfaces with 
                                <span class=" confetti-trigger">modern JavaScript frameworks
                                    <canvas class="confetti-canvas"></canvas>
                                </span> and reusable components.</li>
                    <li>Integrated 
                                <span class=" confetti-trigger"> third-party services and APIs
                                    <canvas class="confetti-canvas"></canvas>
                                </span> to enhance site functionality.</li>
                    <li>Optimized website performance for speed, accessibility, and SEO.</li>
                    <li>Collaborated directly with clients to gather requirements and deliver custom solutions.</li>
                </ul>

                <h3>Unloader / Freezer Orderfiller | Walmart</h3>
                <p>Feb 2019 - Present</p>
                </div>

                <!-- Education -->
                <div class="education">
                <h2>Education</h2>
                <h3>MS Artificial Intelligence | University of North Texas</h3>
                <p>Aug 2024 - Present | 
                                <span class=" confetti-trigger">GPA: 4.0
                                    <canvas class="confetti-canvas"></canvas>
                                </span></p>

                <h3>BS Computer Science | Southern New Hampshire University</h3>
                <p>Aug 2020 - May 2022 | 
                                <span class=" confetti-trigger">GPA: 3.73
                                    <canvas class="confetti-canvas"></canvas>
                                </span> | 
                                <span class=" confetti-trigger">Magna Cum Laude
                                    <canvas class="confetti-canvas"></canvas>
                                </span></p>

                <h3>Computer Engineering | Texas A&M University</h3>
                <p>Aug 2013 - Dec 2016</p>
                </div>

                <!-- Download -->
                <div class="button-container">
                <a href="AlexMetzgerResume-2025.pdf" class="custom-btn portfolio-btn" download="AlexMetzgerResume-2025.pdf">Download PDF</a>
                </div>

            </div>
            </section>
        </div>
        </section>


    <section class="section-divider">
        <div class="skewed-right"></div>
    </section>


    <section id="contact-section">
        <div class="contact-left">
            <h2>Have a <br> Question?</h2>
            <p>
            Thank you for visiting my website. I'm a software developer with a strong focus in Artificial Intelligence and I'm currently seeking new opportunities to apply my skills in innovative projects.
            </p>
            <p>
            I personally review all messages, so please allow up to 24 hours for a response. I look forward to hearing from you!
            </p>

            <div class="contact-info">
            <p><img src="assets/icons/email.svg" width="20" height="20"><a href="mailto:ametzger8@gmail.com">      ametzger08@gmail.com</a></p>
            <p><img src="assets/icons/phone.svg" width="20" height="20"><a href="tel:5758059738">       575-805-9738</a></p>
            </div>
        </div>

        <form id="contact_form" class="contact-form" method="post">
            <div class="form-row">
                <div class="validation-box">
                    <input type="text" id="full_name" name="name" placeholder="*Full Name" required>
                    <img id="name_success" class="success_icon" src="assets/icons/green_check.svg" width="20" height="20">
                </div>
            </div> 
            <span id="name_error" class="error_msg">Field is Required</span>

            <div class="form-row">
                <div class="validation-box">
                    <input type="email" id="email" name="email" placeholder="*Email" required>
                    <img id="email_success" class="success_icon" src="assets/icons/green_check.svg" width="20" height="20">
                </div>
            </div>
            <span id="email_error" class="error_msg">Field is Required</span>

            <div class="form-row">
                <div class="validation-box">
                    <input type="tel" id="phone" name="phone" placeholder="Phone Number (optional)">
                    <img id="phone_success" class="success_icon" src="assets/icons/green_check.svg" width="20" height="20">
                </div>
            </div>

            <div class="form-row">
                <div class="validation-box">
                    <textarea id="message" name="message" placeholder="*Message" required></textarea>
                    <img id="message_success" class="success_icon" src="assets/icons/green_check.svg" width="20" height="20">
                </div>
            </div>
            <span id="message_error" class="error_msg">Field is Required</span>

            <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">

            <button type="submit">SUBMIT</button>

            <span id="form_error" class="error">
            There was a problem submitting the form. <br />
            Check the fields for errors.
            </span>
            <div id="responseMessage"></div>
        </form>
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
