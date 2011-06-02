<table>
    <tr><td>
        <h3 class="cufon1">Past sponsors</h3>
    </td></tr>
    <tr><td style="margin: 0px 0px 0px 0px; border: none;"><hr></td></tr>
    <tr><td></td></tr>
    <tr><td>
        <!--
        jCarousel skin stylesheet
        -->
        <link rel="stylesheet" type="text/css" href="res/carousel/sponsor_skin.css"/>

        <script type="text/javascript">

        // Credits: Robert Penners easing equations (http://www.robertpenner.com/easing/).
        jQuery.easing['BounceEaseOut'] = function(p, t, b, c, d) {
                if ((t/=d) < (1/2.75)) {
                        return c*(7.5625*t*t) + b;
                } else if (t < (2/2.75)) {
                        return c*(7.5625*(t-=(1.5/2.75))*t + .75) + b;
                } else if (t < (2.5/2.75)) {
                        return c*(7.5625*(t-=(2.25/2.75))*t + .9375) + b;
                } else {
                        return c*(7.5625*(t-=(2.625/2.75))*t + .984375) + b;
                }
        };

        function sponsorcarousel_initCallback(carousel)
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
            jQuery('#sponsorcarousel').jcarousel({
                easing: 'BounceEaseOut',
                animation: 1000,
                auto: 2,
                wrap: 'circular',
                scroll: 1,
                visible: 1,
                buttonNextHTML: null,
                buttonPrevHTML: null,
                initCallback: sponsorcarousel_initCallback
            });
        });

        </script> 

        <ul id="sponsorcarousel" class="jcarousel-skin-sponsor">
            <li><div><a target="_blank" href="http://www.careerlauncher.com/"><img src="images/sponsorcarousel/cl.png" alt="Career Launcher"/></a></div></li>
            <li><div><a target="_blank" href="http://www.futuregenerali.in/"><img src="images/sponsorcarousel/fg.png" alt="Future Generali"/></a></div></li>
            <li><div><a target="_blank" href="http://www.kyrion.in/"><img src="images/sponsorcarousel/kyrion.png" alt="Kyrion"/></a></div></li>
        </ul>
    </td></tr>
</table>