<?php
define('BASE_URL',"http://localhost/coaching");
$body_class = "";

	$current_page = basename($_SERVER["PHP_SELF"]);
	$filename = explode(".",strtoupper($current_page));

	$page_name = $filename['0'];


	switch($page_name)

    {

		case "BLOG-DETAIL":
		$body_class ="class=\"header-overlap\"";
        break;
        
        case "ACCOUNT":
		$body_class ="class=\"header-overlap\"";
		break;

		default:
		$body_class = "";
		break;

	}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
	<title>Coaching</title>
    <base href="/coaching/">
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
	<link rel="icon" href="assets/favicon.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/all.css">
	<link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="assets/cmlanding.css">
</head>
    <body <?= $body_class ?>>
        <input type="hidden" value="http://localhost/coaching/" class="base-url">
         <div class="mobmenu-wrap d-lg-none">
            <div class="menu-close">
                <a href="#">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                </a>
            </div>
            <div class="mobile-menu">
                <nav>    
                    <ul class="menu">
                        <li><a href="<?= BASE_URL ?>">Home</a></li>
                        <li><a href="about-us">About Us</a></li>
                        <li><a href="courses">Courses</a></li>									
                        <li><a href="reviews">Reviews</a></li>
                        <li><a href="life-coach">Life Coach</a></li>									
                        <li><a href="support">Support</a></li>		
                    </ul>
                    <ul class="user-menu">
                        <li><a href="account"><span class="icon"><img src="assets/user-2.svg" alt="icon"></span>My Account</a></li>
                        <li class="menu-child-item"><a href="#">My Profile</a></li>
                        <li class="menu-child-item"><a href="#">Log Out</a></li>
                    </ul>
                </nav>
            </div>
            <div class="header-call-area">
                <div class="call-area">
                    <div class="call-area-content">
                        <a href="tel:+1-205-528-4951">+1-205-528-4951</a>
                        <p>24/7 Customer Support</p>
                    </div>
                </div>
            </div>
            <div class="header-social">
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                        <path  data-name="Exclusion 2" fill="#fff" d="M20,40A20,20,0,0,1,5.861,5.859,20,20,0,1,1,34.144,34.142,19.867,19.867,0,0,1,20,40Zm.228-26.6c-.061,0-6.111,0-7.621.411A2.484,2.484,0,0,0,10.891,15.6a26.173,26.173,0,0,0-.407,4.725,26.114,26.114,0,0,0,.407,4.762,2.488,2.488,0,0,0,1.719,1.716c1.507.405,7.56.41,7.621.41s6.113,0,7.62-.41a2.487,2.487,0,0,0,1.719-1.787,26.1,26.1,0,0,0,.407-4.691,26.109,26.109,0,0,0-.407-4.761,2.484,2.484,0,0,0-1.719-1.788A63.6,63.6,0,0,0,20.232,13.4Zm-1.994,9.846V17.406l5.095,2.921L18.24,23.248Z" transform="translate(-0.002 -0.002)"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                        <path fill="#fff" d="M20,0A20,20,0,1,0,40,20,20.023,20.023,0,0,0,20,0Zm4.974,20.7H21.719V32.3H16.9V20.7H14.606v-4.1H16.9v-2.65c0-1.9.9-4.866,4.866-4.866l3.573.014v3.98H22.742A.982.982,0,0,0,21.719,14.2v2.417h3.674Z"/>
                    </svg>
                </a>
                <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
                        <path fill="#fff" d="M20,40A20,20,0,0,1,5.859,5.859,20,20,0,1,1,34.142,34.142,19.865,19.865,0,0,1,20,40ZM9.895,26.245h0a11.3,11.3,0,0,0,6.2,1.864c7.209,0,11.516-6.005,11.516-11.811,0-.149,0-.3-.008-.447l0-.09a8.184,8.184,0,0,0,2.017-2.15,7.836,7.836,0,0,1-2.323.654,4.116,4.116,0,0,0,1.781-2.3,7.906,7.906,0,0,1-2.571,1.006,4.016,4.016,0,0,0-2.955-1.307A4.1,4.1,0,0,0,19.51,15.82a4.039,4.039,0,0,0,.108.942,11.425,11.425,0,0,1-8.339-4.336,4.229,4.229,0,0,0,1.285,5.542,3.789,3.789,0,0,1-1.8-.517V17.5a4.116,4.116,0,0,0,3.209,4.073,4.282,4.282,0,0,1-1.112.147,4.047,4.047,0,0,1-.759-.073,4.07,4.07,0,0,0,3.782,2.881,7.956,7.956,0,0,1-5.03,1.776A8.248,8.248,0,0,1,9.895,26.245Z" transform="translate(0 -0.001)"/>
                    </svg>
                </a>
            </div>
        </div>	
        <div class="main-wrapper">
            <header class="header">
                <div class="container">
                    <div class="logo mr-auto">
                        <a href="#">
                            <img src="assets/logo.svg" class="img-dark" alt="logo">
                            <img src="assets/logo-white.svg" class="img-white" alt="logo">
                        </a> 
                    </div>
                    <div class="menu-bar">
                        <a href="#" class="menu-open">
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20">
                                <g id="Group_4487" data-name="Group 4487" transform="translate(-322 -27)">
                                    <rect id="Rectangle_2344" data-name="Rectangle 2344" fil="#0e1a2a"  width="22" height="2" transform="translate(322 27)"/>
                                    <rect id="Rectangle_2345" data-name="Rectangle 2345" fil="#0e1a2a" width="22" height="2" transform="translate(322 36)"/>
                                    <rect id="Rectangle_2346" data-name="Rectangle 2346" fil="#0e1a2a" width="17" height="2" transform="translate(322 45)"/>
                                </g>
                            </svg>
                        </a>
                    </div>
                    <div class="menu-wrap">
                        <div class="main-menu">
                            <nav>    
                                <ul class="menu">
                                    <li><a href="about-us">About Us</a></li>									
                                    <li><a href="course">Courses</a></li>									
                                    <li><a href="reviews">Reviews</a></li>
                                </ul>
                               <ul class="user-menu">
                                    <li>
                                        <a href="store"><span class="icon mr-8">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18.335" height="20.15" viewBox="0 0 18.335 20.15">
                                                <defs>
                                                    <style>
                                                        .cls-215{fill:none;stroke:#0e1a2a;stroke-linecap:round;stroke-linejoin:round;stroke-width:2px}
                                                    </style>
                                                </defs>
                                                <g id="shopping-bag" transform="translate(-2 -1)">
                                                    <path id="Path_3155" d="M5.723 2L3 5.63v12.705a1.815 1.815 0 0 0 1.815 1.815H17.52a1.815 1.815 0 0 0 1.815-1.815V5.63L16.613 2z" class="cls-215" data-name="Path 3155"/>
                                                    <path id="Line_597" d="M0 0h16" class="cls-215" data-name="Line 597" transform="translate(3.168 6.075)"/>
                                                    <path id="Path_3156" d="M15.26 10A3.63 3.63 0 1 1 8 10" class="cls-215" data-name="Path 3156" transform="translate(-.462 -.74)"/>
                                                </g>
                                            </svg>
                                        </span>Store</a>
                                    </li>
                                    <li class="mr-0">
                                        <a href="account">My Account </a>
                                    </li>
                                    <li class="dropdown ml-2">
                                        <a href="account">
                                            <span class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52">
                                                    <defs>
                                                        <style>
                                                            .cls-1251{fill:#6fda44}.cls-1252{fill:#fff}
                                                        </style>
                                                    </defs>
                                                    <g id="Group_5137" data-name="Group 5137" transform="translate(-335 -1577)">
                                                        <g id="Group_5136" data-name="Group 5136" transform="translate(335 1577)">
                                                            <rect id="Rectangle_2101" width="52" height="52" class="cls-1251" data-name="Rectangle 2101" rx="26"/>
                                                        </g>
                                                        <g id="user_1_" data-name="user (1)" transform="translate(339.54 1581.539)">
                                                            <path id="Path_3146" d="M16.847 35.1l-6.385 3.48a5.738 5.738 0 0 0-1.025.729 21.388 21.388 0 0 0 27.48.071 5.665 5.665 0 0 0-1.126-.754l-6.838-3.419a2.608 2.608 0 0 1-1.442-2.332v-2.683a10.328 10.328 0 0 0 .647-.832 15.734 15.734 0 0 0 2.126-4.283 2.148 2.148 0 0 0 1.523-2.043V20.17a2.138 2.138 0 0 0-.716-1.587v-4.14S31.942 8 23.218 8s-7.874 6.442-7.874 6.442v4.14a2.135 2.135 0 0 0-.716 1.587v2.864a2.147 2.147 0 0 0 .99 1.8 14.211 14.211 0 0 0 2.589 5.357v2.617a2.61 2.61 0 0 1-1.36 2.293z" class="cls-1252" data-name="Path 3146" transform="translate(-1.816 -1.539)"/>
                                                            <g id="Group_5071" data-name="Group 5071">
                                                                <path id="Path_3147" d="M21.767 0A21.388 21.388 0 0 0 7.63 37.763a5.687 5.687 0 0 1 1.015-.722l6.386-3.483a2.609 2.609 0 0 0 1.359-2.29v-2.616A14.2 14.2 0 0 1 13.8 23.3a2.148 2.148 0 0 1-.99-1.8v-2.87a2.138 2.138 0 0 1 .716-1.587V12.9s-.85-6.442 7.874-6.442 7.874 6.442 7.874 6.442v4.14a2.135 2.135 0 0 1 .716 1.587v2.864a2.148 2.148 0 0 1-1.523 2.043 15.734 15.734 0 0 1-2.126 4.283 10.328 10.328 0 0 1-.647.832v2.683a2.607 2.607 0 0 0 1.442 2.332l6.838 3.419a5.694 5.694 0 0 1 1.123.753A21.4 21.4 0 0 0 21.767 0z" class="cls-1251" data-name="Path 3147"/>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                                <span class="user-notif">1</span>
                                            </span>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="dropdown-nav">
                                                <li><a href="#">My Profile</a></li>
                                                <li><a href="#">Log Out</a></li>
                                            </ul>
                                        </div>
                                    </li>                                    
                                </ul>
                            </nav>
                        </div>
                        <!-- <div class="header-call-area">
                            <div class="call-area">
                                <div class="call-area-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="31.992" viewBox="0 0 32 31.992">
                                        <path data-name="technical-support (1)" d="M23.307,17.54l-3.486,3.375A23.808,23.808,0,0,1,14.8,17.031,24.185,24.185,0,0,1,10.9,11.988L14.269,8.57,5.75,0,1.553,4.17A5.279,5.279,0,0,0,.525,10.2a46.33,46.33,0,0,0,8.9,12.365,46.328,46.328,0,0,0,12.365,8.9,5.229,5.229,0,0,0,2.288.526,5.3,5.3,0,0,0,3.746-1.554L32,26.246Zm2.747,11.133a2.78,2.78,0,0,1-3.175.546A43.8,43.8,0,0,1,11.189,20.8,43.8,43.8,0,0,1,2.772,9.112a2.779,2.779,0,0,1,.544-3.173L5.739,3.533l5.014,5.044L7.878,11.488l.347.779a24.183,24.183,0,0,0,4.811,6.53,23.754,23.754,0,0,0,6.506,4.784l.768.338,2.967-2.873,5.193,5.2ZM24.073,15.818a7.9,7.9,0,1,0-7.9-7.9A7.909,7.909,0,0,0,24.073,15.818Zm0-13.3a5.4,5.4,0,1,1-5.4,5.4A5.408,5.408,0,0,1,24.073,2.516ZM27.231,9.2h-4.5V3.952h2.5V6.7h2Zm0,0" transform="translate(0.001 -0.001)"/>
                                    </svg>

                                </div>
                                <div class="call-area-content">
                                    <a href="tel:+1-205-528-4951">+1-205-528-4951</a>
                                    <p>24/7 Customer Support</p>
                                </div>
                            </div>
                            <a href="#" class="btn btn-round btn-success">Start Here</a>
                        </div> -->
                    </div>						
                </div>
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#thank-u-sign-up">
                    Model 1
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#wait">
                    Model 2
                </button> -->
                <div class="modal fade thankyou-modal" id="thank-u-sign-up" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body"> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                                        <defs>
                                            <style>
                                                .cls-25{fill:#0e1a2a;opacity:.16}.cls-26{fill:#fff}
                                            </style>
                                            <filter id="Ellipse_886" width="102" height="102" x="0" y="0" filterUnits="userSpaceOnUse">
                                                <feOffset dy="5"></feOffset>
                                                <feGaussianBlur result="blur" stdDeviation="10"></feGaussianBlur>
                                                <feFlood flood-opacity=".259"></feFlood>
                                                <feComposite in2="blur" operator="in"></feComposite>
                                                <feComposite in="SourceGraphic"></feComposite>
                                            </filter>
                                        </defs>
                                        <g id="Group_4602" data-name="Group 4602">
                                            <g class="cls-3" transform="translate(-30 -25)">
                                                <circle id="Ellipse_886-2" cx="21" cy="21" r="21" class="cls-25" data-name="Ellipse 886" transform="rotate(-90 48.5 18.5)"></circle>
                                            </g>
                                            <g id="Group_4540" data-name="Group 4540" transform="translate(13 12.818)">
                                                <path id="Rectangle_2345" d="M0 0h19v2H0z" class="cls-26" data-name="Rectangle 2345" transform="rotate(45 .49 1.796)"></path>
                                                <path id="Rectangle_2398" d="M0 0h19v2H0z" class="cls-26" data-name="Rectangle 2398" transform="rotate(135 7.21 3.815)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                                <div class="thanks-logo text-center mt-32">
                                    <img src="assets/tahnkslogo.svg" alt="logo">
                                </div>
                                <div class="thanks-content">
                                    <div class="text-center thanks-con-position">
                                        <h1 class="thanks-heading-1">Thank You!</h1>
                                        <h3 class="thanks-heading-2">For Signing Up!</h3>
                                    </div>
                                </div>
                                <div class="main-heading-content">
                                    <div class="main-heading text-center mt-10-7">
                                        <h1 class="main-heading-1">You Got an Extra  <span class="txt-subline h-15 danger ban-line">$100 Сoupon!</span></h1>
                                        <h4 class="main-heading-2 pt-25">Use Code:</h4>
                                    </div>
                                    <div class="thanks-form-content pt-38-6">
                                        <form class="thanks-form">
                                            <div class="input-group mb-3">
                                                <input type="text" id="select-copy" class="form-control" placeholder="100MASTER" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                    <button class="btn btn-outline-secondary" type="button">Get Your Course Now</button>
                                                    <button class="copy-button" data-clipboard-target="#select-copy" data-clipboard-action="cut"><img class="copy" src="assets/copy.svg"></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- WAIT MODEL -->
                <div class="modal fade wait-modal" id="wait" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-body"> 
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 42 42">
                                        <defs>
                                            <style>
                                                    .cls-25{fill:#0e1a2a;opacity:.16}.cls-26{fill:#fff}
                                            </style>
                                                <filter id="Ellipse_886" width="102" height="102" x="0" y="0" filterUnits="userSpaceOnUse">
                                                    <feOffset dy="5"></feOffset>
                                                    <feGaussianBlur result="blur" stdDeviation="10"></feGaussianBlur>
                                                    <feFlood flood-opacity=".259"></feFlood>
                                                    <feComposite in2="blur" operator="in"></feComposite>
                                                    <feComposite in="SourceGraphic"></feComposite>
                                                </filter>
                                        </defs>
                                        <g id="Group_4602" data-name="Group 4602">
                                            <g class="cls-3" transform="translate(-30 -25)">
                                                    <circle id="Ellipse_886-2" cx="21" cy="21" r="21" class="cls-25" data-name="Ellipse 886" transform="rotate(-90 48.5 18.5)"></circle>
                                            </g>
                                            <g id="Group_4540" data-name="Group 4540" transform="translate(13 12.818)">
                                                <path id="Rectangle_2345" d="M0 0h19v2H0z" class="cls-26" data-name="Rectangle 2345" transform="rotate(45 .49 1.796)"></path>
                                                <path id="Rectangle_2398" d="M0 0h19v2H0z" class="cls-26" data-name="Rectangle 2398" transform="rotate(135 7.21 3.815)"></path>
                                            </g>
                                        </g>
                                    </svg>
                                </button>
                                <div class="thanks-logo text-center mt-32">
                                        <img src="assets/tahnkslogo.svg" alt="logo">
                                </div>
                                <div class="thanks-content">
                                    <div class="text-center thanks-con-position">
                                        <h1 class="thanks-heading-1">Wait a second!</h1>
                                        <h3 class="thanks-heading-2">Subscribe Now to Receive an</h3>
                                    </div>
                                </div>
                                <div class="main-heading-content mt-50-4">
                                    <div class="main-heading text-center">
                                        <h1 class="wait-heading-1"><span class="txt-subline h-37 danger ban-line-8"><span class="dollar">$</span>100</span></h1>
                                        <h4 class="wait-heading-2 mt-43">COUPON</h4>
                                    </div>
                                    <div class="thanks-form-content pt-38-6">
                                        <form class="thanks-form">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="username@gmail.com" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                <div class="input-group-append">
                                                        <button class="btn btn-outline-secondary" type="button">Send me Coupon</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <div class="header-topbar"></div>

            <!-- <script>
var clipboard = new ClipboardJS('.copy-button');

clipboard.on('success', function(e) {
    console.info('Action:', e.action);
    console.info('Text:', e.text);
    console.info('Trigger:', e.trigger);

    e.clearSelection();
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});
</script> -->