<?php
/**
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
include_once 'includes/db_connect.php';
include_once 'includes/functions.php';
sec_session_start();
if (login_check($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
?>
<!DOCTYPE html>
<html>
    <head>
		<meta content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta content="minimal-ui, initial-scale=1 maximum-scale=1.0, user-scalable=no" name="viewport" />
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<title>Neilson Drive</title>
		<meta content="Neilson Engineering delivers engineering and design solutions to a host of industry leading companies, as well as individuals. Since establishment by UCL MEng graduate, Henry Neilson, our superior London-based service is only limited by what you may request." name="description" />
		<meta content="Engineering, Neilson, Engineer, Designer, Render, Art, Consulting, Consultancy" name="keywords" />
		<meta content="Neilson Engineering" name="author" />
		<meta property="og:image" content="https://neilsonengineering.com/images/oglogo.png" />
		<meta property="og:description" content="Neilson Engineering delivers engineering and design solutions to a host of industry leading companies, as well as individuals. Since establishment by UCL MEng graduate, Henry Neilson, our superior London-based service is only limited by what you may request." />
		<meta property="og:url" content="https://www.hcawn.com" />
		<meta property="og:title" content="Neilson Engineering" />
		<link rel="apple-touch-icon" sizes="180x180" href="https://neilsonengineering.com/favicons/apple-touch-icon.png?v=BGBR3AKGdq">
		<link rel="icon" type="image/png" href="https://neilsonengineering.com/favicons/favicon-32x32.png?v=BGBR3AKGdq" sizes="32x32">
		<link rel="icon" type="image/png" href="https://neilsonengineering.com/favicons/favicon-16x16.png?v=BGBR3AKGdq" sizes="16x16">
		<link rel="manifest" href="https://neilsonengineering.com/favicons/manifest.json?v=BGBR3AKGdq">
		<link rel="mask-icon" href="https://neilsonengineering.com/favicons/safari-pinned-tab.svg?v=BGBR3AKGdq" color="#000aff">
		<link rel="shortcut icon" href="https://neilsonengineering.com/favicons/favicon.ico?v=BGBR3AKGdq">
		<meta name="apple-mobile-web-app-title" content="Neilson Engineering">
		<meta name="application-name" content="Neilson Engineering">
		<meta name="msapplication-config" content="https://neilsonengineering.com/favicons/browserconfig.xml?v=BGBR3AKGdq">
		<meta name="theme-color" content="#ffffff" Drive!" />
		<meta name="twitter:image" content="https://flok.uk/graphics/spin.png" />
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="styles/styles.css" rel="stylesheet" type="text/css" />
		<link href="styles/base.css" rel="stylesheet" type="text/css" />
		<link href="styles/loading.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script type="text/JavaScript" src="js/sha512.js"></script> 
        <script type="text/JavaScript" src="js/forms.js"></script> 
    </head>
    <body>
		<img src="../graphics/logo.png" id=logo>
        <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?>
        <div id="loading" >
			<div class="wrapper">
				<div class="line line1">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line2">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line3">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line4">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line5">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line6">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line7">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line8">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line9">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line10">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
				<div class="line line11">
					<span class="circle circle-top"></span>
					<div class="dotted">
						<span class="dot dot-top"></span>
						<span class="dot dot-middle-top"></span>
						<span class="dot dot-middle-bottom"></span>
						<span class="dot dot-bottom"></span>
					</div>
					<span class="circle circle-bottom"></span>
				</div>
			</div>
		</div>
		<img src="graphics/bkg.jpg" class="full">
		<div class="overlay" >
	        <form action="includes/process_login.php" method="post" name="login_form"> 			
	            <input type="text" placeholder="Email" name="email" />
	            <input type="password" placeholder="Password" name="password" id="password"/>
	            <input type="button" value="Login" id="submt" onclick="formhash(this.form, this.form.password);" /> 
	            <p><a href="register">Register</a></p>
	        	<iframe style="width:100%; height:200px;" src="enter.php" frameborder="0"></iframe>
	        </form>
		</div>
    </body>
    <script>
    	$('#loading').delay(1000).fadeOut(200);
    </script>
</html>