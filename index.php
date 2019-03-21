<?php
include_once 'header.php';
?>
    <main>
        <section class="align-items-center">
            <h1 class="d-none">Introduction</h1>
            <div class="row">
                <div class="position-relative text-left">
                    <img class="img-fluid" src="<?=ROOT_URI?>images/banner.jpg" alt="portrait"/>
                    <div class="position-absolute main-intro">
                        <p class="responsive-text">Hi there!</p>
                        <p>Ngoc (Jade) is a logic enthusiast wanting to be a <span class="font-weight-bold">Full-Stack Developer</span>.</p>
                    </div>
                </div>
            </div>
            <div class="bg-grey-no-hover">
                <div class="container py-3">
                    <h2 class="text-center pb-4"><i class="fas fa-code"></i> My skills</h2>
                    <!-- <p>
                        <span class="mx-4 text-hover">HTML</span>
                        <span class="mx-4 text-hover">CSS</span>
                        <span class="mx-4 text-hover">JavaScript</span>
                    </p>
                    <p>
                        <span class="mx-4 text-hover">Laravel</span>
                        <span class="mx-4 text-hover">React/Angular</span>
                        <span class="mx-4 text-hover">Bootstrap</span>
                    </p>
                    <p>
                        <span class="mx-4 text-hover">PHP</span>
                        <span class="mx-4 text-hover">ASP.NET</span>
                        <span class="mx-4 text-hover">Oracle</span>
                        <span class="mx-4 text-hover">MySQL</span>
                    </p> -->
                    <ul>
                        <li class="mb-2">
                            <div class="skill-title">HTML5/CSS3/Javascript</div>
                            <div class="skill-container"><div class="skill html hidden">90%</div></div>
                        </li>
                        <li class="mb-2">
                            <div class="skill-title">PHP</div>
                            <div class="skill-container"><div class="skill php hidden">85%</div></div>
                        </li>
                        <li class="mb-2">
                            <div class="skill-title">.NET</div>
                            <div class="skill-container"><div class="skill net hidden">70%</div></div>
                        </li>
                        <li class="mb-2">
                            <div class="skill-title">Database (MySQL, Oracle, MSSQL)</div>
                            <div class="skill-container"><div class="skill db hidden">85%</div></div>
                        </li>
                        <li class="mb-2">
                            <div class="skill-title">Bootstrap, jQuery, Laravel</div>
                            <div class="skill-container"><div class="skill framework hidden">80%</div></div>
                        </li>
                        <li class="mb-2">
                            <div class="skill-title">React, Angular</div>
                            <div class="skill-container"><div class="skill front hidden">65%</div></div>
                        </li>
                        <li class="mb-2">
                            <div class="skill-title">User Research, UI/UX Design, Usability Testing</div>
                            <div class="skill-container"><div class="skill uiux hidden">70%</div></div>
                        </li>
                    </ul>
                </div>
                <div id="typing-text">

                </div>
            </div>
        </section>

        <section class="container">
            <h2 class="text-center heading my-4 p-2" id="coding">My coding projects</h2>


            <div class="py-4">
                <div class="col-10 offset-1 rounded bg-grey py-2 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-5 text-center">
                            <a href="<?=ROOT_URI?>webdev/food-saviour/"><img class="img-fluid" src="<?=ROOT_URI?>images/food-saviour-desktop.png" alt="food saviour homepage"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left">Food Saviour</h3>
                            <p>In order to reduce food waste, the application helps the users keeping track of their grocery items and gives notifications when something is expiring.</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>coding/food-saviour.php">Details</a>
                                <a class="button-light p-1" href="<?=ROOT_URI?>webdev/food-saviour/">See project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="py-4">
                <div class="col-10 offset-1 rounded bg-grey py-2 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-5 text-center">
                            <a href="<?=ROOT_URI?>webdev/colorpalette/"><img class="img-fluid" src="<?=ROOT_URI?>images/color-desktop.png" alt="color palette homepage"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left">Color Palette</h3>
                            <p>Angular Project using API. Color Palette gives suggestion on the color combination to use on website. It uses API as the database.</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>coding/color-palette.php">Details</a>
                                <a class="button-light p-1" href="<?=ROOT_URI?>webdev/colorpalette/">See project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="py-4">
                <div class="col-10 offset-1 rounded bg-grey py-2 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-5 text-center">
                            <a href="<?=ROOT_URI?>coding/hospital.php"><img class="img-fluid" src="<?=ROOT_URI?>images/hospital-desktop.png" alt="hospital website homepage"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left">Humber and District Hospital</h3>
                            <p>This application aims to improve existing hospital website based on user research and user experience. The redesign of hospital website supports content management for the hospital.</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>coding/hospital.php">Details</a>
                                <a class="button-light p-1" href="http://humberdistricthospital.azurewebsites.net">See project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="col-10 offset-1 rounded bg-grey py-2 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-5 text-center">
                            <a href="<?=ROOT_URI?>coding/social-network.php"><img class="img-fluid" src="<?=ROOT_URI?>images/socialnetwork.jpg" alt="social network homepage"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left">Social Network for Student</h3>
                            <p>Student Social Network application is made to help the students connect with the employer and connect to their future dream jobs. It is also a place for the employer to look for potential employee.</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>coding/social-network.php">Details</a>
                                <a class="button-light p-1" href="http://smart-space.herokuapp.com/">See project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-4">
                <div class="col-10 offset-1 rounded bg-grey py-3 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-5 text-center">
                            <a href="coding/<?=ROOT_URI?>webdev/animation.php"><img class="img-fluid" src="<?=ROOT_URI?>images/animation.jpg" alt="animation homepage"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left">CSS Animation</h3>
                            <p>Project explores CSS and CSS animation with the help of a little JavaScript. LESS was used for browser compatibility and was auto compiled in Koala.</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>coding/animation.php">Details</a>
                                <a class="button-light p-1" href="<?=ROOT_URI?>webdev/animation">See project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section class="container">
            <h2 class="text-center heading my-4 p2" id="design">My design</h2>
            <div class="py-4">
                <div class="col-10 offset-1 rounded bg-grey py-2 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-5 text-center">
                            <a href="<?=ROOT_URI?>design/"><img class="img-fluid" src="<?=ROOT_URI?>images/desktop-mockup.png" alt="hospital website mockup"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left"></h3>
                            <p>As I have learned industrial design and graphic design before, I usually take on the role of designer within my group.</p>
                            <p>In my team, I usually create logo, wireframe, mock-up and suggestions about more detailed layouts.</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>design/">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <h2 class="text-center heading my-4 p2" id="drawing">My other interest</h2>
            <div class="py-4">
                <div class="col-10 offset-1 rounded bg-grey py-2 red-border-y">
                    <div class="row align-items-center m-2">
                        <div class="col-md-5 text-center">
                            <a href="<?=ROOT_URI?>drawing/"><img class="img-fluid" src="<?=ROOT_URI?>images/banner_drawing.jpg" alt="drawing example"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left">Drawing</h3>
                            <p>This is just my hobby relating to Game, Vocaloids and Japanese music that I really enjoy doing. Warning: it is really specific to these genres!</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>drawing/">See more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        </div>
    </main>

<?php
include_once 'footer.php';
