<?php
include_once '../header.php';
?>


    <section class="container">
        <h2 class="text-center heading my-4 p-2">Hospital Project</h2>
        <div class="justify-content-center row">
            <div class="col-md-6">
                <a href="http://humberdistricthospital.azurewebsites.net" target="_blank"><img class="img-fluid" src="<?=ROOT_URI?>images/hospital-responsive.png" alt="hospital website cross devices"/></a>
            </div>
        </div>
        <div class="py-4">
            <div class="col-10 offset-1 rounded bg-grey py-2 red-border-y">
                <div class="row align-items-start m-2 text-center">
                    <div class="col-md-4">
                        <h4>Languages</h4>
                        <div>HTML5</div>
                        <div>CSS</div>
                        <div>JavaScript</div>
                        <div>C#</div>
                        <div>MSSQL</div>
                    </div>
                    <div class="col-md-4">
                        <h4>Technology</h4>
                        <div>.NET with MVC</div>
                        <div>Bootstrap 4</div>
                        <div>Captcha</div>
                    </div>
                    <div class="col-md-4">
                        <h4>Software</h4>
                        <div>Visual Studio</div>
                        <div>Azure Server</div>
                    </div>
                </div>
            </div>
            <div class=" mt-5">
                <h4 class="text-center text-wide font-weight-bold">Details</h4>
                <p>This application aims to improve existing hospital website based on user research and user experience.</p>
                <p>Features: Patient portal (registration and lab result), doctor list, career opportunities, donation, online consultation form, survey, testimonial, frequently asked questions.</p>
                <p>My role: Developer</p>
                <p>Responsible Features: Career Opportunities and Testimonial</p>
            </div>

            <div class=" mt-5">
                <h4 class="text-center text-wide font-weight-bold">Case Study</h4>
                <p>In this project, we worked as a team to identify what a hospital website needs and think of solutions to solve the problems.
                    The main problem for hospital website in general is that they can not update their own website regularly or do not have
                    control over it. This problem usually leads to outdated website, or costly maintenance, or even missing out on potential donation from donors.</p>
                <p>As a solution, we decided to build a system that can help the hospital staff to manage their own web content with ease.
                    We decided to plan and develop 10 features in 4 months. The features would respond to the hospital need
                    and would improve the relationship between the hospital and its patients, visitors and donors.
                </p>
                <p>The most basic thing that we all build in our features is the ability to read (from admin side and public side), add new content, edit content and delete content.
                We also create the login system that only authorized personnel can log in.</p>
                <p>There are a few things I added when I work on my second feature, Testimonial, in this project. First, it is the testimonial auto sorted system that I built.
                    If an testimonial has swear word that are saved in the database, it will be sorted out. There are different tabs that categorize
                    testimonials. The bad testimonials will go into a separate tab, the posted ones will go into the posted tab. This small detail will really help
                    the staff not having to go through a long list of testimonial and they can focus on the main thing, checking the pending testimonial.
                </p>
                <p>Another important thing spam prevention. Because of the Captcha I added, the website database is less vulnerable to spam bots.</p>
                <p>In this period, I also configured and set up an 404 page that gives a custom message to the users if the URL does not
                exist. This gives the users a nicer experience and the hospital can navigate the users back to the website easier.</p>
            </div>
            <div class="text-right">
                <a class="button-light p-1" href="http://humberdistricthospital.azurewebsites.net">See project</a>
            </div>
        </div>
    </section>







<?php
include_once '../footer.php';
