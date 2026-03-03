<!-- BOOTSTRAP CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- FONT AWESOME -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

<style>
    html,
    body {
        margin: 0;
        padding: 0;
        background: #f9f9f9;
        font-family: 'Segoe UI', sans-serif;
    }

    /* ================= TOP HEADER ================= */
    .top-header {
        background: linear-gradient(135deg, #0c1a2d, #1a3a5f);
        color: #fff;
        padding: 10px 0;
        font-size: 14px;
    }

    .top-header i {
        color: #d4af37;
        margin-right: 6px;
    }

    /* ================= NAVBAR ================= */
    .navbar {
        background: #ffffff;
        box-shadow: 0 8px 25px rgba(0, 0, 0, .08);
    }

    /* LOGO */
    .navbar-brand img {
        height: 60px;
    }

    .navbar-brand span {
        font-weight: 700;
        letter-spacing: 1px;
    }

    /* NAV LINKS */
    .navbar-nav {
        flex-wrap: wrap;
        justify-content: center;
    }

    .nav-link {
        font-weight: 600;
        color: #0c1a2d !important;
        padding: 10px 12px !important;
        font-size: 14px;
        white-space: nowrap;
    }

    .nav-link:hover,
    .nav-link.active {
        color: #d4af37 !important;
    }

    /* DROPDOWN */
    .dropdown-menu {
        border: none;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .12);
    }

    .dropdown-item {
        font-size: 14px;
    }

    .dropdown-item:hover {
        background: #f7ecdf;
        color: #1d1c1c;
    }

    /* ================= MOBILE MENU BUTTON ================= */
    .navbar-toggler {
        border: none;
        font-size: 26px;
        color: #0c1a2d;
    }

    .navbar-toggler:focus {
        box-shadow: none;
    }

    /* ================= RESPONSIVE ================= */
    @media(max-width:1200px) {
        .navbar-brand img {
            height: 50px;
        }
    }

    @media(max-width:991px) {
        .navbar-nav {
            text-align: left;
            padding: 10px 0;
        }

        .nav-link {
            padding: 10px 15px !important;
        }
    }
</style>
</head>

<body>

    <?php
    $ci = &get_instance();
    $segment = $ci->uri->segment(1);
    ?>

    <!-- ================= TOP HEADER ================= -->
    <div class="top-header">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start">
            <div>
                <i class="fas fa-phone"></i> +91 78770 40552
                &nbsp;&nbsp;
                <i class="fas fa-envelope"></i> info@ananyagemsandjewels.com
            </div>
            <div class="mt-2 mt-md-0">
                Welcome to <span style="color:#d4af37;font-weight:600;">Ananya Gems & Jewels</span> – Biggest Gemstone Brand
            </div>
        </div>
    </div>

    <!-- ================= NAVBAR ================= -->
    <nav class="navbar navbar-expand-lg">
        <div class="container px-4">

            <!-- LOGO -->
            <a class="navbar-brand d-flex align-items-center" href="<?= site_url(); ?>">
                <img src="<?= base_url('assets/images/logoo.png') ?>" alt="Ananya Gems & Jewels">
                <span class="ms-2">Ananya <span style="color:#d4af37;">GEMS</span></span>
            </a>

            <!-- MOBILE BUTTON -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav">
                <i class="fas fa-bars"></i>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav mx-auto">

                    <li class="nav-item">
                        <a class="nav-link <?= ($segment == '') ? 'active' : ''; ?>" href="<?= site_url(); ?>">
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($segment == 'precious') ? 'active' : ''; ?>" href="<?= site_url('precious'); ?>">
                            Precious Gemstones
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($segment == 'semiprecious') ? 'active' : ''; ?>" href="<?= site_url('semiprecious'); ?>">
                            Semi Precious Gemstones
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($segment == 'braclet') ? 'active' : ''; ?>" href="<?= site_url('braclet'); ?>">
                            Braclet
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($segment == 'contact') ? 'active' : ''; ?>" href="<?= site_url('contact'); ?>">
                            Contact Us
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link <?= ($segment == 'lab') ? 'active' : ''; ?>" href="<?= site_url('lab'); ?>">
                            Ananya Gems Lab
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>