<?php
include_once '../header.php';
?>


    <section class="container">
        <h2 class="text-center heading my-4 p-2">Color Palette Project</h2>
        <div class="justify-content-center row">
            <div class="col-md-6">
                <a href="<?=ROOT_URI?>colorpalette/" target="_blank"><img class="img-fluid" src="<?=ROOT_URI?>images/color-desktop.png" alt="color palette website cross devices"/></a>
            </div>
        </div>
        <div class="py-4">
            <div class="col-10 offset-1 rounded bg-grey py-2 red-border-y">
                <div class="row align-items-start m-2 text-center">
                    <div class="col-md-6">
                        <h4>Languages</h4>
                        <div>Typescript</div>
                        <div>CSS</div>
                        <div>API</div>
                    </div>
                    <div class="col-md-6">
                        <h4>Technology</h4>
                        <div>Angular</div>
                        <div>Bootstrap 4</div>
                    </div>
                </div>
            </div>
            <div class=" mt-5">
                <h4 class="text-center text-wide font-weight-bold">Details</h4>
                <p>This project is a paired school project. Each person in the group makes the database in JSON format, and then give it to the other person to make an application in Angular.</p>
                <p>The API was made with PHP. The data only loads when the authorization code is provided, which is done in the backend. The color code from the API is then used to provide an example of how to use the colors.</p>
            </div>
            <div class="text-right">
                <a class="button-light p-1" href="<?=ROOT_URI?>colorpalette/">See project</a>
            </div>
        </div>
    </section>




<?php
include_once '../footer.php';
