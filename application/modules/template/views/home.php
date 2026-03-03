<?php include(APPPATH . 'modules/home/views/why.php'); ?>

<!-- precious gems start -->

<style>
  .precious-header {
    max-width: 980px;
    margin: 0 auto 20px;
    text-align: center;
  }

  .precious-tag {
    display: inline-block;
    font-size: 12px;
    letter-spacing: 3px;
    font-weight: 500;
    color: #b89b5e;
    margin: 40px 0 14px;
  }

  .precious-title {
    font-size: 42px;
    font-weight: 600;
    letter-spacing: 1px;
    color: #111;
    margin-bottom: 18px;
  }

  .precious-divider {
    width: 70px;
    height: 2px;
    margin: 0 auto 30px;
    background: linear-gradient(90deg, #c9a14a, #f1d27a, #c9a14a);
  }

  .luxury-gem-desc {
    font-size: 17px;
    line-height: 1.9;
    color: #333;
    margin-bottom: 18px;
  }

  .luxury-gem-desc.muted {
    color: #555;
  }

  .precious-header strong {
    font-weight: 500;
  }

  .luxury-gem-note {
    font-size: 14px;
    color: #777;
    margin-top: 26px;
    font-style: italic;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .precious-title {
      font-size: 30px;
    }

    .luxury-gem-desc {
      font-size: 16px;
    }
  }
</style>

<div class="precious-header px-4">
  <span class="precious-tag">AUTHENTIC • CERTIFIED • TIMELESS</span>

  <h2 class="precious-title">Precious Gemstones</h2>

  <div class="precious-divider"></div>

  <p class="luxury-gem-desc">
    At <strong>Khanna Gems </strong>, we curate a refined collection of
    <strong>certified natural gemstones</strong>.
  </p>

  <p class="luxury-gem-desc muted">
    Our selection includes Ruby, Sapphire, Emerald, and other rare treasures —
    each hand-selected for exceptional purity, brilliance, and astrological excellence,
    crafted for those who value authenticity and timeless luxury.
  </p>

  <p class="luxury-gem-note">
    Gemstone prices vary depending on carat weight, quality, origin, and certification.
  </p>
</div>
<!-- Precious Gems Collection -->
<?php include(APPPATH . 'modules/home/views/precious.php'); ?>



<!-- ================= SEMI PRECIOUS GEMS SECTION ================= -->
<style>
  .luxury-gem-section {
    padding: 80px 0 90px;
    background: #fff;
  }

  /* Center container */
  .luxury-gem-header {
    max-width: 1100px;
    margin: 0 auto;
  }

  /* TAG */
  .luxury-gem-tag {
    display: inline-block;
    font-size: 12px;
    letter-spacing: 4px;
    font-weight: 600;
    color: #b89b5e;
    margin-bottom: 18px;
  }

  /* TITLE */
  .luxury-gem-title {
    font-size: 46px;
    font-weight: 600;
    letter-spacing: 5px;
    color: #111;
    margin-bottom: 16px;
    text-transform: uppercase;
  }

  /* DIVIDER */
  .luxury-gem-divider {
    width: 80px;
    height: 2px;
    background: linear-gradient(to right,
        transparent,
        #c9a14a,
        #f3d37a,
        #c9a14a,
        transparent);
    margin: 0 auto 34px;
  }

  /* DESCRIPTION */
  .luxury-gem-desc {
    font-size: 18px;
    line-height: 1.9;
    color: #444;
    margin-bottom: 18px;
  }

  /* SECONDARY TEXT */
  .luxury-gem-desc.muted {
    color: #666;
  }

  /* NOTE */
  .luxury-gem-note {
    margin-top: 26px;
    font-size: 14px;
    color: #777;
    font-style: italic;
    letter-spacing: .5px;
  }

  /* RESPONSIVE */
  @media(max-width: 768px) {

    .luxury-gem-section {
      padding: 10px 0;
    }

    .luxury-gem-title {
      font-size: 30px;
      letter-spacing: 3px;
    }

    .luxury-gem-desc {
      font-size: 16px;
      line-height: 1.8;
    }
  }
</style>

<div class="container-fluid luxury-gem-section">

  <div class="text-center luxury-gem-header px-4">

    <span class="luxury-gem-tag">
      AUTHENTIC • CERTIFIED • TIMELESS
    </span>

    <h2 class="luxury-gem-title">
      Semi-Precious Gems
    </h2>

    <div class="luxury-gem-divider"></div>

    <p class="luxury-gem-desc">
      At <strong>Khanna Gems</strong>, our semi-precious gemstone collection
      features carefully curated natural stones such as Amethyst, Topaz, Garnet,
      Peridot, Turquoise, and other timeless treasures.
    </p>

    <p class="luxury-gem-desc muted">
      Each gemstone is selected for its natural beauty, durability, and metaphysical
      significance — offering elegance, energy, and versatility for everyday wear
      and spiritual use.
    </p>

    <p class="luxury-gem-note">
      Prices vary depending on carat weight, quality, cut, and origin of the gemstone.
    </p>

  </div>

</div>


<?php include(APPPATH . 'modules/home/views/semiprecious.php'); ?>

<!-- ================= END SEMI PRECIOUS SECTION ================= -->


<!-- BRACELET SECTION -->

<div class="text-center mb-2 bracelet-heading">
  <span class="bracelet-eyebrow">HANDCRAFTED • NATURAL • TIMELESS</span>

  <h2 class="section-title">
    Our <span>Premium</span> Bracelets
  </h2>

  <div class="bracelet-divider"></div>

  <p class="section-subtitle mt-3">
    Handcrafted gemstone bracelets designed for healing, balance,
    and timeless luxury.
  </p>
</div>
<style>
  /* HEADING WRAP */
  .bracelet-heading {
    max-width: 900px;
    margin: auto;
    padding: 100px 0px 0px;
  }

  /* EYEBROW TEXT */
  .bracelet-eyebrow {
    display: inline-block;
    font-size: 12px;
    letter-spacing: 4px;
    font-weight: 600;
    color: #d4af37;
    margin-bottom: 14px;
  }

  /* TITLE */
  .section-title {
    font-size: 42px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #111;
  }

  .section-title span {
    background: linear-gradient(135deg, #d4af37, #f3d77b);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  /* DIVIDER */
  .bracelet-divider {
    width: 80px;
    height: 3px;
    margin: 18px auto 22px;
    background: linear-gradient(to right, #d4af37, #f3d77b, #d4af37);
    border-radius: 3px;
  }

  /* SUBTITLE */
  .section-subtitle {
    font-size: 16px;
    color: #666;
    line-height: 1.7;
  }

  /* MOBILE */
  @media(max-width:768px) {
    .bracelet-heading {
      padding: 30px 10px;
    }

    .section-title {
      font-size: 30px;
    }
  }
</style>

<?php include(APPPATH . 'modules/home/views/bracelet.php'); ?>
<!-- CATALOG HEADER SECTION -->
<section class="catalog-header-section">
  <div class="container">

    <div class="catalog-header-content">
      <div class="catalog-tag">EXPLORE BY CATEGORY</div>
      <h2 class="catalog-title">GEM CATALOG</h2>
      <p class="catalog-desc">
        Discover our curated gemstone catalog featuring certified precious, semi-precious, astrological, and spiritual
        gemstones — sourced for authenticity, beauty, and astrological excellence.
      </p>
    </div>

  </div>
</section>

<style>
  /* ================= CATALOG HEADER SECTION ================= */
  .catalog-header-section {
    padding: 80px 20px 0px;
    background: linear-gradient(135deg, #f4f4f4 20%, #fff 80%);
    box-shadow: 0px 25px 50px rgba(0, 0, 0, 0.1);
  }

  .catalog-header-content {
    text-align: center;
    max-width: 900px;
    margin: auto;
  }

  .catalog-tag {
    font-size: 14px;
    letter-spacing: 4px;
    font-weight: 600;
    color: #b89b5e;
    margin-bottom: 20px;
    text-transform: uppercase;
  }

  .catalog-title {
    font-size: 52px;
    font-weight: 700;
    letter-spacing: 5px;
    color: #111;
    margin-bottom: 20px;
    transition: transform 0.3s ease-in-out, color 0.3s ease;
  }

  .catalog-title:hover {
    transform: scale(1.05);
    color: #c9a14a;
  }

  .catalog-desc {
    max-width: 900px;
    margin: auto;
    font-size: 18px;
    line-height: 1.8;
    color: #555;
    opacity: 0.9;
    transition: color 0.3s ease;
  }

  .catalog-desc:hover {
    color: #444;
  }

  /* ================= RESPONSIVE ================= */
  @media (max-width: 768px) {
    .catalog-title {
      font-size: 30px;
      letter-spacing: 3px;
    }

    .catalog-desc {
      font-size: 16px;
      line-height: normal;
    }
  }
</style>

<?php include(APPPATH . 'modules/home/views/catalog.php'); ?>