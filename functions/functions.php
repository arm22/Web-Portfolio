<?php
  function fill_head() { ?>
    <meta name="google-site-verification" content="tY_4djMl2E9ysu0JXCfs0gmnZeOrjj3P4ly4fpfZ_bc" />
    <meta name="Austin Meyers | Developer" content="Personal web-page of Austin R. Meyers." />
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/bower_components/material-design-lite/material.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="css/index.css" type="text/css" rel="stylesheet" />-->
    <title>Austin Meyers | Developer</title>
    <link rel="Shortcut Icon" type="image/ico" href="img/transparent.ico" />
  <?php  } 
    function fill_foot() { ?>
        <div class="row" id="footer">
            <div class="col-md-6">
                <div>
                    <img src="img/rasbpi.png" alt="logo" class="img-responsive center" width="42px" height="53px" />
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
        <script src="/bower_components/material-design-lite/material.min.js"></script>
        <!-- Personal JavaScript -->
        <script src="index.js" type="text/javascript"></script>
<?php    } ?>