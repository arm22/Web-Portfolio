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
				<div class="col-md-12">
			  		<p><img src="logo.png" class="image-responsive" alt="logo" width="300px" height="400px" /></p>
					<p>Hello,</p>
					<p>I'm Austin Meyers</p>
					<p>& I'm <span id="spin">a coder</span>.</p>
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
			<div class="row" id="two">
				<div class="col-md-6">
					<img id="face" src="face.jpg" class="img-responsive img-circle" alt="Face">
				</div>
				<div class="col-md-6">
					<div class="list-group">
						<a href="Resume.pdf" target="_blank" class="list-group-item">
							Resume
						</a>
						<a href="imagepage.html" target="_blank" class="list-group-item">
							Image Scrambler
						</a>
						<a href="brythonpage.html" target="_blank" class="list-group-item">
							Brython Clock
						</a>
						<a href="puzzlepage.php" target="_blank" class="list-group-item">
							15 Puzzle
						</a>
						<a href="sudokupage.html" target="_blank" class="list-group-item">
							Sudoku
						</a>
						<a href="http://arm387.wix.com/infovis-2015" target="_blank" class="list-group-item">
							NFC Infographic
						</a>
					</div>
				</div>
			</div>
			<div class="row" id="footer">
				<div class="col-md-6">
					<div>
						<img src="rasbpi.png" alt="logo" class="img-responsive center" width="42px" height="53px" />
						<p>100% Locally Hosted.</p>
					</div>
				</div>
				<div class="col-md-6">
					<div>
							<a href="http://stackoverflow.com/users/4403604/austin-meyers" target="_blank"><i class="fa fa-stack-overflow fa-2x"></i></a>
							<a href="https://www.linkedin.com/pub/austin-meyers/94/a1a/bb1" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a>
							<a href="https://github.com/arm22" target="_blank"><i class="fa fa-github-square fa-2x"></i></a>
							<p>Reach out & touch me.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
		<!-- Personal JavaScript -->
		<script src="index.js" type="text/javascript"></script>
	</body>
</html>