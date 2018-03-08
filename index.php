<?php

$page_title="Home";

include "include/header.php";

?>

<div class="container-fluid frontpage-video-container">
    <video class="frontpage-video" loop muted autoplay>
        <source src="assets/vid/promo_vid.mp4#t=12,70" type="video/mp4">
    </video>
     <div class="row">
        <div class="col-md-12">
            <div class="frontpage-video-logo-overlay"></div>
        </div>
    </div>
    <div class="frontpage-video-overlay"></div>
</div>

<div class="container-fluid code1-header" style="margin-bottom: 0">
    <div class="container">
       
        <div class="row">
            <div class="col-md-12">
                <h4>About Us</h4>
                <p align="justify">Redbird Robotics brings together multiple engineering disciplines to provide practical, real world experience for students through competitive robotic design and creation. Currently, we are working on an entry for the <a href="<?php echo $site_url; ?>/competition">International Aerial Robotics Competition</a>.
                    <br />
                    <br /> Team members participate in all aspects of robotic design from concept design to manufacturing to programming. Our team is a diverse collection of electrical, mechanical, and computer engineering students with experience working for companies such as Metalsa Structural Products, iKeyless, and Luckett & Farley Architectural Firm.</p>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container-fluid off-white" style="margin-bottom: 0">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>About Us</h2>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid white" style="padding-top: 10px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Proud Sponsors</h2>
                <p>Our sponsors help to promote educational applications for innovative technologies while maintaining a professional relationship with the members of our team. Interested in sponsoring our team? Email <a href="mailto:sponsor@redbirdrobotics.org">sponsor@redbirdrobotics.org</a> or check out our <a href="<?php echo $config["site_url"]; ?>/donate">Sponsor / Donate</a> page.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="dummy"></div>
                <div class="donator">
                    <a href="https://www.mhsinc.net/" target="_blank">
                        <img src="assets/img/logos/mhs_sm.png" alt="Material Handling Systems" class="donator-logo">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dummy"></div>
                <div class="donator">
                    <a href="https://www.luckett-farley.com" target="_blank">
                        <img src="assets/img/logos/luckettfarley_sm.png" alt="Luckett & Farley" class="donator-logo">
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="dummy"></div>
                <div class="donator">
                    <a href="http://www.thermaleq.com" target="_blank">
                        <img src="assets/img/logos/thermalequipmentsales.png" alt="Thermal Equipment Sales" class="donator-logo">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="dummy"></div>
                <div class="donator">
                    <a href="http://www.genscape.com" target="_blank">
                        <img src="assets/img/logos/genscape.png" alt="Genscape" class="donator-logo">
                    </a>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>

<?php include "include/footer.php"; ?>
