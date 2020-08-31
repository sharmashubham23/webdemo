<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "skyshop";

    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$jid = $_GET['jid'];
$sql = "SELECT * FROM `job_post` WHERE `id` = '$jid'";
$retval = mysqli_query($conn, $sql);

if(! $retval ) {
  die('Could not get data: ' . mysql_error());
}

$row = mysqli_fetch_array($retval)

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details</title>
    <link rel="stylesheet" href="https://www.betterteam.com/interface/css/styles.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- ============================================================================================= -->

<link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- ================================================================================= -->
</head>

<body>
<header>

<div class="header-area header-transparent">
    <div class="main-header ">
        <div class="header-bottom  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">

                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="menu-wrapper  d-flex align-items-center justify-content-end">

                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="categori.html">Categories</a></li>
                                        <li><a href="#">Pages</a>
                                            <ul class="submenu">
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog_details.html">Blog Details</a></li>
                                                <li><a href="elements.html">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="login.html">Log in</a></li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="header-right-btn d-none d-lg-block ml-65">
                                <a href="contact.html" class="border-btn">Post a Job</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</header>
<!-- nav bar -->

    <div class="container pt-4 mt-4">
        <div class="infobox noimg">
            <h2 style = "font-size = 25px"><?php echo $row[1] ?></h2><span><a class= "btn btn-primary" href="user/userjobapply.php?jid=<?php echo $jid ?>"><i class="fa fa-pencil" aria-hidden="true"></i>Apply</a></span>
            
            <p><h6>Qualifications</h6><?php echo str_replace("\n", "<br>",$row[2]) ?>
                </p>
                
            
            <p><h6>About Job</h6><?php echo str_replace("\n", "<br>",$row[4]) ?>
                </p>
                <p><h6>Responsibilities</h6><?php echo str_replace("\n", "<br>",$row[3]) ?>
                </p>
        </div>
        <a class= "btn btn-primary" href="user/userjobapply.php?jid=<?php echo $jid ?>"><i class="fa fa-pencil" aria-hidden="true"></i>Apply</a>
        <!-- <div class="infobox noimg"><h3 id="any-advice-for-writing-a-job-description-for-a-job-i-039-ve-never-done">Any advice for writing a job description for a job I've never done?</h3><p>Writing job descriptions when you've never done the job can be a bit intimidating. You'll want to be sure to talk to anyone at your company who is more familiar with the job, especially for help writing the description of responsibilities. You can also check out our <a href="https://www.betterteam.com/job-descriptions">job descriptions</a> we've created for hundreds of jobs that will get you started with a sample job description format.</p></div>
<div class="infobox noimg"><h3 id="any-advice-for-writing-a-job-description-for-a-job-i-039-ve-never-done">Any advice for writing a job description for a job I've never done?</h3><p>Writing job descriptions when you've never done the job can be a bit intimidating. You'll want to be sure to talk to anyone at your company who is more familiar with the job, especially for help writing the description of responsibilities. You can also check out our <a href="https://www.betterteam.com/job-descriptions">job descriptions</a> we've created for hundreds of jobs that will get you started with a sample job description format.</p></div>
<div class="infobox noimg"><h3 id="any-advice-for-writing-a-job-description-for-a-job-i-039-ve-never-done">Any advice for writing a job description for a job I've never done?</h3><p>Writing job descriptions when you've never done the job can be a bit intimidating. You'll want to be sure to talk to anyone at your company who is more familiar with the job, especially for help writing the description of responsibilities. You can also check out our <a href="https://www.betterteam.com/job-descriptions">job descriptions</a> we've created for hundreds of jobs that will get you started with a sample job description format.</p></div>
<div class="infobox noimg"><h3 id="any-advice-for-writing-a-job-description-for-a-job-i-039-ve-never-done">Any advice for writing a job description for a job I've never done?</h3><p>Writing job descriptions when you've never done the job can be a bit intimidating. You'll want to be sure to talk to anyone at your company who is more familiar with the job, especially for help writing the description of responsibilities. You can also check out our <a href="https://www.betterteam.com/job-descriptions">job descriptions</a> we've created for hundreds of jobs that will get you started with a sample job description format.</p></div> -->
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>