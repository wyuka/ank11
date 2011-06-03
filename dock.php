<div class="dock" id="dock">
    <script type="text/javascript">
        $(document).ready(function(){
            $('#dock').Fisheye({
                maxWidth: 50,
                items: 'a',
                itemsText: 'span',
                container: '.dock-container',
                itemWidth: 40,
                proximity: 90,
                halign : 'center'
            })
        });
    </script>
    <div class="dock-container">
        <a class="dock-item" href="index.php?p=home"><img src="images/dock/home1.png" alt="Home" /><span class="cufon1" style="font-size: 20px;">Home</span></a> 
        <a class="dock-item" href="index.php?p=about"><img src="images/dock/info.png" alt="About" /><span class="cufon1" style="font-size: 20px;">About</span></a> 
        <a class="dock-item" href="index.php?p=events"><img src="images/dock/calendar1.png" alt="Events" /><span class="cufon1" style="font-size: 20px;">Events</span></a> 
        <a class="dock-item" href="index.php?p=sponsors"><img src="images/dock/card.png" alt="Sponsors" /><span class="cufon1" style="font-size: 20px;">Sponsors</span></a> 
        <a class="dock-item" href="index.php?p=workshops"><img src="images/dock/wshop.png" alt="Workshops" /><span class="cufon1" style="font-size: 20px;">Workshops</span></a> 
        <a class="dock-item" href="index.php?p=gallery"><img src="images/dock/gallery2.png" alt="Gallery" /><span class="cufon1" style="font-size: 20px;">Gallery</span></a> 
        <a class="dock-item" href="index.php?p=hospitality"><img src="images/dock/bus.png" alt="Hospitality" /><span class="cufon1" style="font-size: 20px;">Hospitality</span></a> 
        <a class="dock-item" href="index.php?p=contact"><img src="images/dock/phone2.png" alt="Contact" /><span class="cufon1" style="font-size: 20px;">Contact</span></a> 
    </div>
</div>