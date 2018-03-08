<?php
    $page_title = "Competition";

    include "../include/header.php";

    ?>
<div class="container-fluid circuit1-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Competition</h1>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row" style="padding: 20px">
        <div class="col-md-10">
            <img src="../assets/img/IARC.png" alt="International Aerial Robotics Competition" style="">
        </div>
        <div class="col-md-2">
            <!-- buttons -->
            <div class="btn-group-vertical" role="group" style="padding: 40px 40px 0 0">
                <!-- <button type="button" class="btn btn-default">Rules<a href="/rules.php"></button> -->
                <button type="button" class="btn btn-default"><a href="http://www.aerialroboticscompetition.org/media.php", target="_blank">Media Coverage</a> </button>
                <button type="button" class="btn btn-default"><a href="http://www.aerialroboticscompetition.org/pastmissions.php", target="_blank">Past IARC Missions</a> </button>
                <button type="button" class="btn btn-default"><a href="http://www.aerialroboticscompetition.org/downloads/mission7rules_013017.pdf", target="_blank">Official Rules</a> </button>
            </div>
        </div>
        <hr />
    </div>
    <!-- ends row -->
    <!-- paragraph and images -->
    <div class="row">
        <div class="col-md-9">
            <h2>The Challenge: Mission 7</h2>
            <p>The competition taking place in late July of 2017 entails building and programming a drone to fly autonomously around an arena while interacting with outher autonomously moving robots. The robots on the ground will be simualting randomized movement while our drone will fly around and manipulate their movement. The goal is to herd at least four of the ten ground robots across the green end of the arena shown to the right within 10 minutes. If a bot goes out of bounds, it is out of the challenge. If this wasnt't enough of a challenge, there are also taller autonomous ground robots that are designated as obstacles which our drone must avoid. To learn more about the competition, check out IARC's promotional video <a href="https://player.vimeo.com/video/103487384", target="_blank">here</a>. To find more information about the competition in general, see the <a href="http://www.aerialroboticscompetition.org/", target="_blank">official IARC website</a>.</p>
        </div>
        <div class="col-md-3">
            <img src="../assets/img/ground_bot.png" alt="Autonomous ground robot" style="width: 100%">
            <img src="../assets/img/grid.png" alt="Arena grid" style="width: 100%">
        </div>
    </div>
</div>
<?php include "../include/footer.php"; ?>
