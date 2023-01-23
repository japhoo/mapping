<footer id="footer" class="footer">

    <div class="footer-newsletter">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h4>Our Newsletter</h4>
                    <p>Get first hand reports about our updates and services directly to your email.</p>
                </div>
                <div class="col-lg-6">
                    <form id="NewsLetter">
                        <input type="email" name="email">
                        <button id="btn12" type="button" onclick="submitForm('btn12', 'btn22', 'NewsLetter','Successfully subscribed')" class="btn btn-primary">Subscribe</button>
                        <button id="btn22" type="button" class="loading btn btn-warning">Sending....</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="#" class="d-flex align-items-center">
                        <img style="height:90px;margin-top:-25px" src="assets/img/logo.png" alt="">
                    </a>
                    <p><?= $wn ?> is an automatic online investment platform established by a team of professional traders focusing mainly on crypto currency trading over multiple exchanges and market and real estate investment</p>
                    <br>
                    <a href="https://play.google.com/store/apps/details?id=com.visiontradeinvestment.vision_ti" target="_blank">
                        <img style="height:40px; width:100px" src="store.png">
                    </a>
                    <!-- <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div> -->
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="about">About us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#services">Our Services</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#contact">Contact Us</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="policy">Privacy Policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4><?= $wn ?></h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="faq">FAQ</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#values">How it Works</a></li>
                        <li><i class="bi bi-chevron-right"></i> <a href="#about">Who we are</a></li>
                        <?php
                        if ($auth->countall1('testimony') > 0) {
                        ?>
                            <li><i class="bi bi-chevron-right"></i> <a href="#testimonials">Testimonials</a></li>
                        <?php } ?>
                        <li><i class="bi bi-chevron-right"></i> <a href="rules">Rules of Investment</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>
                        <!-- A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br> -->

                        <?php
                        if ($auth->Web('phone') != "") {
                        ?>
                            <strong>Phone:</strong> <?= $auth->Web('phone') ?><br>
                        <?php } ?>
                        <strong>Email:</strong> <?= $auth->Web('email') ?><br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <div class="container" style="margin-bottom:40px">
        <div class="copyright">
            Copyright <strong><span><?= $wn ?></span></strong>. &copy; <?= date('Y') ?> All Rights Reserved.<br>
            <b>Registered in England No. 14037425. 14 clerkewell Green London England EC1R 0DP</b>
        </div>
    </div>
</footer>
<style>
    .float {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 70px;
        left: 40px;
        background-color: #25d366;
        color: #FFF;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 2px 2px 3px #999;
        z-index: 100;
    }

    .my-float {
        margin-top: 16px;
    }
</style>
<a href="<?= $auth->Web('wa') ?>" class="float" target="_blank">
    <i class="fa fa-whatsapp my-float"></i>
</a>

<div style="position:fixed;top:0px;right:35%;z-index:999999;" id="gtranslate_wrapper">
    <?php
    include 'includes/translate.php';
    ?>
</div>
<script src="//code.tidio.co/77t99lu5zqjahwosinluzql0dassozyh.js" async></script>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/js/jquery.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<script src="izitoast/js.js"></script>
<script src="js.js"></script>