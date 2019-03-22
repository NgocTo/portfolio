<?php
include_once '../header.php';
?>

    <link rel="stylesheet" type="text/css" href="style.css" />


<main id="main">
    <p class="text-center lead mt-2">Try clicking around the sky or hovering over the clouds!</p>
    <div class="page-wrapper">
        <div id="sky-wrapper">
            <div id="sun"></div>
            <div class="cloud" id="cloud1">
            </div>
            <div class="cloud" id="cloud2">
            </div>
            <div class="cloud" id="cloud3">
            </div>
        </div>
        <div id="ocean-wrapper">
            <div id="ocean"></div>
            <div id="boat-container">
                <div class="sail" id="sail1"></div>
                <div class="sail" id="sail2"></div>
                <div id="column"></div>
                <div id="draft"></div>
            </div>
            <div>
                <div id="fish-wrapper1"><div class="fish" id="fish1"><div></div></div>
                </div>
                <div id="fish-wrapper2"><div class="fish" id="fish2"><div></div></div>
                </div>
                <div id="fish-wrapper3"><div class="fish" id="fish3"><div></div></div>
                </div>
                <div id="fish-wrapper4"><div class="fish" id="fish4"><div></div></div>
                </div>
                <div id="fish-wrapper5"><div class="fish" id="fish5"><div></div></div>
                </div>
            </div>
            <img class="bubble" id="bubble1" src="images/bubble1.png" alt="bubble"/>
            <img class="bubble" id="bubble2" src="images/bubble2.png" alt="bubble"/>
            <img class="bubble" id="bubble3" src="images/bubble2.png" alt="bubble"/>
            <img class="bubble" id="bubble4" src="images/bubble1.png" alt="bubble"/>
            <img class="bubble" id="bubble5" src="images/bubble2.png" alt="bubble"/>
            <img id="weed" src="images/weed.svg" alt="seaweed"/>
        </div>
    </div>
</main>

<script src="script.js"></script>



<?php
include_once '../footer.php';
?>
