<?php
include_once '../header.php';
?>
    <main class="container">
        <section>
            <h2 class="text-center heading my-4 p-2">My Design</h2>

            <div class="py-4">
                <div class="col-10 offset-1 rounded py-2 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-2 text-center">
                            <img class="img-fluid" src="<?=ROOT_URI?>images/smartspace-logo.png" alt="social network logo"/>
                        </div>
                        <div class="col-md-10">
                            <h3 class="py-2 text-center text-md-left">Social Network Project</h3>
                            <p>I was in charge of the design for this project.</p>
                            <p>Smartspace is a space for the student. As the name represents our project, I decided to go with typography, using S as the base. The logo consists of two "S", representing Smart and Space. The outer black S and the inner white S. The small circles in the center represents the connection. It acts as a link amongst the users in our social network.</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>coding/social-network.php">Go to code</a>
                                <a class="button-light p-1" href="http://smart-space.herokuapp.com/"">See project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="py-4">
                <div class="col-10 offset-1 rounded py-2 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-4 text-center">
                            <img class="img-fluid" src="<?=ROOT_URI?>images/hospital-styletile.jpg" alt="hospital website style tile"/>
                        </div>
                        <div class="col-md-8">
                            <h3 class="py-2 text-center text-md-left">Hospital Project</h3>
                            <p>Together with UX-Design, our team designed our own wireframes and style tile together.</p>
                            <p></p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>coding/hospital.php">Go to code</a>
                                <a class="button-light p-1" href="http://humberdistricthospital.azurewebsites.net"">See project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>
<?php
include_once  '../footer.php';
?>