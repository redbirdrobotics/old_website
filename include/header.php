<?php include "config.php"; ?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $page_title; ?> - <?php echo $config["site_name"]; ?></title>
        <meta name="description" content="Redbird Robotics">
        <meta name="author" content="Redbird Robotics">
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $config["site_url"]; ?>/assets/css/import.css">
        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/a3f2d8d80c.js"></script>
        <!-- Google Analytics -->
        <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-97385996-1', 'auto');
        ga('send', 'pageview');
        </script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo $config["site_url"]; ?>/">Home</a></li>
                        <!-- <li><a href="<?php echo $config["site_url"]; ?>/team">Team</a></li> -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Team <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="text-transform: none">
                                <li><a href="<?php echo $config["site_url"]; ?>/team#captains">Captains</a></li>
                                <li><a href="<?php echo $config["site_url"]; ?>/team#sub-teams">Sub-teams</a></li>
                                <li><a href="<?php echo $config["site_url"]; ?>/team#all-members">All Members</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo $config["site_url"]; ?>/team/join">Join the Team</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $config["site_url"]; ?>/competition">Competition</a></li>
                        <!-- <li><a href="<?php echo $config["site_url"]; ?>/media">Media</a></li> -->
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <!-- <a class="btn btn-social-icon btn-github"><span class="fa fa-github"></span></a> -->
                        <a href="<?php echo $config["site_url"]; ?>/team/join" ><button type="button" class="btn btn-warning navbar-btn">Join the team!</button></a>
                        <a href="<?php echo $config["site_url"]; ?>/donate" ><button type="button" style="margin-left: 5px" class="btn btn-success navbar-btn">Sponsor / Donate</button></a>
                    </ul>
                    </div> <!-- /.navbar-collapse -->
                    </div> <!-- /.container-fluid -->
                </nav>
                <div style="height: 51px; width: 100%;"></div>