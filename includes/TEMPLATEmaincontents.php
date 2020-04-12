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
		<link href="/styles/base.css" rel="stylesheet" type="text/css" />
		<link href="/styles/loading.css" rel="stylesheet" type="text/css" />
		<link href="/styles/drive.css" rel="stylesheet" type="text/css" />
		<link href="/styles/dropzone.css" rel="stylesheet" type="text/css"  />
		<script type="text/javascript" src="/js/dropzone.js"></script>
		<script type="text/javascript" src="/js/copytoclip.js"></script>
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	</head>
	<body>
		<?php if (login_check($mysqli) == true AND $_SESSION['username'] == 'THEUSERNAME' ) : ?>
		<script type="text/javascript">
			Dropzone.options.Upld = {
				url: '<?=$_SERVER['PHP_SELF']?>',
				dictDefaultMessage: "Drag your file(s) here",
				clickable: true,
				enqueueForUpload: true,
				maxFilesize: 50,
				uploadMultiple: true,
				addRemoveLinks: true,
				acceptedfiles: ".3dm,.3dmf,.a,.aab,.aam,.aas,.abc,.acgi,.afl,.ai,.aif,.aif,.aifc,.aifc,.aiff,.aiff,.aim,.aip,.ani,.aos,.aps,.arc,.arj,.arj,.art,.asf,.asm,.asp,.asx,.asx,.asx,.au,.au,.avi,.avi,.avi,.avi,.avs,.bcpio,.bin,.bin,.bin,.bin,.bin,.bm,.bmp,.bmp,.boo,.book,.boz,.bsh,.bz,.bz2,.c,.c,.c++,.cat,.cc,.cc,.ccad,.cco,.cdf,.cdf,.cdf,.cer,.cer,.cha,.chat,.class,.class,.class,.com,.com,.conf,.cpio,.cpp,.cpt,.cpt,.cpt,.crl,.crl,.crt,.crt,.crt,.csh,.csh,.css,.css,.cxx,.dcr,.deepv,.def,.der,.dif,.dir,.dl,.dl,.doc,.dot,.dp,.drw,.dump,.dv,.dvi,.dwf,.dwf,.dwg,.dwg,.dwg,.dxf,.dxf,.dxf,.dxr,.el,.elc,.elc,.env,.eps,.es,.etx,.evy,.evy,.exe,.f,.f,.f77,.f90,.f90,.fdf,.fif,.fif,.fli,.fli,.flo,.flx,.fmf,.for,.for,.fpx,.fpx,.frl,.funk,.g,.g3,.gif,.gl,.gl,.gsd,.gsm,.gsp,.gss,.gtar,.gz,.gz,.gzip,.gzip,.h,.h,.hdf,.help,.hgl,.hh,.hh,.hlb,.hlp,.hlp,.hlp,.hpg,.hpgl,.hqx,.hqx,.hqx,.hqx,.hqx,.hqx,.hta,.htc,.htm,.html,.htmls,.htt,.htx,.ice,.ico,.idc,.ief,.iefs,.iges,.iges,.igs,.igs,.ima,.imap,.inf,.ins,.ip,.isu,.it,.iv,.ivr,.ivy,.jam,.jav,.jav,.java,.java,.jcm,.jfif,.jfif,.jfif-tbnl,.jpe,.jpe,.jpeg,.jpeg,.jpg,.jpg,.jps,.js,.js,.js,.js,.js,.jut,.kar,.kar,.ksh,.ksh,.la,.la,.lam,.latex,.lha,.lha,.lha,.lhx,.list,.lma,.lma,.log,.lsp,.lsp,.lst,.lsx,.ltx,.lzh,.lzh,.lzx,.lzx,.lzx,.m,.m,.m1v,.m2a,.m2v,.m3u,.man,.map,.mar,.mbd,.mc$,.mcd,.mcd,.mcf,.mcf,.mcp,.me,.mht,.mhtml,.mid,.mid,.mid,.mid,.mid,.mid,.midi,.midi,.midi,.midi,.midi,.midi,.mif,.mif,.mime,.mime,.mjf,.mjpg,.mm,.mm,.mme,.mod,.mod,.moov,.mov,.movie,.mp2,.mp2,.mp2,.mp2,.mp2,.mp3,.mp3,.mp3,.mp3,.mpa,.mpa,.mpc,.mpe,.mpeg,.mpg,.mpg,.mpga,.mpp,.mpt,.mpv,.mpx,.mrc,.ms,.mv,.my,.mzz,.nap,.naplps,.nc,.ncm,.nif,.niff,.nix,.nsc,.nvd,.o,.oda,.omc,.omcd,.omcr,.p,.p10,.p10,.p12,.p12,.p7a,.p7c,.p7c,.p7m,.p7m,.p7r,.p7s,.part,.pas,.pbm,.pcl,.pcl,.pct,.pcx,.pdb,.pdf,.pfunk,.pfunk,.pgm,.pgm,.pic,.pict,.pkg,.pko,.pl,.pl,.plx,.pm,.pm,.pm4,.pm5,.png,.pnm,.pnm,.pot,.pot,.pov,.ppa,.ppm,.pps,.pps,.ppt,.ppt,.ppt,.ppt,.ppz,.pre,.prt,.ps,.psd,.pvu,.pwz,.py,.pyc,.qcp,.qd3,.qd3d,.qif,.qt,.qtc,.qti,.qtif,.ra,.ra,.ra,.ram,.ras,.ras,.ras,.rast,.rexx,.rf,.rgb,.rm,.rm,.rmi,.rmm,.rmp,.rmp,.rng,.rng,.rnx,.roff,.rp,.rpm,.rt,.rt,.rtf,.rtf,.rtf,.rtx,.rtx,.rv,.s,.s3m,.saveme,.sbk,.scm,.scm,.scm,.scm,.sdml,.sdp,.sdp,.sdr,.sea,.sea,.set,.sgm,.sgm,.sgml,.sgml,.sh,.sh,.sh,.sh,.shar,.shar,.shtml,.shtml,.sid,.sit,.sit,.skd,.skm,.skp,.skt,.sl,.smi,.smil,.snd,.snd,.sol,.spc,.spc,.spl,.spr,.sprite,.src,.ssi,.ssm,.sst,.step,.stl,.stl,.stl,.stp,.sv4cpio,.sv4crc,.svf,.svf,.svr,.svr,.swf,.t,.talk,.tar,.tbk,.tbk,.tcl,.tcl,.tcsh,.tex,.texi,.texinfo,.text,.text,.tgz,.tgz,.tif,.tif,.tiff,.tiff,.tr,.tsi,.tsp,.tsp,.tsv,.turbot,.txt,.uil,.uni,.unis,.unv,.uri,.uris,.ustar,.ustar,.uu,.uu,.uue,.vcd,.vcs,.vda,.vdo,.vew,.viv,.viv,.vivo,.vivo,.vmd,.vmf,.voc,.voc,.vos,.vox,.vqe,.vqf,.vql,.vrml,.vrml,.vrml,.vrt,.vsd,.vst,.vsw,.w60,.w61,.w6w,.wav,.wav,.wb1,.wbmp,.web,.wiz,.wk1,.wmf,.wml,.wmlc,.wmls,.wmlsc,.word,.wp,.wp5,.wp5,.wp6,.wpd,.wpd,.wq1,.wri,.wri,.wrl,.wrl,.wrl,.wrz,.wrz,.wsc,.wsrc,.wtk,.xbm,.xbm,.xbm,.xdr,.xgz,.xif,.xl,.xla,.xla,.xla,.xlb,.xlb,.xlb,.xlc,.xlc,.xlc,.xld,.xld,.xlk,.xlk,.xll,.xll,.xll,.xlm,.xlm,.xlm,.xls,.xls,.xls,.xls,.xlt,.xlt,.xlv,.xlv,.xlw,.xlw,.xlw,.xlw,.xm,.xml,.xml,.xmz,.xpix,.xpm,.xpm,.x-png,.xsr,.xwd,.xwd,.xyz,.z,.z,.zip,.zip,.zip,.zip,.zoo,.zsh,.catpart",
				dictInvalidFileType: "not accepted file type"
			};
		</script>
		<form action="" class="dropzone" id="Upld">
			<div class="fallback">
				<input name="file" type="file" multiple />
			</div>
		</form>		
		<?php
			if (isset($_FILES["fileToUpload"]["name"])) {
				$target_dir = (getcwd() . '/');
				$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
				$uploadOk = 1;
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$uploadOk = 0;
				}
				// Check file size
				if ($_FILES["fileToUpload"]["size"] > 50000000) {
					echo "Sorry, your file is larger than 50 mb.";
					$uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo " Your file was not uploaded because of this.";
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					} else {
						echo "Sorry, an unknown error occured whilst uploading your file.";
					}
				};
			};
		?>
		<?php 
			date_default_timezone_set('Europe/London');
			$thefolderlist = array();
			$thefilelist = array();
			$iterator = new FilesystemIterator(getcwd());
			foreach($iterator as $fileInfo){
				if($fileInfo->isFile()){
					continue;
				}
				else {
					$thefolderlist[$fileInfo->getMTime()][] .= '<tr><td><a href='.rawurlencode($fileInfo->getFileName()).'/'.rawurlencode($fileInfo->getFileName()).'.php style="color: orange;">'. $fileInfo->getFileName() . "</a></td><td>folder</td><td>".date("F d Y H:i:s.", filemtime($fileInfo))."</td></tr>\n";
				}
			}
			krsort($thefolderlist);
			$thefolderlist = call_user_func_array('array_merge', $thefolderlist);
			$iterator = new FilesystemIterator(getcwd());
			foreach($iterator as $fileInfo){
				if($fileInfo->isFile()){
					if ($fileInfo == '..' || $fileInfo == '.' || substr($fileInfo, -strlen(".php")) === ".php" || $fileInfo->getFileName() == 'error_log') {
						continue;
					}
					else {
					$thefilelist[$fileInfo->getMTime()][] .= "<tr><td><a target='_blank' href=".rawurlencode($fileInfo->getFileName()).">". $fileInfo->getFileName() . "</a></td><td>file</td><td>".date('F d Y H:i:s.', filemtime($fileInfo))."</td>  <td><button class='copybtn' onclick='copyToClipboard(this)'>".strstr(getcwd(), "hcawn.com")."/".rawurlencode($fileInfo->getFileName())."</button></td><td><form action='' method='post'><input type='submit' name='".rawurlencode($fileInfo->getFileName())."delete' value='delete' id='submt' class='buttonclk' /></form></td></tr>\n";		
						if (isset($_POST[str_replace('.', '_', (rawurlencode($fileInfo->getFileName()).'delete'))])) {
							$filetodelete = substr($fileInfo->getFileName().'delete', 0, -6);
							echo $filetodelete.' Deleted!';
							unlink($filetodelete);
							unset($_POST);
							echo '<script>history.go(-1);</script>';
						};	
					}
				}
			}
			krsort($thefilelist);
			$thefilelist = call_user_func_array('array_merge', $thefilelist);
		?>
		<h1><?php echo strstr(getcwd(), 'hcawn.com');?></h1>
		<button onclick="history.go(-1);" class="buttonclk" >Back</button>
		<table>
			<tr>
				<th>Name</th>
				<th>Type</th>
				<th>Date Uploaded</th>
				<th>Click to Copy Link</th>
			</tr>
			<tr>
				<td colspan="4"><hr/></td>
			</tr>
			<?php
				echo implode("\n", $thefolderlist);
				echo implode("\n", $thefilelist);
			?>
			<tr>
				<td colspan="4"><hr/></td>
			</tr>
		</table>
		<!--END OF SHOWING FILES-->
		<form action="" method="post" name="new_directory"> 			
			<input type="text" placeholder="New Directory Name" name="newdir" class="textinp" />
			<input type="submit" value="Create" id="submt" class="buttonclk" /> 
		</form>
		<?php
		if (isset($_POST['newdir'])) {
			/*make new directory*/
			mkdir($_POST['newdir']);
			/*copy and rename php file*/
			$file = getcwd().'/maincontents.php';
			$newfile = getcwd() . '/' . $_POST['newdir'] . '/' . $_POST['newdir'].'.php';
			copy($file, $newfile);
			echo '<script>window.location =  \'' . $_POST['newdir'] . '/' . $_POST['newdir'].'.php\';</script>';
		};
		?>
		<?php else : ?>
			<p>
				<span class="error">You are not authorized to access this page.</span> Please <a href="https://hcawn.com/">login</a>.
			</p>
		<?php endif; ?>
	</body>
</html>