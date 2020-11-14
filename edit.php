<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Covid Sucks</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><input type="submit" value="Save" name="action" class="btn btn-primary" title="Save Changes"></input></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white">
            <div class="container">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase text-center mb-0">Edit Information</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="lead">Covid Status:</p>
                        <div class="control-group">
                            <div class="form-group controls mb-0 pb-2">
                                <input class="form-control" id="covid_status" type="text" placeholder="Covid Status" required="required" data-validation-required-message="Please enter your covid status." />
                            </div>
                        </div>
                        <p class="lead">Street:</p>
                        <div class="control-group">
                            <div class="form-group controls mb-0 pb-2">
                                <input class="form-control" id="street" type="text" placeholder="Street Address" required="required" data-validation-required-message="Please enter your street address." />
                            </div>  
                        </div>
                        <p class="lead">City:</p>
                        <div class="control-group">
                            <div class="form-group controls mb-0 pb-2">
                                <input class="form-control" id="city" type="text" placeholder="City" required="required" data-validation-required-message="Please enter your city." />
                            </div>  
                        </div>
                        <p class="lead">State:</p>
                        <div class="control-group">
                            <div class="form-group controls mb-0 pb-2">
                                <input class="form-control" id="state" type="text" placeholder="State" required="required" data-validation-required-message="Please enter your state." />
                            </div>  
                        </div>
                        <p class="lead">Zipcode:</p>
                        <div class="control-group">
                            <div class="form-group controls mb-0 pb-2">
                                <input class="form-control" id="zipcode" type="text" placeholder="Zipcode" required="required" data-validation-required-message="Please enter your zipcode." />
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </header>
        
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright © Your Website 2020</small></div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>