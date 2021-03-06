<!DOCTYPE html>
<?php
session_start();

if (isset($_SESSION['user']) and !empty($_SESSION['user'])) {
    echo '<br />';
    echo "<h1 class='text-center'>Welcome " . $_SESSION['user']['Fullname'] . "</h1>";
    echo '<h2 class="text-center"><a href="./scripts/logout.php">Logout</a></h2>';
} else {
    header('Location: ./Register.php');
    exit;
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<?php 
include_once("db_connect.php");
?>
    <title>Stakeholders</title>

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
                <h1>Stakeholders</h1>              
                <table id="data_table" class="table table-striped">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Fullname</th>
                        <th>Position</th>
                        <th>Description</th>
                        <th>Success_criteria</th>
                        <th>Key_stakeholder</th>
                        <th>Deadline</th>
                        <th>Result</th>
                        <th>Final</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $sql_query = "SELECT ID_stk, Fullname, Position, Description, Success_criteria, Key_stakeholder, Deadline, Result, Final FROM stakeholders where ID_user=" . $_SESSION['user']['ID_user'];
                    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
                    while( $stakeholders = mysqli_fetch_assoc($resultset) ) {
                    ?>
                    <tr>
                        <td><?php echo $stakeholders ['ID_stk']; ?></td>
                        <td><?php echo $stakeholders ['Fullname']; ?></td>
                        <td><?php echo $stakeholders ['Position']; ?></td>
                        <td><?php echo $stakeholders ['Description']; ?></td>
                        <td><?php echo $stakeholders ['Success_criteria']; ?></td>
                        <td><?php echo $stakeholders ['Key_stakeholder']; ?></td>
                        <td><?php echo $stakeholders ['Deadline']; ?></td>
                        <td><?php echo $stakeholders ['Result']; ?></td>
                        <td><?php echo $stakeholders ['Final']; ?></td>
                    </tr>
                    <?php } ?>
                    </tbody>
                    </table>
                    </div>
<a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>

<form action="./scripts/live_edit.php" method="post">
    <tr>
        <td><input name='Fullname'/></td>
        <td><input name='Position'/></td>
        <td><input name='Description'/></td>
        <td><input name='Success_criteria'/></td>
        <td><input name='Key_stakeholder'/></td>
        <td><input name='Deadline'/></td>
        <td><input name='Result'/></td>
        <td><input name='Final'/></td>
        <input name="action" value="add" type="hidden" />
        <input type="submit" value="submit" />
    </tr>
</form>

            </div>
        </div>
             <!-- /#page-content-wrapper -->

    <!-- /#wrapper -->

    <!-- Menu Toggle Script -->

<script src="vendor/jquery/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script>
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});
</script>

<script type="text/javascript" src="scripts/jquery.tabledit.js"></script>
<script type="text/javascript" src="scripts/custom_table_edit.js"></script>
</body>


</html>
