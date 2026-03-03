<!-- PREMIUM FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
/* ================= PREMIUM TYPOGRAPHY ================= */
.premium-eyebrow{
    font-family: 'Inter', sans-serif;
    font-size:12px;
    letter-spacing:3px;
    color:#c9a227;
    font-weight:600;
    text-transform:uppercase;
}

.premium-heading{
    font-family:'Playfair Display', serif;
    font-size:44px;
    font-weight:700;
    color:#111;
    line-height:1.2;
}

.premium-heading span{
    color:#c9a227;
}

.premium-subheading{
    font-family:'Playfair Display', serif;
    font-size:26px;
    font-weight:600;
    color:#111;
}

.premium-body{
    font-family:'Inter', sans-serif;
    font-size:18px;
    line-height:1.9;
    color:#2f2f2f;
    font-weight:500;
}

.gold-divider{
    width:70px;
    height:3px;
    background:#c9a227;
    margin:20px 0 30px;
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