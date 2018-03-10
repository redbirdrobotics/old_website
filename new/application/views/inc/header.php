<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php echo $this->config->item('site_name'); ?> - <?php echo $page_title; ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/import.css'); ?>">
        <link href="<?php echo base_url('assets/utils/open-iconic/css/open-iconic-bootstrap.css'); ?>" rel="stylesheet">
    </head>
    <body>
        <?php if(!$is_home) { ?>
        <div class="container-fluid header-bg-circuit1">
        <?php } ?>
        <div class="container">
            <nav class="navbar navbar-expand-lg " style="background: rgba(255, 255, 255, .5); color: white:">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" style="color:#FFF" href="mailto:amfox005@louisville.Edu">Contact Us</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" style="color:#FFF" href="http://aerialroboticscompetition.org/" target="_new">IARC </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/donate" style="color:#AD0000">Become a sponsor</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown link
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li> -->
                    </ul>
                    <ul class="navbar-nav navbar-right">
                        <!-- <a class="btn btn-social-icon btn-github"><span class="fa fa-github"></span></a> -->
                        <a href="http://redbirdrobotics.org/team/join/"><button type="button" class="btn btn-danger navbar-btn">Join the team!</button></a>
                    </ul>
                </div>
            </nav>
            <div class="row">
                <div class="col-md-3">
                    <div class="header-logo"></div>
                </div>
                <div class="col-md-9">
                    <nav class="navbar navbar-expand-lg navbar-dark custom-nav">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#competition">Competition</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sponsors">Sponsors</a>
                            </li>
                            <!--                             <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Sponsors
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Sponsor Us</a>
                                </div>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </div>
        <?php if(!$is_home) { ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="header-page-title"><?php echo $page_title; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="header-page-subtitle"><?php echo $page_subtitle; ?></div>
                </div>
            </div>
        </div>
        <?php } ?>
        </div>