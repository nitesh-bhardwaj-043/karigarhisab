<!-- ================= FOOTER ================= -->
<footer class="gems-footer">

    <!-- ================= FOOTER TOP ================= -->
    <div class="gems-footer-top">
        <div class="container-fluid px-3">
            <div class="row">

                <!-- COLUMN 1 : COMPANY INFO -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Ananya Gems & Jewels</h4>
                    <p class="footer-text"><strong>Bijendra Kumar</strong></p>
                    <p class="footer-text">
                        S-6, 7, 1258 Goswami Bhawan,<br>
                        Kho Walon Ka Chowk, Gopal Ji Ka Rasta,<br>
                        Johari Bazar, Jaipur – 03
                    </p>
                    <p class="footer-text">
                        +91 99293 57718<br>
                        +91 78770 40552
                    </p>
                    <p class="footer-text">bijendra8181@gmail.com</p>
                </div>

                <!-- COLUMN 2 : QUICK LINKS -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="<?= site_url('') ?>">Home</a></li>
                        <li><a href="<?= site_url('policy') ?>">Privacy Policy</a></li>
                        <li><a href="<?= site_url('about') ?>">About Us </a></li>
                        <li><a href="<?= site_url('how') ?>">How To Order</a></li>
                    </ul>
                </div>

                <!-- COLUMN 3 : BIRTHSTONES -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">Birthstones</h4>
                    <ul class="footer-links">
                        <li><a href="<?= site_url('gem/gem43825368') ?>">January – Garnet</a></li>
                        <li><a href="<?= site_url('semi-precious-gems/amethyst') ?>">February – Amethyst</a></li>
                        <li><a href="<?= site_url('gem/gem13115977') ?>">March – Aquamarine</a></li>
                        <li><a href="<?= site_url('gem/gem23175534') ?>">April – Diamond</a></li>
                        <li><a href="<?= site_url('gem/gem51452571') ?>">May – Emerald</a></li>
                        <li><a href="<?= site_url('gem/gem84251561') ?>">June – Pearl</a></li>
                        <li><a href="<?= site_url('gem/gem57232359') ?>">July – Ruby</a></li>
                        <li><a href="<?= site_url('gem/gem28774618') ?>">August – Peridot</a></li>
                        <li><a href="<?= site_url('gem/gem86415463') ?>">September – Sapphire</a></li>
                        <li><a href="<?= site_url('gem/gem49540698') ?>">October – Opal</a></li>
                        <li><a href="<?= site_url('gem/gem48788134') ?>">November – Topaz</a></li>
                        <li><a href="<?= site_url('gem/gem14780736') ?>">December – Turquoise</a></li>
                    </ul>
                </div>

                <!-- COLUMN 4 : NAVRATNAS -->
                <div class="col-lg-3 col-md-6">
                    <h4 class="footer-title">The Navratnas</h4>
                    <ul class="footer-links">
                        <li><a href="<?= site_url('gem/gem57232359') ?>">Ruby (Manik)</a></li>
                        <li><a href="<?= site_url('gem/gem75551847') ?>">Pearl (Moti)</a></li>
                        <li><a href="<?= site_url('gem/gem91917821') ?>">Red Coral (Moonga)</a></li>
                        <li><a href="<?= site_url('gem/gem51452571') ?>">Emerald (Panna)</a></li>
                        <li><a href="<?= site_url('gem/gem35428756') ?>">Yellow Sapphire (Pukhraj)</a></li>
                        <li><a href="<?= site_url('gem/gem90951994') ?>">Hessonite (Gomed)</a></li>
                        <li><a href="<?= site_url('gem/gem42923260') ?>">Cat’s Eye (Lehsunia)</a></li>
                        <li><a href="<?= site_url('gem/gem23175534') ?>">Diamond (Heera)</a></li>
                        <li><a href="<?= site_url('gem/gem49540698') ?>">Opal</a></li>

                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- ================= FOOTER IMAGE STRIP ================= -->
    <div class="footer-image-strip">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start">
                    <p class="footer-strip-text">
                        © 2025 Ananya Gems & Jewels. All Rights Reserved.
                    </p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="footer-strip-text">
                        Designed & SEO by <strong>TechElevatr</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>

</footer>

<!-- ================= FOOTER STYLES ================= -->
<style>
    .gems-footer {
        background: #eef4f8;
        font-family: "Playfair Display", Georgia, serif;
        color: #1f2d35;
    }

    /* TOP */
    .gems-footer-top {
        padding: 70px 0 55px;
    }

    /* TITLES */
    .footer-title {
        font-size: 22px;
        font-weight: 600;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 26px;
        position: relative;
        color: #000;
    }

    .footer-title::after {
        content: "";
        width: 48px;
        height: 2px;
        background: #c9a14a;
        position: absolute;
        left: 0;
        bottom: -12px;
    }

    /* LINKS */
    .footer-links {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-links li {
        margin-bottom: 14px;
    }

    .footer-links li a {
        font-size: 18px;
        color: #1f2d35;
        text-decoration: none;
        transition: .3s ease;
    }

    .footer-links li a:hover {
        color: #7a9bb8;
        padding-left: 6px;
    }

    /* TEXT */
    .footer-text {
        font-size: 18px;
        line-height: 1.75;
        margin-bottom: 10px;
    }

    .footer-text strong {
        font-size: 20px;
    }

    /* IMAGE STRIP */
    .footer-image-strip {
        background: url('<?= base_url("assets/images/jaipur.jpeg"); ?>') repeat-x center bottom;
        background-size: auto 100%;
        min-height: 260px;
        display: flex;
        align-items: flex-end;
        padding: 40px 20px;
        position: relative;
    }

    .footer-image-strip::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, .35);
    }

    .footer-image-strip>* {
        position: relative;
        z-index: 1;
    }

    .footer-strip-text {
        font-size: 22px;
        color: #fff;
        text-shadow: 0 3px 8px rgba(0, 0, 0, .7);
    }

    .footer-strip-text strong {
        color: #ffd369;
    }

    /* MOBILE */
    @media(max-width:768px) {
        .footer-title {
            font-size: 20px;
        }

        .footer-links li a,
        .footer-text {
            font-size: 16px;
        }

        .footer-strip-text {
            font-size: 14px;
            text-align: center;
        }
    }
</style>


<div class="floating-icons">
    <a href="tel:+919929357718" class="float-btn call-btn">
        <i class="fa fa-phone"></i>
    </a>

    <a href="https://wa.me/917877040552" target="_blank" class="float-btn whatsapp-btn">
        <i class="fa-brands fa-whatsapp"></i>
    </a>
</div>



<style>
    /* ================================
   LEFT SIDE FLOATING ICONS (BIG)
================================ */

    .floating-icons {
        position: fixed;
        left: 22px;
        bottom: 30px;
        z-index: 99999;
        display: flex;
        flex-direction: column;
        gap: 18px;
    }

    /* Bigger Buttons */
    .float-btn {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 30px;
        /* bigger icon */
        text-decoration: none;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.45);
        transition: all 0.3s ease;
    }

    .float-btn i {
        color: #ffffff !important;
    }

    .float-btn:hover i {
        color: #ffffff !important;
    }

    /* Call Button - Red */
    .call-btn {
        background: #9c4340ff;
    }

    .call-btn:hover {
        background: #b80500;
        transform: scale(1.12);
    }

    /* WhatsApp Button - Green */
    .whatsapp-btn {
        background: #52aa71ff;
    }

    .whatsapp-btn:hover {
        background: #1ebe5d;
        transform: scale(1.12);
    }

    /* Mobile Optimization */
    @media (max-width: 576px) {
        .float-btn {
            width: 58px;
            height: 58px;
            font-size: 26px;
        }
    }
</style>

<!-- Scripts -->
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->

<script src="<?= base_url() ?>assets/js/jquery.mobile.customized.min.js"></script>
<script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/js/camera.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap-select.min.js"></script>
<script src="<?= base_url() ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
<script src="<?= base_url() ?>assets/js/scripts.js"></script>