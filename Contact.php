<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

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
                <h1>Contact us</h1>
               <div class="container-fluid bg-light py-3">
    <form id="contact-form" method="post" action="contact.php" role="form">
        <div class="messages"></div>
        <div class="controls">
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_name">Name *</label>
                        <input id="form_name" type="text" name="surname" class="form-control" placeholder="Please enter your name *" required="required" data-error="name is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="form_phone">Company</label>
                        <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone number">
                        <div class="help-block with-errors"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="form_message">Message *</label>
                    <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="send a message."></textarea>
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-warning btn-send" value="Send message">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="text-muted"><strong>*</strong> These fields are required.</p>
            </div>
        </div>
    </form>
</div>
                <a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

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
