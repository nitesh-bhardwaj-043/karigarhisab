<div class="kg-marquee-title">
    Certified Natural Gemstones
</div>

<div class="kg-marquee">
    <div class="kg-marquee-track">

        <!-- SET 1 -->
        <img src="assets/images/d3.png" class="kg-gem">
        <img src="assets/images/d4.png" class="kg-gem">
        <img src="assets/images/d5.png" class="kg-gem">
        <img src="assets/images/d6.png" class="kg-gem">
        <img src="assets/images/d7.png" class="kg-gem">
        <img src="assets/images/d8.png" class="kg-gem">
        <img src="assets/images/d9.png" class="kg-gem">
        <img src="assets/images/e.png" class="kg-gem">
        <img src="assets/images/e1.png" class="kg-gem">
        <img src="assets/images/e2.png" class="kg-gem">
        <img src="assets/images/e3.png" class="kg-gem">
        <img src="assets/images/e4.png" class="kg-gem">
        <img src="assets/images/e5.png" class="kg-gem">
        <img src="assets/images/e6.png" class="kg-gem">
        <img src="assets/images/e7.png" class="kg-gem">
        <img src="assets/images/e1.png" class="kg-gem">

        <!-- SET 2 (exact duplicate for seamless loop) -->
        <img src="assets/images/d3.png" class="kg-gem">
        <img src="assets/images/d4.png" class="kg-gem">
        <img src="assets/images/d5.png" class="kg-gem">
        <img src="assets/images/d6.png" class="kg-gem">
        <img src="assets/images/d7.png" class="kg-gem">
        <img src="assets/images/d8.png" class="kg-gem">
        <img src="assets/images/d9.png" class="kg-gem">
        <img src="assets/images/e.png" class="kg-gem">
        <img src="assets/images/e1.png" class="kg-gem">
        <img src="assets/images/e2.png" class="kg-gem">
        <img src="assets/images/e3.png" class="kg-gem">
        <img src="assets/images/e4.png" class="kg-gem">
        <img src="assets/images/e5.png" class="kg-gem">
        <img src="assets/images/e6.png" class="kg-gem">
        <img src="assets/images/e7.png" class="kg-gem">
        <img src="assets/images/e9.png" class="kg-gem">

    </div>
</div>
<style>
    .kg-marquee-title {
        text-align: center;
        font-size: 14px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #9c7c38;
        /* gold tone */
        margin-top:3px;
        margin-bottom: 0px;
        font-weight: 500;
    }

    .kg-marquee {
        width: 100%;
        overflow: hidden;
        padding: 18px 0;
        position: relative;

        /* Soft glassy overlay – works on hero image */
        background: linear-gradient(to right,
                rgba(255, 255, 255, 0.05),
                rgba(255, 255, 255, 0.15),
                rgba(255, 255, 255, 0.05));

        backdrop-filter: blur(6px);
    }

    /* subtle edge fade */
    .kg-marquee::before,
    .kg-marquee::after {
        content: "";
        position: absolute;
        top: 0;
        width: 120px;
        height: 100%;
        z-index: 2;
        pointer-events: none;
    }

    .kg-marquee::before {
        left: 0;
        background: linear-gradient(to right, #fff, transparent);
    }

    .kg-marquee::after {
        right: 0;
        background: linear-gradient(to left, #fff, transparent);
    }


    .kg-marquee-track {
        display: flex;
        align-items: center;
        gap: 46px;
        width: max-content;

        animation: kg-scroll 50s linear infinite;
    }

    .kg-marquee:hover .kg-marquee-track {
        animation-play-state: paused;
    }

    /* GEM IMAGES */
    .kg-gem {
        height: 42px;
        width: auto;
        opacity: .95;

        filter:
            drop-shadow(0 8px 18px rgba(0, 0, 0, .18)) drop-shadow(0 0 12px rgba(212, 175, 55, .35));

        transition: transform .35s ease, filter .35s ease;
    }

    .kg-gem:hover {
        transform: scale(1.12) translateY(-3px);
        filter:
            drop-shadow(0 14px 26px rgba(0, 0, 0, .25)) drop-shadow(0 0 18px rgba(212, 175, 55, .6));
    }

    /* TRUE SEAMLESS LOOP */
    @keyframes kg-scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    /* MOBILE */
    @media (max-width: 768px) {
        .kg-gem {
            height: 32px;
        }

        .kg-marquee-track {
            gap: 28px;
        }
    }
</style>