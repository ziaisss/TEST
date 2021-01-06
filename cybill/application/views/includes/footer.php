<!-- footer start -->

    <footer class="footerSec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="/"><img src="<?= base_url()?>assets/images/logo.png" alt="-" class="img-fluid lcdImg" /></a>
                    <p>We pride ourselves on helping industry’s top-grade brands in leaving a mark in the digital world
                        with our innovative digital execution of branding services.</p>
                </div>
                <div class="col-md-2">
                    <h3>QUICK LINKS</h3>
                    <ul>
                        <li><a href="">About</a></li>
                        <li><a href="">Our Approach</a></li>
                        <li><a href="">Our Work</a></li>
                        <li><a href="">How It Works</a></li>
                        <li><a href="">Testimonials</a></li>
                        <li><a href="">Packages</a></li>
                    </ul>
                    <h3>CONNECTIVITY</h3>
                    <ul>
                        <li><a href="">Our Blogs</a></li>
                        <li><a href="">Portfolio</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>SOLUTIONS</h3>
                    <ul>
                        <li><a href="">UI/UX Design</a></li>
                        <li><a href="">Web Development</a></li>
                        <li><a href="">E-Commerce</a></li>
                        <li><a href="">Web Applications</a></li>
                        <li><a href="">Email Marketing</a></li>
                        <li><a href="">SEO</a></li>
                        <li><a href="">SMM</a></li>
                        <li><a href="">Google Adwords</a></li>
                        <li><a href="">Digital Marketing</a></li>
                        <li><a href="">Branding</a></li>
                        <li><a href="">Animations</a></li>
                        <li><a href="">Mobile Applications</a></li>
                    </ul>
                </div>
                <div class="col-md-2">
                    <h3>CONTACT & LEGAL</h3>
                    <ul>
                        <li><a href="">Privacy Policy</a></li>
                        <li><a href="">Terms & Conditions</a></li>
                        <li><a href="">Sitemap</a></li>
                        <li><a href="">Contact Us</a></li>
                    </ul>
                    <h3>SOCIAL</h3>
                    <ul class="socialBoxfooter">
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>

                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>CONTACT US</h3>
                    <ul class="infoBoxfooter">
                        <li><a href=""><img src="<?= base_url()?>assets/images/footerenvelope.png" alt="-">info@cybilldigital.com</a></li>
                        <li><a href=""><img src="<?= base_url()?>assets/images/footerphone.png" alt="-">559-890-0341</a></li>
                        <li class="addr"><a href=""><img src="<?= base_url()?>assets/images/mapfooter.png" alt="-">2727 N Grove, DR Ste 115,
                                Fresno, CA, 93727, USA</a></li>
                        <li><a href=""><img src="<?= base_url()?>assets/images/footerchaticon.png" alt="-">Live Chat</a></li>
                    </ul>
                    <h3>SECURED</h3>
                    <img src="<?= base_url()?>assets/images/payment.png" alt="-">
                </div>
            </div>


        </div>
        <div class="copybox">
            <p><span>© 2021 Cybill Digital. All Rights Reserved</span>Disclaimer: The logo, name and graphics of Cybill
                Digital and its products & services are the trademarks of Cybill Digital. All other company names, brand
                names, trademarks and logos mentioned on this website are the property of their respective owners and do
                not constitute or imply endorsement, sponsorship or recommendation thereof by Cybill Digital and do not
                constitute or imply endorsement, sponsorship or recommendation of Cybill Digital by the respective
                trademark owner.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })

            // var url      = window.location.pathname;  
            var url = $(location).attr('href'),
            parts = url.split("/"),
            last_part = parts[parts.length-1].replace(/[^a-z0-9\s]/gi, ' ').replace(/[_\s]/g, ' ');

            if(last_part == 'home' || last_part == ''){
                $('.heading_home').show();
            }else{
                $('.heading_home').hide();
                $('.heading').html(last_part.toUpperCase());
            }

            console.log(last_part);

            
        });
    </script>

      
<script type="text/javascript">
    var allPanels = $('.accordion > .quest-inner').hide();

$('.accordion > .quest-section > a').click(function() {

if($('.accordion > .quest-section > a').hasClass("active")){

$('.accordion > .quest-section > a').removeClass("active");
allPanels.slideUp();

}
else{
  
$(this).parent().next().slideDown();
$(this).addClass("active");

}

return false;
});




</script>
</body>

</html>