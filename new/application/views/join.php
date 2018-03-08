<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="row" style="margin-bottom: 0">
                <div class="col-md-12">
                    <p>We are very excited that you are interested in joining Redbird Robotics! By joining the team you will be subject to experiences and learning opportunities that you cannot gain in the classroom. Our team is extremely dedicated to our collective interest in robotics and strives to perform at the top of all events we participate in. In the process, our members are constantly learning skills that will benefit them in both their academic and professional careers.
                        <br /><br />
                    After filling out and submitting the form below, it will be reviewed by our captains and team leads. If we are looking for new members at the time and feel that you will be a good fit for the team we will get in touch with you within 3 days of your submission. Thanks again for your interest and we look forward to working with you!</p>
                </div>
            </div>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="row">
                    <div class="col-md-12">
                        <h4>Contact Information</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="first_name">First name</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="first_name" required="true" placeholder="First name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="last_name">Last name</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="last_name" required="true" placeholder="Last name">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <label for="email">Email address</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" required="true" placeholder="Email address">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="phone">Phone</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" required="true" placeholder="XXX-XXX-XXX">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="preferred_contact">Preferred contact method</label>
                        <div class="form-group">
                            <select class="form-control" name="preferred_contact">
                                <option>Text message</option>
                                <option>Email</option>
                                <option>Phone call</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-12">
                        <h4>Interest Information</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <label for="major">Major</label>
                        <div class="form-group">
                            <input type="text" class="form-control" name="major" required="true" placeholder="Major">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="year">Year</label>
                        <div class="form-group">
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
                        <label for="time_commitment">Time commitment per week</label>
                        <div class="form-group">
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
                        <div class="form-group">
                            <label for="explaination">Explain your interest</label>
                            <textarea class="form-control" rows="4" name="explanation" required="true" placeholder="Please briefly explain your interest in the team."></textarea>
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
       <!--  <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Card title</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div> -->
    </div>
</div>