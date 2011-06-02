<table>
    <tr><td>
        <h3 class="cufon1">Updates</h3>
    </td></tr>
    <tr><td style="margin: 0px 0px 0px 0px; border: none;"><hr></td></tr>
    <tr><td></td></tr>
    <tr><td>
        <!--
        jCarousel skin stylesheet
        -->
        <link rel="stylesheet" type="text/css" href="res/carousel/updates_skin.css"/>

        <script type="text/javascript">

        function updatescarousel_initCallback(carousel)
        {
            // Disable autoscrolling if the user clicks the prev or next button.
            carousel.buttonNext.bind('click', function() {
                carousel.startAuto(0);
            });
        
            carousel.buttonPrev.bind('click', function() {
                carousel.startAuto(0);
            });
        
            // Pause autoscrolling if the user moves with the cursor over the clip.
            carousel.clip.hover(function() {
                carousel.stopAuto();
            }, function() {
                carousel.startAuto();
            });
        };
        
        jQuery(document).ready(function() {
            jQuery('#updatescarousel').jcarousel({
                animation: 'slow',
                auto: 4,
                wrap: 'last',
                scroll: 1,
                visible: 1,
                buttonNextHTML: null,
                buttonPrevHTML: null,
                vertical: true,
                initCallback: updatescarousel_initCallback
            });
        });

        </script> 

        <ul id="updatescarousel" class="jcarousel-skin-updates">
            <li><a href="index.php?p=mmm"><div class="cufon1 update">
                <h3>Event description for Maths Maze &amp; Masti updated</h3>
                Maths Maze &amp; Masti is a fun-filled event of 4 rounds which
                will test the MQ (Masti Quotient) of the ...
            </div></a></li>
            <li><a href="index.php?p=simplex"><div class="cufon1 update">
                <h3>Event description for Simplex updated</h3>
                Simplex is a programming contest which proves that all
                programming is just mathematics.
                Its questions are all pertaining to mathematical ...
            </div></a></li>
            <li><a href="index.php?sponsors"><div class="cufon1 update">
                <h3>Sponsorship Brochure available</h3>
                Our brochure is now available for download. Companies
                interested in sponsoring can see the ...
            </div></a></li>
        </ul>
    </td></tr>
</table>