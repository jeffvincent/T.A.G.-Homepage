<?php

$email = $_POST['email_address'];
$mailto = "info@thoseappleguys.com, x0xMaximus@gmail.com";
$mailsubj = "T.A.G. Email Submission";
$mailhead = 'MIME-Version: 1.0' . "\n";
$mailhead .= 'Content-type: text/html; charset=iso-8859-1' . "\n";
$mailhead .= "From: ThoseAppleGuys_EmailSubmission\n";
$mailhead .= "Reply-To: ".$email."\n";
$ip = $_SERVER['REMOTE_ADDR'];
$ua = $_SERVER['HTTP_USER_AGENT'];
$rp = $_SERVER['HTTP_REFERER'];

//reset ($HTTP_POST_VARS);
$mailbody = "
<html>
<h1>T.A.G. Email Form Submission</h1>
<h2>Mail sent on ".date('F j, Y')." at ".date('g : i a')." from ".date('T ')."</h2>
<p><b>Name:</b> ".$_POST['name']."</p>
<p><b>Email Address:</b> ".$_POST['email_address']."</p>
<p><b>This is where I live:</b> <a href='http://geotool.flagfox.net/?ip=$ip'>$ip</a> </p>
<p><b>I submitted this form on page:</b> $rp </p>
<p><b>Here is a little secret about me:</b> $ua </p>
</html>";

if (!eregi("\n",$_POST[EMAIL_ADDRESS])) { mail($mailto, $mailsubj, $mailbody, $mailhead); }

switch ($rp) {
    case 'http://www.thoseappleguys.com/' :
		$location = "/";
        break;
    case 'http://www.thoseappleguys.com/about/':
    	$location = "/about";
        break;
    case 'http://www.thoseappleguys.com/services/':
    	$location = "/services";
        break;
			case 'http://www.thoseappleguys.com/services/apple-computer-osx-training.php':
				$location = "/services/apple-computer-osx-training.php";
			    break;
			case 'http://www.thoseappleguys.com/services/apple-mac-data-recovery.php':
			 	$location = "/services/apple-mac-data-recovery.php";
			    break;
			case 'http://www.thoseappleguys.com/services/apple-mac-data-transfer.php':
			 	$location = "/services/apple-mac-data-transfer.php";
			    break;
			case 'http://www.thoseappleguys.com/services/apple-mac-on-site-services.php':
			 	$location = "/services/apple-mac-on-site-services.php";
			    break;
			case 'http://www.thoseappleguys.com/services/apple-mac-osx-upgrades.php':
			 	$location = "/services/apple-mac-osx-upgrades.php";
			    break;
			case 'http://www.thoseappleguys.com/services/ard-remote-access-services.php':
				$location = "/services/ard-remote-access-services.php";
			    break;
			case 'http://www.thoseappleguys.com/services/backup-solutions-time-machine.php':
			 	$location = "/services/backup-solutions-time-machine.php";
			    break;
			case 'http://www.thoseappleguys.com/services/business-packages-apple-xserve.php':
			 	$location = "/services/business-packages-apple-xserve.php";
			    break;
			case 'http://www.thoseappleguys.com/services/corporate-services-mac-xserve-database.php':
			 	$location = "/services/corporate-services-mac-xserve-database.php";
			    break;
			case 'http://www.thoseappleguys.com/services/same-day-service-emergency.php':
			 	$location = "/services/same-day-service-emergency.php";
			    break;
			case 'http://www.thoseappleguys.com/services/windows-on-mac-solutions.php':
 				$location = "/services/windows-on-mac-solutions.php";
   	 			break;			        
 	case 'http://www.thoseappleguys.com/contact/':
 		$location = "/contact";
   		break;
 
 case 'http://thoseappleguys.com/' :
 	$location = "/";
     break;
 case 'http://thoseappleguys.com/about/':
 	$location = "/about";
     break;
 case 'http://www.thoseappleguys.com/services/':
 	$location = "/services";
     break;
 		case 'http://thoseappleguys.com/services/apple-computer-osx-training.php':
 			$location = "/services/apple-computer-osx-training.php";
 		    break;
 		case 'http://thoseappleguys.com/services/apple-mac-data-recovery.php':
 		 	$location = "/services/apple-mac-data-recovery.php";
 		    break;
 		case 'http://thoseappleguys.com/services/apple-mac-data-transfer.php':
 		 	$location = "/services/apple-mac-data-transfer.php";
 		    break;
 		case 'http://thoseappleguys.com/services/apple-mac-on-site-services.php':
 		 	$location = "/services/apple-mac-on-site-services.php";
 		    break;
 		case 'http://thoseappleguys.com/services/apple-mac-osx-upgrades.php':
 		 	$location = "/services/apple-mac-osx-upgrades.php";
 		    break;
 		case 'http://thoseappleguys.com/services/ard-remote-access-services.php':
 			$location = "/services/ard-remote-access-services.php";
 		    break;
 		case 'http://thoseappleguys.com/services/backup-solutions-time-machine.php':
 		 	$location = "/services/backup-solutions-time-machine.php";
 		    break;
 		case 'http://thoseappleguys.com/services/business-packages-apple-xserve.php':
 		 	$location = "/services/business-packages-apple-xserve.php";
 		    break;
 		case 'http://thoseappleguys.com/services/corporate-services-mac-xserve-database.php':
 		 	$location = "/services/corporate-services-mac-xserve-database.php";
 		    break;
 		case 'http://thoseappleguys.com/services/same-day-service-emergency.php':
 		 	$location = "/services/same-day-service-emergency.php";
 		    break;
 		case 'http://thoseappleguys.com/services/windows-on-mac-solutions.php':
 				$location = "/services/windows-on-mac-solutions.php";
 	 			break;			        
 	case 'http://thoseappleguys.com/contact/':
 		$location = "/contact";
 		break;
	
    default:
		$location = "/";
}

if ( strstr($_SERVER['SERVER_SOFTWARE'], 'Microsoft-IIS')  == 1) { 
	header("Refresh: 0;url=$location");
} else {
	header("Location: $location");
}

?>