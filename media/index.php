<?php

$page_title = "Media";

include "../include/header.php";

?>

<html>
	<head>
		<style>
			div.gallery {
			    margin: 5px;
			    border: 1px solid #ccc;
			    float: left;
			    width: 180px;
			}

			div.gallery:hover {
			    border: 1px solid #777;
			}

			div.gallery img {
			    width: 100%;
			    height: auto;
			}

			div.desc {
			    padding: 15px;
			    text-align: center;
			}
		</style>
	</head>
	<body>

		<div class="gallery">
			<a target="_blank" href="../assets/img/gallery/drone.jpg">
				<img src="../assets/img/gallery/drone.jpg" alt="Drone" width="300" height="200">
			</a>
			<div class="desc">Add a description of the image here</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="../assets/img/gallery/soldering.jpg">
				<img src="../assets/img/gallery/soldering.jpg" alt="Fjords" width="300" height="200">
			</a>
			<div class="desc">Add a description of the image here</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="../assets/img/gallery/green_paint.jpg">
				<img src="../assets/img/gallery/green_paint.jpgg" alt="Fjords" width="300" height="200">
			</a>
			<div class="desc">Add a description of the image here</div>
		</div>

		<div class="gallery">
			<a target="_blank" href="../assets/img/gallery/standing.jpg">
				<img src="../assets/img/gallery/standing.jpg" alt="Fjords" width="300" height="200">
			</a>
			<div class="desc">Add a description of the image here</div>
		</div>

	</body>
</html> 

