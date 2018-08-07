<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

<!-- Additional -->
    
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

</head>

<body>

  
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php">Main </a>
                </li>
                <li>
                    <a href="Stakeholders.php">Table</a>
                </li>
                <li>
                    <a href="Register.php">Register</a>
                </li>
                <li>
                    <a href="About.php">About</a>
                </li>
                <li>
                    <a href="Contact.php">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <h1>Register</h1>
               <div class="top-content">
       
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Login to our site</h3>
                                        <p>Enter username and password to log in:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="login-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-username">Username</label>
                                            <input type="text" name="form-username" placeholder="Username..." class="form-username form-control" id="form-username">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>
                                        <button type="submit" class="btn">Sign in!</button>
                                    </form>
                                </div>
                           </div>
                                                                             
                        </div>
                        
                        <div class="col-sm-1 middle-border"></div>
                        <div class="col-sm-1"></div>
                            
                        <div class="col-sm-5">
                            
                            <div class="form-box">
                                <div class="form-top">
                                    <div class="form-top-left">
                                        <h3>Sign up now</h3>
                                        <p>Fill in the form below to get instant access:</p>
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-pencil"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <form role="form" action="" method="post" class="registration-form">
                                        <div class="form-group">
                                            <label class="sr-only" for="form-full-name">Full name</label>
                                            <input type="text" name="form-full-name" placeholder="Full name..." class="form-full-name form-control" id="form-full-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-user-name">User name</label>
                                            <input type="text" name="form-user-name" placeholder="Last name..." class="form-user-name form-control" id="form-user-name">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-email">Email</label>
                                            <input type="text" name="form-email" placeholder="Email..." class="form-email form-control" id="form-email">
                                        </div>
                                        <div class="form-group">
                                            <label class="sr-only" for="form-password">Password</label>
                                            <input type="text" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                        </div>
               
                                        <div class="form-group">
                                            <label class="sr-only" for="form-about-yourself">Company</label>
                                             <input type="text" name="form-company" placeholder="Company..." class="form-company form-control" id="form-company">
                                        </div>
                                        <button type="submit" class="btn">Sign me up!</button>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            
        </div>

                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Toggle Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
