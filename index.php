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
                        <p>I'm Ngoc To (Jade), a <span class="font-weight-bold">Front-End web developer</span> with Design and Art background.</p>
                    </div>
                </div>
            </div>
            <div class="bg-grey-no-hover">
                <div class="container text-center py-3">
                    <h2 class="pb-4"><i class="fas fa-code"></i> My skills</h2>
                    <p>
                        <span class="mx-4 text-hover">HTML</span>
                        <span class="mx-4 text-hover">CSS</span>
                        <span class="mx-4 text-hover">JavaScript</span>
                    </p>
                    <p>
                        <span class="mx-4 text-hover">Bootstrap</span>
                        <span class="mx-4 text-hover">SASS</span>
                    </p>
                    <p>
                        <span class="mx-4 text-hover">PHP</span>
                        <span class="mx-4 text-hover">ASP.NET</span>
                        <span class="mx-4 text-hover">Oracle</span>
                        <span class="mx-4 text-hover">MySQL</span>
                    </p>
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
                            <a href="<?=ROOT_URI?>coding/hospital.php"><img class="img-fluid" src="<?=ROOT_URI?>images/hospital-desktop.png" alt="hospital website homepage"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left">Hospital Project</h3>
                            <p>The project is based on a real hospital website. My team and I researched the needs of the hospital and what they lack. We cooperated with UX Design and built the features accordingly...</p>
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
                            <h3 class="py-2 text-center text-md-left">Social Network Project</h3>
                            <p>My team decided to build a social media application with cool targeted features for students. We took the inspiration from facebook, and worked together on the things that would be useful especially for students...</p>
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
                            <a href="coding/<?=ROOT_URI?>animation.php"><img class="img-fluid" src="<?=ROOT_URI?>images/animation.jpg" alt="animation homepage"/></a>
                        </div>
                        <div class="col-md-7">
                            <h3 class="py-2 text-center text-md-left">CSS Project</h3>
                            <p>The project mainly used pure CSS for the transition and animation effect. LESS was used for compatibility across browsers.</p>
                            <div class="text-right">
                                <a class="button-light p-1" href="<?=ROOT_URI?>coding/animation.php">Details</a>
                                <a class="button-light p-1" href="http://jadeto.com/animation">See project</a>
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