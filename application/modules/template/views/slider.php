<link
  href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;600;700&family=Poppins:wght@300;400;500&display=swap"
  rel="stylesheet">
<?php include(APPPATH . 'modules/template/views/marquee.php'); ?>

<div class="kg-hero-slider">

  <div class="kg-slides-wrap">

    <div class="kg-slide kg-active kg-anim-zoom"
      style="background-image:url('<?= base_url() ?>assets/images/hawa.jpg')">
      <div class="kg-overlay"></div>
      <div class="kg-caption">
        <h1>Ananya Gems & jewels</h1>
        <div class="kg-underline"></div>
        <span>Jaipur • Since Excellence</span><br>
        <a href="#" class="kg-cta-btn">Explore Collection</a>
      </div>
    </div>

    <div class="kg-slide kg-anim-right" style="background-image:url('<?= base_url() ?>assets/images/sl4.png')">
      <div class="kg-overlay"></div>
      <div class="kg-caption">
        <h1>Precious Stones</h1>
        <div class="kg-underline"></div>
        <span>Certified • Natural • Rare</span>
      </div>
    </div>

    <div class="kg-slide kg-anim-left" style="background-image:url('<?= base_url() ?>assets/images/city.jpg')">
      <div class="kg-overlay"></div>
      <div class="kg-caption">
        <h1>Ananya Gems & jewels</h1>
        <div class="kg-underline"></div>
        <span>Where Beauty Meets Trust</span>
      </div>
    </div>

  </div>
  <div class="kg-indicators">
    <span class="kg-dot active"></span>
    <span class="kg-dot"></span>
    <span class="kg-dot"></span>
  </div>
  <button class="kg-nav kg-prev">&#10094;</button>
  <button class="kg-nav kg-next">&#10095;</button>

</div>

<style>
  .kg-hero-slider {
    position: relative;
    height: 85vh;
    overflow: hidden;
  }

  .kg-slides-wrap {
    position: relative;
    height: 100%;
  }

  /* SLIDE */
  .kg-slide {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    z-index: 1;
  }

  /* ACTIVE SLIDE */
  .kg-slide.kg-active {
    z-index: 3;
  }

  /* OVERLAY */
  .kg-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg,
        rgba(0, 0, 0, .75) 0%,
        rgba(0, 0, 0, .45) 45%,
        rgba(0, 0, 0, .15) 100%);
  }

  /* CAPTION */
  .kg-caption {
    position: absolute;
    bottom: 22%;
    left: 10%;
    max-width: 600px;
    color: #fff;
  }

  /* HEADING */
  .kg-caption h1 {
    font-family: 'Playfair Display', serif;
    font-size: 4rem;
    font-weight: 600;
    letter-spacing: 3px;
    color: #f5e6c8;
    margin-bottom: 10px;
    text-shadow: 0 6px 25px rgba(0, 0, 0, 0.45);
  }

  /* SUBTITLE */
  .kg-caption span {
    font-family: 'Poppins', sans-serif;
    font-size: 1.1rem;
    letter-spacing: 1.5px;
    color: rgba(255, 255, 255, 0.85);
  }

  /* GOLD UNDERLINE */
  .kg-underline {
    width: 0;
    height: 3px;
    background: linear-gradient(90deg, #d4af37, #f5e6c8);
    margin: 14px 0 18px;
  }

  /* CTA */
  .kg-cta-btn {
    display: inline-block;
    margin-top: 28px;
    padding: 14px 34px;
    font-family: 'Poppins', sans-serif;
    font-size: .9rem;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #1a1a1a;
    background: linear-gradient(135deg, #f5e6c8, #d4af37);
    border-radius: 30px;
    text-decoration: none;
    transition: .35s ease;
    box-shadow: 0 10px 30px rgba(212, 175, 55, .35);
  }

  .kg-cta-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 15px 45px rgba(212, 175, 55, .6);
  }

  /* NAV */
  .kg-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    z-index: 10;
    background: rgba(255, 255, 255, .25);
    color: #fff;
    border: none;
    font-size: 26px;
    padding: 14px 18px;
    cursor: pointer;
    border-radius: 50%;
  }

  .kg-prev {
    left: 20px;
  }

  .kg-next {
    right: 20px;
  }

  /* ================= ANIMATIONS ================= */

  /* ENTER */
  .kg-anim-zoom.kg-active {
    animation: zoomIn 1.4s ease forwards;
  }

  .kg-anim-right.kg-active {
    animation: enterFromRight 1.2s ease forwards;
  }

  .kg-anim-left.kg-active {
    animation: enterFromLeft 1.2s ease forwards;
  }

  /* EXIT */
  .kg-exit-left {
    animation: exitLeft 1.2s ease forwards;
  }

  .kg-exit-right {
    animation: exitRight 1.2s ease forwards;
  }

  /* INITIAL TEXT STATE (IMPORTANT FIX) */
  .kg-slide h1,
  .kg-slide span {
    opacity: 0;
    transform: translateY(40px);
  }

  /* TEXT ANIMATIONS */
  .kg-slide.kg-active h1 {
    animation: textUp 1s ease forwards;
  }

  .kg-slide.kg-active span {
    animation: textFade 1.2s ease forwards .4s;
  }

  .kg-slide.kg-active .kg-underline {
    animation: underlineGrow 1s ease forwards .3s;
  }

  /* KEYFRAMES */
  @keyframes zoomIn {
    from {
      transform: scale(1.1);
    }

    to {
      transform: scale(1);
    }
  }

  @keyframes enterFromRight {
    from {
      transform: translateX(100%);
    }

    to {
      transform: translateX(0);
    }
  }

  @keyframes enterFromLeft {
    from {
      transform: translateX(-100%);
    }

    to {
      transform: translateX(0);
    }
  }

  @keyframes exitLeft {
    from {
      transform: translateX(0);
    }

    to {
      transform: translateX(-100%);
    }
  }

  @keyframes exitRight {
    from {
      transform: translateX(0);
    }

    to {
      transform: translateX(100%);
    }
  }

  @keyframes textUp {
    from {
      opacity: 0;
      transform: translateY(40px);
    }

    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  @keyframes textFade {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes underlineGrow {
    from {
      width: 0;
    }

    to {
      width: 180px;
    }
  }

  /* MOBILE */
  @media (max-width:650px) {
    .kg-caption h1 {
      font-size: 36px;
    }

    .kg-nav {
      width: 30px;
      height: 30px;
      padding: 0;
      font-size: 18px;
      line-height: 30px;
      text-align: center;
      border-radius: 50%;
    }

    .kg-prev {
      left: 4px;
    }

    .kg-next {
      right: 4px;
    }
  }



  /* ========== SLIDE INDICATORS ========== */

  .kg-indicators {
    position: absolute;
    bottom: 30px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
    gap: 12px;
    z-index: 12;
  }

  .kg-dot {
    width: 40px;
    height: 4px;
    background: rgba(255, 255, 255, 0.35);
    border-radius: 10px;
    transition: all .4s ease;
  }

  .kg-dot.active {
    background: linear-gradient(90deg, #d4af37, #f5e6c8);
    box-shadow: 0 0 12px rgba(212, 175, 55, 0.8);
  }

  /* Mobile */
  @media (max-width:650px) {
    .kg-dot {
      width: 26px;
    }
  }
</style>

<script>
  document.addEventListener("DOMContentLoaded", () => {

    const slides = document.querySelectorAll(".kg-slide");
    const dots = document.querySelectorAll(".kg-dot");
    const next = document.querySelector(".kg-next");
    const prev = document.querySelector(".kg-prev");

    let index = 0;
    let interval;
    const duration = 5000;

    function updateIndicators() {
      dots.forEach((dot, i) => {
        dot.classList.toggle("active", i === index);
      });
    }

    function changeSlide(newIndex) {
      const current = slides[index];
      const nextSlide = slides[newIndex];

      slides.forEach(s => {
        s.classList.remove('kg-active', 'kg-exit-left', 'kg-exit-right');
        s.querySelectorAll('h1, span, .kg-underline').forEach(el => {
          el.style.animation = 'none';
          void el.offsetWidth;
          el.style.animation = '';
        });
      });

      if (newIndex > index) {
        current.classList.add('kg-exit-left');
      } else {
        current.classList.add('kg-exit-right');
      }

      nextSlide.classList.add('kg-active');
      index = newIndex;
      updateIndicators();
    }

    function startAuto() {
      interval = setInterval(() => {
        changeSlide((index + 1) % slides.length);
      }, duration);
    }

    function resetAuto() {
      clearInterval(interval);
      startAuto();
    }

    next.onclick = () => {
      changeSlide((index + 1) % slides.length);
      resetAuto();
    };

    prev.onclick = () => {
      changeSlide((index - 1 + slides.length) % slides.length);
      resetAuto();
    };

    updateIndicators();
    startAuto();
  });
</script>