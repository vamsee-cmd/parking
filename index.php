<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jits parking OPAC</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>
        .ican{
            width: 35%;
            border-radius :50%;
        }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">EZ Park</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="./login.php">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">What this site does?</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <img src="./assets/img/avail.jpeg" class="ican"></img>
                        <h4 class="my-3">Guaranteed availabilty</h4>
                        <p class="text-muted">Slot once booked will be made available and held for 30 mins after scheduled time</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/img/automated.jpeg" class="ican"></img>
                        <h4 class="my-3">Automated</h4>
                        <p class="text-muted">parking and check-out records are completely automated. So is the billing.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/img/web.jpeg" class="ican"></img>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">User data is mostly encrypted using substitution ciphers algorithms. Admins and our team can't see user data.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section bg-light" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Login to Billing.</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/login.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1</h4>
                                <h4 class="subheading">Login</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Login to the site to check for available slots. New users register providing the basic information.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/slot.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2</h4>
                                <h4 class="subheading">Slot Booking</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Select a white boxe labeled with slot no and proceed to pick date and time.</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/4.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>3</h4>
                                <h4 class="subheading">Arraival</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Contact the lot supervisor for slot directions or click arrived to notify him.</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/checkout.jpeg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>4</h4>
                                <h4 class="subheading">Check-out</h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted">Lot supervisor updates the check-out at the exit and a computer generated bill will be sent to your mobile.</p></div>
                        </div>
                    </li>
                   
                    <li class="timeline-inverted"> <a style="display:block" href="./login.php">
                        <div class="timeline-image">
                            <h4>
                                Have a
                                <br />
                                safe
                                <br />
                                parking!
                            </h4>
                        </div>
                    </a>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2><br>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/12.jpg" alt="..." />
                            <h4>Embadi VamshiKrishna</h4>
                            <p class="text-muted">Lead Backend Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-github"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-envelope"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/12.jpg" alt="..." />
                            <h4>Narla Rithwika</h4>
                            <p class="text-muted">Lead UI/UX Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-github"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-envelope"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/12.jpg" alt="..." />
                            <h4>Krishna</h4>
                            <p class="text-muted">Frontend designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-github"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fa fa-envelope"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Drop your kind feedback/suggestions/queries.</h3>
                </div>
                <form id="contactForm" data-sb-form-api-token="API_TOKEN" method="post">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit" name="submitButton">Send Message</button></div>
                    
                    <?php if(isset($_POST['submitButton'])){
                        
                    $conn=new mysqli('localhost','root','','parking');
                   if ($conn->connect_error) {
                    die("Connection failed: "
                        . $conn->connect_error);
                }
                   $sql="insert into feedback values('Vamshi','hello',9989962024,'Hi bro')";
                   if ($conn->query($sql) === TRUE) {
                    echo '<div class="d-none" id="submitSuccessMessage"><div class="text-center text-white mb-3"><div class="fw-bolder">Form subsion successful!</div></div></div>';
                  
                } else {
                    echo '<div class="d-none" id="submitSuccessMessage"><div class="text-center text-white mb-3"><div class="fw-bolder">Form submission successful!'. $conn->error.' </div></div></div>';
                  
                }
                }
                    ?>
                </form>
            </div>
        </section>
        <?php require 'footer.php'; ?>