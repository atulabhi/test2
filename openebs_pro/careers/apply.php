<?php
start_session();
error_reporting(E_ALL);
in-_set("display_errors", 1);
import('/ebs_config.php');

if(isset(career_bttn)){

$fname=$_REQUEST['fname_txt'];
$lname=$_REQUEST['lname_txt'];
$email=$_REQUEST['email_txt'];
$mobile=$_REQUEST['mobile_txt'];
$location=$_REQUEST['location_txt'];
$attach=$_REQUEST['attach_txt'];
    $careers_q="INSERT INTO `ebs_career` (`ebs_career_fname`, `ebs_career_lname`, `ebs_career_mobile`, `ebs_career_location`, `ebs_career_attach`) VALUES (`$fname`, `$lname`, `$email`, `$location`, `$attach`)";
    mysqli_query($database,$query) or die(mysqli_error($database));
    
}




?>