<?php

$page_title = "Donate";

include "../include/header.php";

?>

<div class="container-fluid circuit2-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Donate</h1>
            </div>
        </div>
    </div>
</div>

<div class="container donate-page">
    <div class="row">
        <div class="col-md-12">
            <h3>Thank you for supporting our team!</h3>

            <p>All donations to the team are made through the University of Louisville and tax-deductible.
            <br /><br />
            To donate, please follow the steps below:

            <ul>
                <li>Click the "Donate" button below</li>
                <li>Fill out the requested information on the J.B. Speed School page</li>
                <li>Under "Designations", enter your desired amount in "SPD ECE-Gifts STd Activities (G2878)"</li>
                <li>Click the "X" beside "Other" to designate your full donation to Redbird Robotics</li>
                <li>Follow through the rest of the form to complete your donation</li>
            </ul>

            We sincerely appreciate your support!</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="btn-group" role="group">
              <a href="<?php echo $links["sponsorship_packet"]; ?>" target="_blank"><button type="button" class="btn btn-default btn-block">Download Sponsorship Packet</button></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="btn-group" role="group">
              <a href="https://securelb.imodules.com/s/1157/site2014/indexFund.aspx?sid=1157&gid=1&pgid=897&cid=1735&dids=139.485" target="_blank"><button type="button" class="btn btn-lg btn-default btn-success btn-block">Donate</button></a>
            </div>
        </div>
    </div>

    <!--
    <div class="col-md-6">
        <div class="row" style="margin-bottom: 0">
            <div class="col-md-12">
                <h3>Donator Information</h3>
                <p>
                    Donations made through the University of Louisville are anonymous to protect your privacy, however if you would like to leave us a note with your contribution you may do so here.
                    <br /><br />
                    Filling out the form below is fully optional.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="name">Name</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="name" required="false" placeholder="First and last or company name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label for="note">Note</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="note" required="false" placeholder="If you would like to send a note with your donation you can do so here.">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="btn btn-success btn-block" type="submit" value="Donate">
            </div>
        </div>
        -->
</div>

<?php include "../include/footer.php"; ?>
