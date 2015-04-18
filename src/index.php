<!DOCTYPE HTML>
<html>
	<head>
		<meta name="google-site-verification" content="tY_4djMl2E9ysu0JXCfs0gmnZeOrjj3P4ly4fpfZ_bc" />
		<meta name="Austin Meyers | Developer" content="Personal web-page of Austin R. Meyers." />
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	    <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<!-- Optional CSS theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	    <!-- Custom Google Font -->
	    <link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
	    <!-- Font Awesome CDN -->
	    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	    <!-- JQuery CDN -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	    <!-- Personal CSS -->
		<link href="index.css" type="text/css" rel="stylesheet" />
		<title>Austin Meyers | Developer</title>
		<link rel="Shortcut Icon" type="image/ico" href="transparent.ico" />
		<?php 
			if(!isset($_GET["nfc"])){
				$nfc = false;
			} else {
				$nfc = filter_var($_GET["nfc"], FILTER_VALIDATE_BOOLEAN);
			}
		?>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row" id="one">
				<div class="col-md-12" id="center">
			  		<p><img src="logo.png" alt="logo" width="300px" height="400px" /></p>
					<p>Hello,</p>
					<p>I'm Austin Meyers &</p>
					<p>I'm <span id="spin">a coder</span>.</p>
					<i class="fa fa-chevron-circle-down fa-3x"></i>
					<?php 
					if ($nfc == true) { ?>
						<!-- Modal -->
						<div class="modal fade in" id="nfc" tabindex="-1" role="dialog"
						aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
										aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">You're using NFC?</h4>
									</div>
									<div class="modal-body">
										<p>We noticed you visited this page via an NFC interaction.</p>		
										<span class="fa-stack fa-lg">								
											<i class="fa fa-circle-thin fa-stack-2x"></i>
											<i class="fa fa-wifi fa-rotate-90 fa-stack-1x"></i>
										</span>
									</div>
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</div>
					<?php } ?>
			   </div>
			</div>
			<div class="row" id="three">
				<div class="col-md-4 left">
					<p>I build things driven by user interaction.</p>
					<p><i class="fa fa-users fa-3x"></i></p>
				</div>
				<div class="col-md-4" id="noPad">
					<div id="puzzlearea">

					</div>
					<button type="button" id="shufflebutton" class="btn btn-success btn-lg">Shuffle</button>
				</div>
				<div class="col-md-4 right">
					<h2>Leaderboard</h2>
					<?php
						$myfile = fopen("leader.txt", "r") or die("Unable to open file!");
						echo fread($myfile,filesize("leader.txt"));
						fclose($myfile);
					?>
						<div class="modal fade in" id="userName" tabindex="-1" role="dialog"
						aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal"
										aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Add your name to the leader board!</h4>
									</div>
									<div class="modal-body">
											<form method="get" action="index.php" role="form">
												<div class="form-group">
													<label for="usr">Arcade Name:</label>
													<input type="text" class="form-control" id="usr">
												</div>
											<button type="submit" class="btn btn-default">Submit</button>
										</form>
									</div>
								</div><!-- /.modal-dialog -->
							</div><!-- /.modal -->
						</div>
					<?php
						$time = $_GET["time"];
						if($time != ""){
							$name = $_GET["name"];
							console.log($time + $name);
							file_put_contents("leader.txt", $name.':'.$time."\n", FILE_APPEND);
						}
					?>
				</div>
			</div>
			<div class="row" id="one">
				<div class="col-md-6">
					<p>Using Python, and a Photo Manipulation library called Pixel Math, </p>
					<p><a href="sudoku/Sudoku.jar" download="FinalProject.zip"><img src="ImageScrambler.PNG" alt="ImageScrambler" width="309px" height="309px"></a></p>
					<p>'Image Scrambler' uses mathematical functions and a user interface to educate about Image Processing by playing a game.</p>
					<a href="sudoku/Sudoku.jar" download="FinalProject.zip"><button type="button" class="btn btn-default btn-lg">
					Download Image Scrambler</button></a>
				</div>
				<div class="col-md-6">
					<p>'Brython Clock' built to satisfy CSE 190 course requirements.</p>
					<p><a href="clock.html" target="_blank"><img src="clock-code.PNG" alt="Brython Code" width="309px" height="309px" /></a></p>
					<p>"Brython is a Python 3 implementation adapted for the HTML5 environment."</p>

				</div>
			</div>
			<div class="row" id="four">
				<div class="col-md-6">
					<p>A background in multiple high-level programming languages gives me a unique
					perspective on lightweight, agile web development.</p>
				</div>
				<div class="col-md-6 mid-right">
					<p>'Recursive Sudoku' was a project I created as part of the 24 hour CodeDay Hackathon in 2014.</p>
					<a href="sudoku/Sudoku.jar" download="Sudoku.jar"><button type="button" class="btn btn-default btn-lg">
					Download Sudoku.jar</button></a>
				</div>
			</div>
			<div class="row" id="one">
				<div class="col-md-12" id="center">
					<p>Resume</p>
				</div>
			</div>
			<div class="row" id="one">
				<div class="col-md-6">
					<p>100% Locally Hosted.</p>
					<p><img src="rasbpi.png" alt="logo" width="70px" height="90px" /></p>
				</div>
				<div class="col-md-6">
					<p>Reach out & touch me.</p>
					<p>
						<a href="http://stackoverflow.com/users/4403604/austin-meyers" target="_blank"><i class="fa fa-stack-overflow fa-2x"></i></a>
						<a href="https://www.linkedin.com/pub/austin-meyers/94/a1a/bb1" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
						<a href="https://github.com/arm22" target="_blank"><i class="fa fa-github-square fa-2x" ></i></a>
					</p>
				</div>
			</div>
		</div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<!-- Personal JavaScript -->
		<script src="index.js" type="text/javascript"></script>
	</body>
</html>