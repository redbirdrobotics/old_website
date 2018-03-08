<?php

$page_title = "Join";

include "../../include/header.php";

?>

<?php
// Define variables and set to empty values
$first_name = $last_name = $email = $phone = $preferred_contact = $year = $time_commitment = $explaination = "";

// Reset success
$success = false;

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $first_name = clean_input($_POST["first_name"]);
    $last_name = clean_input($_POST["last_name"]);
    $email = clean_input($_POST["email"]);
    $phone = clean_input($_POST["phone"]);
    $preferred_contact = clean_input($_POST["preferred_contact"]);
    $year = clean_input($_POST["year"]);
    $major = clean_input($_POST["major"]);
    $time_commitment = clean_input($_POST["time_commitment"]);
    $explaination = clean_input($_POST["explainations"]);

    // Build the body
    $body = "First name: " . $first_name . "\n\rLast name: " . $last_name . "\n\rEmail: " . $email . "\n\rPhone: " . $phone . "\n\rPreferred contact: " . $preferred_contact . "\n\rYear: " . $year . "\n\rMajor: " . $major . "\n\rTime commitment: " . $time_commitment . "\n\rExplaination:\n\r" . $explaination;

    // Send
    mail($member_application["emails"], $member_application["subject"], $body, $member_application["headers"]);

    // Set success
    $success = true;
}

function clean_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<div class="container-fluid code1-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Join the Team</h1>
            </div>
        </div>
    </div>
</div>

<div class="container join-page">

<?php

if($success)
{

?>
    <div class="row" style="margin-bottom: 0">
        <div class="col-md-12">
            <div class="alert alert-success" role="alert" style="margin-bottom: 0"><strong>Success!</strong> Your application has been submitted.</div>
        </div>
    </div>

<?php

}

?>

    <div class="row" style="margin-bottom: 0">
        <div class="col-md-12">
            <h3>Welcome!</h3>
        </div>
    </div>
    <div class="row" style="margin-bottom: 0">
        <div class="col-md-12">
            <p>We are very excited that you are interested in joining Redbird Robotics! By joining the team you will be subject to experiences and learning opportunities that you cannot gain in the classroom. Our team is extremely dedicated to our collective interest in robotics and strives to perform at the top of all events we participate in. In the process our members are constantly learning skills that will benefit them in both their academic and professional careers.
            <br /><br />
            After filling out and submitting the form below, it will be reviewed by our captains and team leads. If we are looking for new members at the time and feel that you will be a good fit for the team we will get in touch with you within 3 days of your submission. Thanks again for your interest and we look forward to working with you!</p>
        </div>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <div class="row" style="margin-bottom: 0">
            <div class="col-md-12">
                <h3>Contact Information</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label for="first_name">First name</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="first_name" required="true" placeholder="First name">
                </div>
            </div>
            <div class="col-md-6">
                <label for="last_name">Last name</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="last_name" required="true" placeholder="Last name">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="email">Email address</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="email" required="true" placeholder="Email address">
                </div>
            </div>
            <div class="col-md-4">
                <label for="phone">Phone</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="phone" required="true" placeholder="XXX-XXX-XXX">
                </div>
            </div>
            <div class="col-md-4">
                <label for="preferred_contact">Preferred contact method</label>
                <div class="input-group">
                    <select class="form-control" name="preferred_contact">
                        <option>Text message</option>
                        <option>Email</option>
                        <option>Phone call</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row" style="margin-bottom: 0">
            <div class="col-md-12">
                <h3>Interest Information</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label for="major">Major</label>
                <div class="input-group">
                    <input type="text" class="form-control" name="major" required="true" placeholder="Major">
                </div>
            </div>
            <div class="col-md-4">
                <label for="year">Year</label>
                <div class="input-group">
                    <select class="form-control" name="year">
                        <option>Freshman</option>
                        <option>Sophomore</option>
                        <option>Junior</option>
                        <option>Senior</option>
                        <option>Graduate</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <label for="time_commitment">Intended time commitment per week</label>
                <div class="input-group">
                    <select class="form-control" name="time_commitment">
                        <option>&lt;10 hours</option>
                        <option>10-15 hours</option>
                        <option>&gt;15 hours</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <label for="explaination">Explain your interest</label>
                    <div style="color: #bbb"></div>
                    <textarea class="form-control" rows="4" name="explaination" required="true" placeholder="Please briefly explain your interest in the team."></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <input class="btn btn-success btn-block" type="submit" value="Submit">
            </div>
        </div>
    </form>
</div>

<?php include "../../include/footer.php"; ?>
