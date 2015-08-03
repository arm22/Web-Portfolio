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
		<link href="tst.css" type="text/css" rel="stylesheet" />
		<title>Austin Meyers | Developer</title>
		<link rel="Shortcut Icon" type="image/ico" href="transparent.ico" />
	</head>
	<body>
		<div class="container-fluid">
			<div class="row" id="three">
				<div class="col-md-4 left">
					<p>'Tile Puzzle' is a web based game optimized for all devices.</p>
				</div>
				<div class="col-md-4" id="noPad">
					<div id="puzzlearea">

					</div>
					<button type="button" id="shufflebutton" class="btn btn-primary btn-lg">     Play     </button>
				</div>
				<div class="col-md-4 right">
					<h1><u>Recent Players</u></h1>
					<?php
						$myfile = fopen("leader.txt", "r") or die("Unable to open file!");
						$names = fread($myfile,filesize("leader.txt"));
						echo nl2br($names);
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
										<label for="usr">Arcade Name</label>
										<input type="text" class="form-control" id="usr">
										<button class="btn btn-default" id="Sub">Submit</button>
									</div>
								</div><!-- /.modal-dialog
							</div><!-- /.modal -->
						</div>
					<?php
						$time = $_GET["time"];
						if($time != ""){
							$name = $_GET["name"];
							$file_data = $name.' : '.$time."\n";
							$file_data .= file_get_contents('leader.txt');
							file_put_contents("leader.txt", $file_data);
						}
					?>
				</div>
				<p><a href="http://www.austinrmeyers.com/puzzlepage.php"><i class="fa fa-refresh fa-2x"></i></a></p>
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
		<script src="puzzle.js" type="text/javascript"></script>
	</body>
</html>