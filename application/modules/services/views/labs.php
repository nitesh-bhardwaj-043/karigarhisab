<!-- PREMIUM FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<div class="lab-wrapper">

    <div class="lab-container">

        <!-- ================= LEFT SIDEBAR ================= -->
        <div class="lab-sidebar">

            <!-- REPORT VERIFICATION -->
            <div class="sidebar-box">
                <div class="sidebar-title">
                    🔍 Report Verification
                </div>

                <form method="post" id="certificateform" onsubmit="return false">
                    <label>Certificate No. (AGL/...)</label>
                    <input type="text" id="c_no" name="c_no" placeholder="Enter Certificate Number">

                    <label>Weight (1.00 gms)</label>
                    <input type="text" id="weight" name="weight" placeholder="Enter Weight">

                    <div id="resultcertificate" class="mt-3"></div>

                    <button id="submitcertificate" type="submit">Submit</button>
                </form>
            </div>

            <!-- LATEST NEWS -->
            <div class="sidebar-box mt-4">
                <div class="sidebar-title">
                    📩 Latest News & Events
                </div>
                <p class="sidebar-text">
                    Updates and announcements from Ananya Gems Lab.
                </p>
            </div>

        </div>

        <!-- ================= RIGHT CONTENT ================= -->
        <div class="lab-content">

          <div class="lab-hero">
    <img src="<?= base_url('assets/images/agl1.png'); ?>" class="lab-hero-logo">
    <div class="lab-hero-text">
        <span>WELCOME TO</span>
        <h1>ANANYA Gems Testing Lab</h1>
    </div>
</div>

<style>
.lab-hero{
    display:flex;
    align-items:center;
    justify-content:center;
    gap:10px;
    flex-wrap:wrap;
    text-align:center;
    margin:20px 0;
}

.lab-hero-logo{
    height:50px;
}

.lab-hero-text span{
    display:block;
    font-size:16px;
    letter-spacing:2px;
    color:#b30000;
    font-weight:600;
}

.lab-hero-text h1{
    font-size:24px;
    margin:0;
    font-family:"Playfair Display",serif;
}

@media(max-width:480px){
    .lab-hero{
        flex-direction:column;
    }
    .lab-hero-logo{
        height:60px;
    }
    .lab-hero-text h1{
        font-size:22px;
    }
}
</style>



            <div class="lab-content-inner">

                <!-- IMAGE (YOU WILL CHANGE) -->
                <div class="lab-image">
                    <img src="<?= base_url('assets/images/lll.png'); ?>" alt="Gemstones">
                </div>

                <!-- TEXT -->
                <div class="lab-text">
                    <p>
                        Whenever we think about gemstones, the first name that comes to mind
                        is the <strong>Royal Pink City Jaipur</strong>, the global hub of
                        gemstone craftsmanship.
                    </p>

                    <p>
                        <strong>Ananya Gems Testing Lab </strong> is one of the
                        reputed gemstone testing laboratories of Jaipur, providing reliable
                        certification for precious and semi-precious gemstones.
                    </p>

                    <p>
                        Serving the gem and jewellery industry with integrity and expertise,
                        our customer network spans across India with a strong foundation of
                        trust built over the years.
                    </p>
                </div>

            </div>

        </div>

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script type="text/javascript">
    $(function() {

        $('#submitcertificate').click(function(e) {
            e.preventDefault();

            $.ajax({
                type: "POST",
                url: "<?php echo site_url('services/geturl') ?>",
                data: $("#certificateform").serialize(),
                dataType: "json",

                beforeSend: function() {
                    $('#resultcertificate').html('<p style="color:green;">Please wait...</p>');
                },

                success: function(response) {

                    $('#resultcertificate').empty();

                    if (response.status == 0) {
                        $('#resultcertificate').html(
                            "<div class='alert alert-danger'>" + response.errors + "</div>"
                        );
                    }

                    if (response.status == 1) {
                        // Open certificate page
                        window.open(
                            "https://ananyagemsandjewels.com/bills/" + response.token,
                            "_blank"
                        );
                    } else if (response.status == 2) {
                        $('#resultcertificate').html(
                            "<div class='alert alert-danger'>No certificate exists with given details.</div>"
                        );
                    }
                },

                error: function() {
                    $('#resultcertificate').html(
                        "<div class='alert alert-danger'>Server error. Please try again.</div>"
                    );
                }
            });
        });

    });
</script>


<!-- ================= STYLES ================= -->
<style>
    body {
        background: #f7ecdf;
        font-family: "Playfair Display", "Inter", "Segoe UI", sans-serif;
        color: #1f1f1f;
    }

    /* WRAPPER */
    .lab-wrapper {
        padding: 50px 0;
    }

    .lab-container {
        max-width: 1200px;
        /* wider */
        margin: auto;
        background: #fff;
        border-radius: 10px;
        display: flex;
        box-shadow: 0 12px 35px rgba(0, 0, 0, .12);
    }

    /* SIDEBAR */
    .lab-sidebar {
        width: 300px;
        /* bigger sidebar */
        background: #f7e8ee;
        border-right: 1px solid #e0c7d0;
        padding: 20px;
    }

    .sidebar-box {
        background: #fff;
        border: 1px solid #e0c7d0;
        border-radius: 8px;
        padding: 18px;
    }

    .sidebar-title {
        font-size: 22px;
        /* ⬆ bigger */
        font-weight: 700;
        color: #c40000;
        border-bottom: 1px solid #e0c7d0;
        padding-bottom: 8px;
        margin-bottom: 16px;
    }

    .verify-form label {
        font-size: 16px;
        /* ⬆ bigger */
        font-weight: 600;
        display: block;
        margin-bottom: 8px;
    }

    .verify-form input {
        width: 100%;
        padding: 12px 16px;
        border-radius: 25px;
        border: 1px solid #ccc;
        margin-bottom: 18px;
        font-size: 16px;
    }

    .verify-form button {
        width: 120px;
        padding: 10px;
        border-radius: 6px;
        border: 1px solid #999;
        background: #eee;
        font-size: 15px;
        font-weight: 600;
        cursor: pointer;
    }

    .sidebar-text {
        font-size: 15px;
        /* ⬆ bigger */
        color: #444;
        line-height: 1.7;
    }

    .mt-4 {
        margin-top: 24px;
    }

    /* CONTENT */
    .lab-content {
        flex: 1;
        padding: 30px 40px;
    }

    .lab-heading {
        font-size: 32px;
        /* ⬆ bigger heading */
        margin-bottom: 24px;
        border-bottom: 1px dashed #d8b1bd;
        padding-bottom: 14px;
        line-height: 1.3;
    }

    .lab-heading span {
        color: #c40000;
        font-weight: 700;
    }

    /* INNER CONTENT */
    .lab-content-inner {
        display: flex;
        gap: 30px;
        margin-top: 20px;
    }

    .lab-image img {
        width: 260px;
        /* ⬆ bigger image */
        border-radius: 8px;
        border: 1px solid #ddd;
    }

    /* MAIN TEXT */
    .lab-text p {
        font-size: 18px;
        /* ⬆ BIG readable text */
        line-height: 1.9;
        color: #2f2f2f;
        margin-bottom: 16px;
    }

    /* ================= IMAGE SIZE INCREASE ================= */

    /* Image container */
    .lab-image img {
        width: auto;
        /* ⬆ BIGGER IMAGE */
        max-width: auto;
        border-radius: 10px;
        border: 1px solid #ddd;
        box-shadow: 0 18px 35px rgba(0, 0, 0, .15);
    }

    /* Add spacing balance */
    .lab-content-inner {
        gap: 40px;
        /* more space between image & text */
    }

    /* On very large screens */
    @media(min-width:1200px) {
        .lab-image img {
            width: 420px;
            /* ⬆ even bigger on desktop */
        }
    }

    /* Mobile optimization */
    @media(max-width:900px) {
        .lab-image img {
            width: 100%;
            max-width: 420px;
            margin: 0 auto;
            display: block;
        }
    }

    /* RESPONSIVE */
    @media(max-width:900px) {
        .lab-container {
            flex-direction: column;
        }

        .lab-sidebar {
            width: 100%;
        }

        .lab-content-inner {
            flex-direction: column;
        }

        .lab-image img {
            width: 100%;
            max-width: 360px;
        }

        .lab-heading {
            font-size: 26px;
        }

        .lab-text p {
            font-size: 16px;
        }
    }
</style>

<style>
    /* ================= PREMIUM TYPOGRAPHY ================= */
    .premium-eyebrow {
        font-family: 'Inter', sans-serif;
        font-size: 12px;
        letter-spacing: 3px;
        color: #c9a227;
        font-weight: 600;
        text-transform: uppercase;
    }

    .premium-heading {
        font-family: 'Playfair Display', serif;
        font-size: 44px;
        font-weight: 700;
        color: #111;
        line-height: 1.2;
    }

    .premium-heading span {
        color: #c9a227;
    }

    .premium-subheading {
        font-family: 'Playfair Display', serif;
        font-size: 26px;
        font-weight: 600;
        color: #111;
    }

    .premium-body {
        font-family: 'Inter', sans-serif;
        font-size: 18px;
        line-height: 1.9;
        color: #2f2f2f;
        font-weight: 500;
    }

    .gold-divider {
        width: 70px;
        height: 3px;
        background: #c9a227;
        margin: 20px 0 30px;
    }
</style>
</head>

<body>

    <!-- ================= ABOUT SECTION ================= -->
    <section style="background:#f7ecdf; padding:100px 0;">
        <div class="container">
            <div class="row align-items-center g-5">

                <!-- IMAGE -->
                <div class="col-md-6">
                    <img src="<?= base_url('assets/images/testing.jpg'); ?>"
                        alt="Gem Testing Lab"
                        style="width:100%; border-radius:22px; box-shadow:0 20px 45px rgba(0,0,0,.12);">
                </div>

                <!-- CONTENT -->
                <div class="col-md-6">
                    <div class="premium-eyebrow">HANDCRAFTED • NATURAL • TRUSTED</div>

                    <h2 class="premium-heading mt-3">
                        About <span>Ananya Gems Lab</span>
                    </h2>

                    <div class="gold-divider"></div>

                    <p class="premium-body">
                        Established with a strong commitment to accuracy, transparency, and ethical
                        practices, <strong>Ananya Gems Lab™</strong> is a professionally managed
                        gemstone testing and certification laboratory serving jewellers, traders,
                        and individual gemstone owners across India.
                    </p>

                    <p class="premium-body mt-3">
                        Our laboratory is equipped with advanced gemological instruments and follows
                        internationally accepted testing methodologies to evaluate the identity,
                        authenticity, and quality characteristics of precious and semi-precious
                        gemstones.
                    </p>

                    <p class="premium-body mt-3">
                        Each gemstone submitted to our lab undergoes a thorough examination process
                        conducted by qualified gemologists, ensuring dependable reports that help
                        our clients make informed and confident decisions.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- ================= KNOWLEDGE SECTION ================= -->
    <section style="background:#f7ecdf; padding:90px 0;">
        <div class="container">
            <div class="row g-5">

                <!-- ITEM -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-start gap-4">
                        <img src="<?= base_url('assets/images/te.png'); ?>" width="42">
                        <div>
                            <h4 class="premium-subheading mb-3">4 C’s</h4>
                            <p class="premium-body">
                                Gemstone grading is based on the 4 C’s: Cut, Color,
                                Clarity, and Carat. Each factor plays a vital role in
                                determining the overall quality and value of a gemstone.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-start gap-4">
                        <img src="<?= base_url('assets/images/te.png'); ?>" width="42">
                        <div>
                            <h4 class="premium-subheading mb-3">Gemstone’s Mining</h4>
                            <p class="premium-body">
                                Gemstone mining is a specialized and resource-intensive
                                process involving skilled workforce, advanced equipment,
                                and geological expertise to recover gems from nature.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-start gap-4">
                        <img src="<?= base_url('assets/images/te.png'); ?>" width="42">
                        <div>
                            <h4 class="premium-subheading mb-3">Gemstone’s Properties</h4>
                            <p class="premium-body">
                                Gemstones are natural mineral crystals valued for hardness,
                                brilliance, luster, and physical properties that give them
                                lasting beauty and durability.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- ITEM -->
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-start gap-4">
                        <img src="<?= base_url('assets/images/te.png'); ?>" width="42">
                        <div>
                            <h4 class="premium-subheading mb-3">Gemstone’s Cutting</h4>
                            <p class="premium-body">
                                Precision cutting enhances brilliance and symmetry.
                                Expert craftsmanship ensures superior light performance
                                and refined aesthetic appeal.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>