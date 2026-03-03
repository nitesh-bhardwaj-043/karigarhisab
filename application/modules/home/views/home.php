<!-- PREMIUM GEM SECTION -->

<style>
  body {
    background: #f7ecdf;
    font-family: "Playfair Display", "Inter", "Segoe UI", sans-serif;
    color: #1f1f1f;
  }

  .premium-gems {
    padding: 70px 0;

  }

  .gem-card {

    border-radius: 18px;
    padding: 22px 16px;
    text-align: center;
  }

  .gem-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 18px 40px rgba(0, 0, 0, .16);
  }

  /* IMAGE HOLDER */
  .gem-image {
    height: 180px;
    /* 🔥 increased */
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .gem-image img {
    max-height: 160px;
    /* 🔥 increased */
    width: auto;
    transition: .35s ease;
  }

  .gem-card:hover img {
    transform: scale(1.08);
  }

  /* NAME */
  .gem-name {
    margin-top: 16px;
    font-size: 16px;
    font-weight: 600;
    color: #111;
  }
</style>


<div class="precious-header px-4">
  <span class="precious-tag">AUTHENTIC • CERTIFIED • TIMELESS</span>

  <h2 class="precious-title">Precious Gemstones</h2>

  <div class="precious-divider"></div>

  <p class="luxury-gem-desc">
    At <strong>Ananya Gems & Jewels</strong>, we curate a refined collection of
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





<?php
$precious = isset($precious) && is_array($precious) ? $precious : [];
?>

<?php if (!empty($precious)): ?>
  <div class="container-fluid py-5 lux-section">
    <div class="lux-particles"></div>

    <div class="gem-grid">
      <?php foreach ($precious as $item): ?>
        <a href="<?= base_url('gem/' . ($item['g_key'] ?? '')); ?>" class="gem-item">
          <img src="<?= base_url('assets/uploads/product/' . ($item['image'] ?? '')); ?>" alt="<?= htmlspecialchars($item['title']); ?>">
          <div class="gem-title"><?= htmlspecialchars($item['title']); ?></div>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
<?php endif; ?>



<style>
  body {
    background: #f7ecdf;
    font-family: "Playfair Display", "Inter", "Segoe UI", sans-serif;
    color: #1f1f1f;
  }

  .gem-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px 20px;
    text-align: center;
  }

  @media(min-width:992px) {
    .gem-grid {
      grid-template-columns: repeat(5, 1fr);
    }
  }

  .gem-item {
    text-decoration: none;
  }

  .gem-item img {
    width: 100%;
    max-height: 140px;
    object-fit: contain;
  }

  .gem-title {
    margin-top: 10px;
    font-size: 16px;
    font-weight: 500;
    color: #111;
  }



  /* ================= SECTION SHIMMER ================= */
  .lux-section {
    position: relative;
    overflow: hidden;
    padding: 0 50px;
  }

  .lux-particles {
    position: absolute;
    inset: 0;
    pointer-events: none;
    background:
      radial-gradient(160px circle at var(--mx, 50%) var(--my, 50%),
        rgba(255, 215, 140, .18),
        transparent 65%);
    transition: background .08s linear;
    z-index: 0;
  }

  /* ================= CARD ================= */
  .lux-gem-card {
    position: relative;
    height: 300px;
    border-radius: 10px;
    background: #f7ecdf;
    overflow: hidden;
    cursor: pointer;
    z-index: 1;
  }

  .lux-gem-card img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    transform: translateY(10px);
    transition: .9s cubic-bezier(.19, 1, .22, 1);
    filter: drop-shadow(0 28px 38px rgba(108, 94, 94, 0.6));
  }

  /* ================= OVERLAY ================= */
  .lux-overlay {
    position: absolute;
    inset: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 30px;
    z-index: 2;
  }

  .lux-overlay::after {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(circle, rgba(92, 81, 81, 0.5), rgba(0, 0, 0, 0.6));
    opacity: 0;
    transition: .6s;
    z-index: -1;
  }

  .lux-name {
    color: #fff;
    font-size: 22px;
    letter-spacing: 4px;
    text-shadow: 0 2px 16px rgba(0, 0, 0, .8);
    transition: .5s;
  }

  .lux-hover {
    position: absolute;
    opacity: 0;
    transform: translateY(30px);
    transition: .6s cubic-bezier(.19, 1, .22, 1);
    backdrop-filter: blur(2px);
    padding: 14px 18px;
    border-radius: 8px;
  }

  .lux-hover h3 {
    color: #fff;
    letter-spacing: 3px;
  }

  .lux-hover p {
    font-size: 14px;
    color: #eee;
  }

  .lux-line {
    width: 0;
    height: 2px;
    background: linear-gradient(90deg, #c9a14a, #f6e7b2, #c9a14a);
    margin: 0 auto 14px;
    transition: .6s;
  }

  /* ================= CARD HOVER ================= */
  .lux-gem-card:hover img {
    transform: translateY(-14px) scale(1.05);
  }

  .lux-gem-card:hover .lux-overlay::after {
    opacity: 1;
  }

  .lux-gem-card:hover .lux-name {
    opacity: 0;
    transform: translateY(-20px);
  }

  .lux-gem-card:hover .lux-hover {
    opacity: 1;
    transform: translateY(0);
  }

  .lux-gem-card:hover .lux-line {
    width: 80px;
  }

  /* ================= FOOTER ================= */
  .lux-footer {
    text-align: center;
    padding: 26px 10px 36px;
  }

  /* ================= LUXURY BUTTON ================= */
  /* ================= LUXURY SHOP NOW BUTTON ================= */
  .lux-btn {
    position: relative;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 14px 60px;
    border-radius: 50px;

    /* Deep luxury base */
    background: linear-gradient(180deg, #635d5dff, #0d0d0d);
    border: 1px solid rgba(201, 161, 74, .55);

    color: #e8d9a8;
    font-size: 13px;
    letter-spacing: 3px;
    font-weight: 600;
    text-decoration: none;

    overflow: hidden;
    isolation: isolate;

    /* Luxury idle breathing */
    animation: lux-breathe 5s ease-in-out infinite;

    transition:
      transform .5s cubic-bezier(.19, 1, .22, 1),
      box-shadow .5s cubic-bezier(.19, 1, .22, 1),
      border-color .5s;
  }

  /* ================= IDLE SHINE (ALWAYS RUNNING) ================= */
  .lux-btn::before {
    content: "";
    position: absolute;
    inset: -2px;
    background:
      linear-gradient(120deg,
        transparent 25%,
        rgba(255, 215, 140, .35),
        transparent 75%);
    animation: lux-shine 6s linear infinite;
    z-index: -1;
  }

  /* Inner glass depth */
  .lux-btn::after {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: inherit;
    box-shadow:
      inset 0 0 0 1px rgba(255, 255, 255, .08),
      inset 0 0 18px rgba(201, 161, 74, .08);
    pointer-events: none;
  }

  /* ================= HOVER ================= */
  .lux-btn:hover {
    transform: translateY(-3px);

    /* Enhanced depth — NOT flat gold */
    box-shadow:
      0 18px 38px rgba(201, 161, 74, .45),
      0 0 0 1px rgba(255, 255, 255, .18),
      inset 0 0 26px rgba(201, 161, 74, .25);

    border-color: #f1d27a;
    color: #fff;
  }

  /* Slightly faster shine on hover */
  .lux-btn:hover::before {
    animation-duration: 3.5s;
  }

  /* ================= IDLE BREATHING ================= */
  @keyframes lux-breathe {

    0%,
    100% {
      box-shadow:
        0 6px 14px rgba(201, 161, 74, .15),
        inset 0 0 10px rgba(201, 161, 74, .12);
    }

    50% {
      box-shadow:
        0 12px 26px rgba(201, 161, 74, .28),
        inset 0 0 18px rgba(201, 161, 74, .2);
    }
  }

  /* ================= SHINE ANIMATION ================= */
  @keyframes lux-shine {
    0% {
      transform: translateX(-140%)
    }

    100% {
      transform: translateX(140%)
    }
  }

  /* ================= RESPONSIVE ================= */
  @media (max-width:965px) {
    .lux-section {
      padding: 0px 30px;
    }

    .lux-gem-card {
      height: 240px
    }
  }

  @media(max-width:768px) {
    .lux-gem-card {
      height: 240px
    }

    .lux-btn {
      width: 100%;
    }
  }

  @media (max-width:540px) {
    .lux-section {
      padding: 0px 10px;
    }

    .lux-btn {
      padding: 10px 30px;
    }

    .lux-footer {
      padding: 7px 8px 7px;
    }
  }

  @media (max-width:400px) {
    .lux-name {
      font-size: 18px;
    }

    .lux-btn {
      padding: 10px 0px;
    }
  }
</style>



<style>
  /* GEM CARD */

  .gem-card {
    background: #f7ecdf;
    padding: 20px;
  }

  .gem-card img {
    width: 160px;
    height: 180px;
  }

  /* CERT BADGE */
  .cert {
    display: inline-block;
    background: #e10600;
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    padding: 2px 8px;
    margin-bottom: 12px;
  }

  /* TEXT */
  .gem-text {
    margin-top: 15px;
    font-size: 16px;
    color: #000;
    font-weight: 500;
    /* little bold, not heavy */
    letter-spacing: 0.2px;
  }


  /* ARROWS */
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    filter: invert(1);
  }

  /* VIEW MORE BUTTON */
  .view-more-btn {
    display: inline-block;
    padding: 14px 70px;
    border-radius: 50px;

    /* Light luxury yellow */
    background: linear-gradient(180deg, #f6e7b2, #e6c874);
    border: 1px solid #d4af37;

    color: #5a4a1f;
    text-decoration: none;
    letter-spacing: 3px;
    font-size: 13px;
    font-weight: 600;

    transition: all .35s ease;
  }

  .view-more-btn:hover {
    background: linear-gradient(180deg, #ffe9a6, #d4af37);
    color: #3d2f10;
    box-shadow: 0 12px 30px rgba(212, 175, 55, .45);
    transform: translateY(-3px);
  }


  /* RESPONSIVE */
  /* RESPONSIVE */
  /* ===== MOBILE PERFECT FIX ===== */
  @media (max-width: 768px) {

    .carousel-item .col {
      width: 33.3333%;
    }

    .gem-card {
      padding: 10px 6px;

      height: 220px;
      /* FIXED HEIGHT */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
    }

    .gem-card img {
      width: 95px;
      height: 95px;
      object-fit: contain;
    }

    .gem-text {
      font-size: 14px;
      line-height: 1.3;
      text-align: center;

      /* limit text height */
      display: -webkit-box;
      -webkit-line-clamp: 2;
      /* max 2 lines */
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .cert {
      margin-bottom: 4px;
      font-size: 11px;
    }

    /* Hide extra cards (already working, keep it) */
    .carousel-item .col:nth-child(n+4) {
      display: none;
    }
  }
</style>

<?php
// Birthstones section (inlined)
$birthstones = isset($birthstones) && is_array($birthstones) ? $birthstones : [];
?>

<?php if (!empty($birthstones)): ?>
  <section class="birthstone-section container py-5">
    <h3 class="text-center mb-4">Featured Birthstones</h3>
    <div class="row g-4 justify-content-center">
      <?php foreach (array_slice($birthstones, 0, 8) as $bs): ?>
        <div class="col-6 col-md-3 text-center">
          <a href="<?= base_url('gem/' . ($bs['g_key'] ?? '')); ?>" class="birthstone-card">
            <img src="<?= base_url('assets/uploads/product/' . ($bs['image'] ?? '')); ?>" alt="<?= htmlspecialchars($bs['title'] ?? ''); ?>">
            <div class="birthstone-title"><?= htmlspecialchars($bs['title'] ?? ''); ?></div>
            <div class="birthstone-month">Month: <?= (int)($bs['birthstone'] ?? 0); ?></div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-4"><a href="<?= site_url('birthstone'); ?>" class="view-more-btn">View All Birthstones</a></div>
  </section>
<?php endif; ?>

<style>
  /* Small style improvements and overrides for precious & semi-precious */
  .lux-gem-card {
    border-radius: 14px;
    padding: 8px;
    box-shadow: 0 18px 40px rgba(0, 0, 0, 0.06);
    transition: transform .35s ease, box-shadow .35s ease;
    background: linear-gradient(180deg, #faf3e6, #f7ecdf);
  }

  .lux-gem-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.10);
  }

  .gem-card {
    border-radius: 12px;
    padding: 12px;
    box-shadow: 0 12px 28px rgba(0, 0, 0, 0.06);
    transition: transform .28s ease, box-shadow .28s ease;
    background: #f7ecdf;
    display: inline-block;
    text-decoration: none;
    color: inherit;
  }

  .gem-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 26px 50px rgba(0, 0, 0, 0.10);
  }

  .birthstone-section {
    max-width: 1100px;
    margin: 40px auto;
  }

  .birthstone-card {
    display: block;
    padding: 12px;
    border-radius: 12px;
    background: #f7ecdf;
    transition: transform .25s ease, box-shadow .25s ease;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
    color: inherit;
    text-decoration: none;
  }

  .birthstone-card img {
    max-width: 100%;
    height: 120px;
    object-fit: contain;
    margin-bottom: 8px;
  }

  .birthstone-title {
    font-weight: 700;
    color: #111;
    margin-bottom: 4px;
  }

  .birthstone-month {
    font-size: 13px;
    color: #666;
  }

  @media(max-width:768px) {
    .birthstone-card img {
      height: 90px;
    }
  }
</style>
<?php include(APPPATH . 'modules/home/views/why.php'); ?>
<style>
  /* GEM CARD */

  .gem-card {
    background: #f7ecdf;
    padding: 20px;
  }

  .gem-card img {
    width: 160px;
    height: 180px;
  }

  /* CERT BADGE */
  .cert {
    display: inline-block;
    background: #e10600;
    color: #fff;
    font-size: 12px;
    font-weight: 700;
    padding: 2px 8px;
    margin-bottom: 12px;
  }

  /* TEXT */
  .gem-text {
    margin-top: 15px;
    font-size: 16px;
    color: #000;
    font-weight: 500;
    /* little bold, not heavy */
    letter-spacing: 0.2px;
  }


  /* ARROWS */
  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    filter: invert(1);
  }

  /* VIEW MORE BUTTON */



  /* RESPONSIVE */
  /* RESPONSIVE */
  /* ===== MOBILE PERFECT FIX ===== */
  @media (max-width: 768px) {

    .carousel-item .col {
      width: 33.3333%;
    }

    .gem-card {
      padding: 10px 6px;

      height: 220px;
      /* FIXED HEIGHT */
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
    }

    .gem-card img {
      width: 95px;
      height: 95px;
      object-fit: contain;
    }

    .gem-text {
      font-size: 14px;
      line-height: 1.3;
      text-align: center;

      /* limit text height */
      display: -webkit-box;
      -webkit-line-clamp: 2;
      /* max 2 lines */
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .cert {
      margin-bottom: 4px;
      font-size: 11px;
    }

    /* Hide extra cards (already working, keep it) */
    .carousel-item .col:nth-child(n+4) {
      display: none;
    }
  }
</style>




<!-- ================= SEMI PRECIOUS GEMS SECTION ================= -->


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

  .brx-view-btn {
    background: linear-gradient(135deg, #e6d08a, #d4af37);
    border: none;
    padding: 14px 42px;
    border-radius: 40px;
    font-weight: 700;
    letter-spacing: 2px;
    cursor: pointer;
    color: #111;
    box-shadow: 0 12px 30px rgba(212, 175, 55, .35);
    transition: .3s ease;
  }

  .brx-view-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 20px 45px rgba(212, 175, 55, .5);
  }
</style>



<?php
// Inlined bracelet view - use bracelets from controller if available
$bracelets = isset($bracelets) && is_array($bracelets) ? $bracelets : [];
?>
<div class="row g-4 brx-section">
  <?php foreach ($bracelets as $item): ?>
    <div class="col-md-4 col-6">

      <div class="brx-card">

        <?php if (!empty($item['badge'])): ?>
          <span class="brx-badge"><?= $item['badge']; ?></span>
        <?php endif; ?>

        <div class="brx-wishlist">
          <i class="bi bi-heart"></i>
        </div>

        <div class="brx-image-wrap">
          <img src="<?= base_url('assets/uploads/product/') . $item['image']   ?>" alt="<?= htmlspecialchars($item['title'] ?? ''); ?>">
        </div>

        <div class="brx-body">
          <h4 class="brx-title"><?= htmlspecialchars($item['title'] ?? ''); ?></h4>

          <div class="brx-rating">
            <?php for ($i = 1; $i <= 5; $i++): ?>
              <i class="bi <?= $i <= round((float)($item['rating'] ?? 0)) ? 'bi-star-fill' : 'bi-star'; ?>"></i>
            <?php endfor; ?>
            <small>(<?= htmlspecialchars($item['rating'] ?? '0'); ?>)</small>
          </div>

          <div class="brx-price">₹<?= number_format((float)($item['price'] ?? 0)); ?></div>

          <button class="brx-btn">
            <a href="<?= base_url('bracelet/' . ($item['b_key'] ?? '')); ?>" class="brx-btn">
              <span>View</span>
              <i class="bi bi-cart"></i>
            </a>

            
          </button>
        </div>

      </div>
    </div>
  <?php endforeach; ?>
</div>
<style>
  .brx-section {
    padding: 0px 70px;
  }

  /* CARD */
  .brx-card {
    background: #f7ecdf;
    border-radius: 22px;
    position: relative;
    overflow: hidden;
    height: 100%;
    transition: all .55s cubic-bezier(.19, 1, .22, 1);
    border: 1px solid rgba(200, 180, 120, .25);
    box-shadow: 0 14px 35px rgba(0, 0, 0, .08);
  }

  .brx-card::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(120deg,
        rgba(212, 175, 55, .15),
        transparent 60%);
    opacity: 0;
    transition: .6s ease;
  }

  .brx-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 30px 70px rgba(0, 0, 0, .14);
  }

  .brx-card:hover::before {
    opacity: 1;
  }

  /* BADGE – PREMIUM PILL */
  .brx-badge {
    position: absolute;
    top: 14px;
    left: 14px;
    padding: 7px 16px;
    border-radius: 30px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #111;
    background: linear-gradient(135deg, #e7d18f, #d4af37);
    box-shadow: 0 6px 18px rgba(212, 175, 55, .35);
    overflow: hidden;
    z-index: 3;
  }

  /* SHINE LAYER */
  .brx-badge::after {
    content: "";
    position: absolute;
    top: 0;
    left: -120%;
    width: 120%;
    height: 100%;
    background: linear-gradient(120deg,
        transparent 30%,
        rgba(255, 255, 255, .65) 50%,
        transparent 70%);
    transition: .75s ease;
  }

  /* HOVER SHINE */
  .brx-badge:hover::after {
    left: 120%;
  }

  .brx-card:hover .brx-badge::after {
    left: 120%;
  }

  /* HEART */
  .brx-wishlist {
    z-index: 100;
    position: absolute;
    top: 14px;
    right: 14px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, .85);
    backdrop-filter: blur(6px);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 10px 25px rgba(0, 0, 0, .12);
    transition: .35s ease;
  }

  .brx-wishlist i {
    font-size: 17px;
    color: #c9a14a;
    transition: .35s ease;
  }

  .brx-wishlist:hover {
    transform: scale(1.15);
  }

  .brx-wishlist:hover i {
    color: #d65c5c;
    animation: heartBeat .6s ease;
  }

  /* HEART PULSE */
  @keyframes heartBeat {
    0% {
      transform: scale(1);
    }

    40% {
      transform: scale(1.25);
    }

    70% {
      transform: scale(.95);
    }

    100% {
      transform: scale(1);
    }
  }


  /* IMAGE */
  .brx-image-wrap {
    background: radial-gradient(circle, #fff, #efefef);
    padding: 28px 18px 22px;
  }

  .brx-image-wrap img {
    width: 100%;
    height: 210px;
    object-fit: contain;
    transition: transform .8s cubic-bezier(.19, 1, .22, 1);
  }

  .brx-card:hover img {
    transform: translateY(-6px) scale(1.1);
  }

  /* BODY */
  .brx-body {
    padding: 22px 18px 28px;
    text-align: center;
  }

  .brx-title {
    font-size: 15.5px;
    font-weight: 600;
    color: #222;
    margin-bottom: 8px;
  }

  /* RATING */
  .brx-rating {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 4px;
    margin-bottom: 8px;
  }

  .brx-rating i {
    color: #f1b400;
    font-size: 14px;
  }

  .brx-rating small {
    margin-left: 6px;
    font-size: 12px;
    color: #777;
  }

  /* PRICE */
  .brx-price {
    font-size: 18px;
    font-weight: 700;
    color: #b89645;
    margin-bottom: 18px;
  }

  /* BUTTON */
  .brx-btn {
    width: 100%;
    background: linear-gradient(135deg, #e6d08a, #d4af37);
    border: none;
    color: #111;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 2px;
    padding: 14px 0;
    border-radius: 40px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    overflow: hidden;
    position: relative;
    transition: .45s cubic-bezier(.19, 1, .22, 1);
    box-shadow: 0 12px 30px rgba(212, 175, 55, .35);
  }

  .brx-btn i {
    font-size: 16px;
    transform: translateX(-10px);
    opacity: 0;
    transition: .4s ease;
  }

  .brx-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 22px 45px rgba(212, 175, 55, .5);
  }

  .brx-btn:hover i {
    transform: translateX(0);
    opacity: 1;
  }

  @media (max-width:1000px) {
    .brx-section {
      padding: 0px 30px;
    }

    .brx-image-wrap img {
      height: 180px;
    }
  }

  @media (max-width:570px) {
    .brx-section {
      padding: 0px 10px;
    }

    .brx-btn {
      padding: 8px 0px;
    }
  }

  @media (max-width:500px) {
    .brx-badge {
      top: 10px;
      left: 10px;
      padding: 0px 10px;
      border-radius: 15px;
    }

    .brx-image-wrap {
      padding: 12px 7px 0px;
    }

    .brx-body {
      padding: 7px 10px 14px;
    }

    .brx-title {
      font-size: 14px;
    }
  }

  @media (max-width:400px) {
    .brx-image-wrap img {
      height: 150px;
    }

    .brx-btn {
      letter-spacing: normal;
      padding: 4px 0px;
      font-weight: 600;
    }

    .brx-title {
      margin-bottom: 4px;
    }

    .brx-rating {
      margin-bottom: 4px;
    }

    .brx-price {
      margin-bottom: 10px
    }
  }
</style>





<div style="text-align:center;margin-top:40px;">
  <a href="<?= site_url('braclet'); ?>" class="brx-view-btn">
    View More
  </a>
</div>



<script>
  document.addEventListener("DOMContentLoaded", function() {
    const items = document.querySelectorAll(".brx-item");
    const btn = document.getElementById("viewMoreBtn");

    const visibleCount = 6;
    let expanded = false;

    items.forEach((item, index) => {
      if (index >= visibleCount) {
        item.style.display = "none";
      }
    });

    btn.addEventListener("click", function() {
      expanded = !expanded;

      items.forEach((item, index) => {
        if (index >= visibleCount) {
          item.style.display = expanded ? "block" : "none";
        }
      });

      btn.textContent = expanded ? "View Less" : "View More";
    });
  });
</script>

<!-- gems lab start -->

<?php include(APPPATH . 'modules/home/views/lab.php'); ?>

<!-- gem lab end -->

<!-- procesa start  -->

<style>
  /* ================= PROCESS SECTION ================= */
  .process-section {
    background: #f7ecdf;
    padding: 70px 30px;
    text-align: center;
  }

  .process-title {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 50px;
    color: #111;
  }

  /* ROW */
  .process-row {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 30px;
    flex-wrap: wrap;
  }

  /* STEP */
  .process-step {
    flex: 1;
    min-width: 150px;
    max-width: 200px;
    text-align: center;
  }

  /* ICON CIRCLE */
  .process-icon {
    width: 110px;
    /* increased */
    height: 110px;
    /* increased */
    margin: 0 auto 18px;
    background: #f7ecdf;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 12px 30px rgba(0, 0, 0, .15);
  }

  /* ICON IMAGE */
  .process-icon img {
    width: 54px;
    /* increased */
    height: 54px;
    /* increased */
    object-fit: contain;
  }

  /* TEXT */
  .process-step p {
    font-size: 15px;
    line-height: 1.5;
    color: #111;
    font-weight: 500;
  }

  /* ================= RESPONSIVE ================= */

  /* Tablet */
  @media(max-width:992px) {
    .process-row {
      justify-content: center;
    }
  }

  /* Mobile – 2 items per row */
  /* FORCE 2 ITEMS PER ROW ON ALL PHONES */
  @media(max-width:580px) {
    .process-row {
      justify-content: center;
      gap: 16px;
    }

    .process-step {
      flex: 0 0 48%;
      max-width: 48%;
      min-width: 0;
      /* THIS IS THE KEY FIX */
    }
  }



  /* Small mobile */
  @media(max-width:400px) {
    .process-step {
      flex: 0 0 48%;
      max-width: 48%;
      min-width: 0;
    }
  }
</style>

<section class="process-section">
  <h2 class="process-title">Our Process</h2>

  <div class="process-row">

    <div class="process-step">
      <div class="process-icon">
        <img src="assets/images/customer.png" alt="Connect">
      </div>
      <p>Connect</p>
    </div>

    <div class="process-step">
      <div class="process-icon">
        <img src="assets/images/fast.png" alt="Expert Guidance">
      </div>
      <p>Expert Guidance</p>
    </div>

    <div class="process-step">
      <div class="process-icon">
        <img src="assets/images/gem.png" alt="Select Your Gem">
      </div>
      <p>Select Your Gem</p>
    </div>

    <div class="process-step">
      <div class="process-icon">
        <img src="assets/images/choose.png" alt="Approve Selection">
      </div>
      <p>Approve Selection</p>
    </div>

    <div class="process-step">
      <div class="process-icon">
        <img src="assets/images/shopping-bag.png" alt="Place Order">
      </div>
      <p>Place Order</p>
    </div>

    <div class="process-step">
      <div class="process-icon">
        <img src="assets/images/delivered.png" alt="Delivered to You">
      </div>
      <p>Delivered to You</p>
    </div>

  </div>
</section>

<!-- our process end -->

<style>
  body {
    background: #f7ecdf;
    font-family: "Playfair Display", "Inter", "Segoe UI", sans-serif;
    color: #1f1f1f;
  }

  .luxury-gem-section {
    padding: 90px 0 90px;

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
      At <strong>Ananya Gems & Jewells</strong>, our semi-precious gemstone collection
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

  <?php
  // Inlined semi-precious view
  $semiprecious = isset($semiprecious) && is_array($semiprecious) ? $semiprecious : [];
  ?>

  <?php if (!empty($semiprecious)): ?>
    <div class="container-fluid py-5 bg-white">

      <div id="gemCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

        <div class="carousel-inner text-center">

          <?php $chunks = array_chunk($semiprecious, 5);
          foreach ($chunks as $si => $chunk): ?>
            <div class="carousel-item <?= $si === 0 ? 'active' : ''; ?>">
              <div class="row justify-content-center">
                <?php foreach ($chunk as $item): ?>
                  <div class="col">
                    <a href="<?= base_url('gem/' . ($item['g_key'] ?? '')); ?>" class="gem-card">
                      <img src="<?= base_url('assets/uploads/product/' . ($item['image'] ?? '')); ?>" alt="<?= htmlspecialchars($item['title'] ?? ''); ?>">
                      <p class="gem-text"><?= htmlspecialchars($item['title'] ?? ''); ?></p>
                    </a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>

        </div>

        <?php if (count($chunks) > 1): ?>
          <button class="carousel-control-prev" type="button" data-bs-target="#gemCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#gemCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
          </button>
        <?php endif; ?>

      </div>

      <div class="text-center mt-3">
        <a href="<?= site_url('semiprecious'); ?>" class="view-more-btn">View More Semi-Precious</a>
      </div>

    </div>
  <?php endif; ?>
</div>


<!-- semiprecious already inlined above; include removed -->

<!-- CATALOG HEADER SECTION -->

<style>
  body {
    background: #f7ecdf;
    font-family: "Playfair Display", "Inter", "Segoe UI", sans-serif;
    color: #1f1f1f;
  }

  /* ================= CATALOG HEADER SECTION ================= */
  .catalog-header-section {
    padding: 80px 20px 0px;

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
    <?php include(APPPATH . 'modules/home/views/catalog.php'); ?>
  </div>
</section>