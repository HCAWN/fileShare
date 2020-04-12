<?php
include_once '/'.$_SERVER['DOCUMENT_ROOT'].'/includes/db_connect.php';
include_once '/'.$_SERVER['DOCUMENT_ROOT'].'/includes/functions.php';
sec_session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<!--[if IE]>
			<script>alert("You are using an outdated browser that does not support the formatting used on this website. Please consider upgrading your browser to improve your web experience.");</script>
		<![endif]-->
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
		<meta property="og:url"content="https://www.hcawn.com" />
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
		<meta name="theme-color" content="#ffffff">
		<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
		<link href="/styles/styles.css" rel="stylesheet" type="text/css" />
		<link href="/styles/base.css" rel="stylesheet" type="text/css" />
		<link href="/styles/loading.css" rel="stylesheet" type="text/css" />
		<link href="/styles/drive.css" rel="stylesheet" type="text/css" />
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	</head>
	<body>
		<?php if (login_check($mysqli) == true AND $_SESSION['username'] == 'THEUSERNAME' ) : ?>
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
		<div class="overlay" >
		<a href="https://hcawn.com">
			<img src="/graphics/logo.png" id=logo>
		</a>
		<div id="mainscroll">
			<div id="maincontents">
				<h2>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</h2>

				<iframe id="idIframe" onload="iframeLoaded()" style="width:100%;" src="maincontents.php" frameborder="0"></iframe>
			</div>
		</div>
	<?php else : ?>
		<p>
			<span class="error">You are not authorized to access this page.</span> Please <a href="https://hcawn.com/">login</a>.
		</p>
	<?php endif; ?>
	</body>
	<script>
		$('#loading').delay(1000).fadeOut(200);
		function iframeLoaded() {
		  var iFrameID = document.getElementById('idIframe');
		  if(iFrameID) {
				// here you can make the height, I delete it first, then I make it again
				iFrameID.height = "";
				iFrameID.height = iFrameID.contentWindow.document.body.scrollHeight + "px";
		  }   
		} 
	</script>
</html>
