<?php
$hostname = "localhost:3306";
$user = "root";
$password = "odfXaF8ttQ2x";
$database = "ebs_hangout";
$prefix = "";
$database=mysqli_connect($hostname,$user,$password,$database);
    if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}
?>
    <html>
    <head>
        <title>openEBS | Hangout #3</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="utf-8">
        <link href="../../styles/css/bootstrap.min.css" rel="stylesheet">
        <link href="../../styles/css/bootstrap-reboot.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../styles/css/openebs.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../../styles/js/bootstrap.min.js"></script>
    </head>

    <body class="careers-page">
        <section class="nav-section">
            <nav class="navbar navbar-expand-lg navbar-light" style="background:#fff; padding:2%;">
                <div class="container">
                    <a class="navbar-brand desktop-logo" href="../../index.html"><img src="../../styles/images/banner-icon.png" height="40" width="auto"></a>
                    <a class="navbar-brand mobile-logo" href="../../index.html"><img src="../../styles/images/openebs-logo.svg" height="40" width="auto"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarNav" aria-expanded="false" onclick="openNav()" aria-label="Toggle navigation" style="border:0px;"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-md-auto social-top">
                            <a href="https://www.facebook.com/openebs/" target="_blank">
                                <li class="nav-item p-2" style="display:inline;" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></li>
                            </a>
                            <a href="http://slack.openebs.io" target="_blank">
                                <li class="nav-item p-2" style="display:inline;" title="Slack"><i class="fa fa-slack" aria-hidden="true"></i></li>
                            </a>
                            <a href="https://blog.openebs.io" target="_blank">
                                <li class="nav-item p-2" style="display:inline;" title="Blog"><i class="fa fa-medium" aria-hidden="true"></i></li>
                            </a>
                            <a href="https://twitter.com/openebs" target="_blank">
                                <li class="nav-item p-2" style="display:inline;" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></li>
                            </a>
                            <a href="https://github.com/openebs/" target="_blank">
                                <li class="nav-item p-2" style="display:inline;" title="Github "><i class="fa fa-github" aria-hidden="true"></i></li>
                            </a>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
        <!--Event header info-->
        <section class="event">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="event-title">OpenEBS Hangout #3 <span class="event-time">Thursday September, 14th at 10:00 AM PST</span></h1>
                        <div class="webinars-detail__info" style="padding: 20px 0 30px;">
                            <div class="webinars-detail__date"><span class="sem-ts" data-test="time-switcher"><time datetime="2017-09-14 10:00" style="">Thursday, 14 September, 10:00 </time>PST</span></div><span class="webinars-detail__separator" style="">|</span>
                            <div class="webinars-detail__add-to-calendar" data-test="upcoming-add_to_calendar"><a href="/webinars/semrush-101-tuesday-september-12th-at-2-pm-est/calendar/google/" target="_blank" rel="noopener" style="">Add to Google calendar</a></div><span class="webinars-detail__separator" style="">|</span>
                            <div class="webinars-detail__lang" style="">
                                <svg fill="currentColor" preserveAspectRatio="xMidYMid meet" class="sem-icon" viewBox="0 0 16 16" width="16" height="16">
                                    <path d="M5 16v-1c1.1 0 2-.9 2-2-2.3-.5-4-2.6-4-5 0-.6.4-1 1-1s1 .4 1 1c0 1.7 1.3 3 3 3s3-1.3 3-3c0-.6.4-1 1-1s1 .4 1 1c0 2.4-1.7 4.5-4 5 0 1.1.9 2 2 2v1h-6zm3-6c-1.1 0-2-.9-2-2v-6c0-1.1.9-2 2-2s2 .9 2 2v6c0 1.1-.9 2-2 2z"></path>
                                </svg>
                                <!-- react-text: 39 -->
                                <!-- /react-text -->
                                <!-- react-text: 40 -->English
                                <!-- /react-text -->
                            </div>
                        </div>
                        <div> </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 agenda" style="border-right:1px dotted #64787e;">
                        <h3>Agenda</h3>
                        <br>
                        <ul>
                            <li style="list-style:none;"><span style="color:#ee5a2b; margin-right:1%; "><i class="fa fa-angle-right" aria-hidden="true"></i></span>Deployment guide for OpenEBS on AWS.</li>
                            <li style="list-style:none;"><span style="color:#ee5a2b; margin-right:1%; list-style:none;"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Generic storage benchmarking tool.</li>
                            <li style="list-style:none;"><span style="color:#ee5a2b; margin-right:1%; list-style:none;"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Discussion on added support OpenEBS Volume Snapshot API.</li>
                            <li style="list-style:none;"><span style="color:#ee5a2b; margin-right:1%; list-style:none;"><i class="fa fa-angle-right" aria-hidden="true"></i></span>OpenEBS project updates. </li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <form class="event-form" id="agile-form" action="register.php" method="post">
                            <h3>Register for Hangout <span class="text-muted">#3</span></h3>
                            <br>
                            <!--Form fields-->
                            <div class="form-group">
                                <input type="text" id="name_txt" name="name_txt" class="form-control" placeholder="Name" autocomplete="off" required> </div>
                            <div class="form-group">
                                <input type="email" id="email_txt" name="email_txt" class="form-control" placeholder="Email" autocomplete="off" required> </div>
                            <div>
                                <input type="submit" class="btn btn-success btn-ebs" name="hang-bttn" id="hang-bttn" value="Register now"></div>

                        </form>
                   
<?php 
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1);
if(isset($_REQUEST['hang-bttn'])){
$ppl_name=$_REQUEST['name_txt'];
$ppl_email=$_REQUEST['email_txt'];
$query="INSERT INTO `people` (`ppl_name`, `ppl_email`) VALUES ('$ppl_name', '$ppl_email')";
mysqli_query($database,$query) or die(mysqli_error($database));                       

?>
<script>
    alert('Thank you for registering!');
</script>

                        <?php
}
?>
                    </div>
                    
                </div>
            </div>
        </section>
    </body>

    </html>