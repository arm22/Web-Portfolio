<!DOCTYPE HTML>
<html>
	<head>
		<?php 
		fill_head();
		?>
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
			<?php
			fill_foot();
			?>
			</div>
			
		<!-- Personal JavaScript -->
		<script src="js/puzzle.js" type="text/javascript"></script>
	</body>
</html>