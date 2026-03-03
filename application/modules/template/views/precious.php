<?php
$gems = [
    ["img" => "d1.png", "name" => "AMETHYST", "title" => "AMETHYST | KATELA", "desc" => "Peace • Intuition • Protection"],
    ["img" => "d2.png", "name" => "CITRINE", "title" => "CITRINE | SUNELA", "desc" => "Wealth • Success • Abundance"],
    ["img" => "d3.png", "name" => "PERIDOT", "title" => "PERIDOT", "desc" => "Positivity • Growth • Healing"],
    ["img" => "d4.png", "name" => "GARNET", "title" => "GARNET", "desc" => "Strength • Power • Protection"],
    ["img" => "d5.png", "name" => "TOPAZ", "title" => "TOPAZ", "desc" => "Confidence • Communication"],
    ["img" => "d6.png", "name" => "ONYX", "title" => "ONYX", "desc" => "Stability • Shield • Focus"],
    ["img" => "d7.png", "name" => "MOONSTONE", "title" => "MOONSTONE", "desc" => "Calm • Balance • Emotions"],
    ["img" => "d8.png", "name" => "ROSE QUARTZ", "title" => "ROSE QUARTZ", "desc" => "Love • Harmony • Healing"],
    ["img" => "d9.png", "name" => "TURQUOISE", "title" => "TURQUOISE", "desc" => "Healing • Protection • Wisdom"]
];
?>
<div class="container-fluid py-5 lux-section">
    <div class="lux-particles"></div>

    <div class="row g-4 position-relative">

        <?php foreach ($gems as $gem): ?>
            <div class="col-6 col-md-4">
                <div class="lux-gem-card">

                    <img src="<?= base_url('assets/images/' . $gem['img']) ?>" alt="<?= $gem['name'] ?>">

                    <div class="lux-overlay">
                        <span class="lux-name"><?= $gem['name'] ?></span>

                        <div class="lux-hover">
                            <div class="lux-line"></div>
                            <h3><?= $gem['title'] ?></h3>
                            <p><?= $gem['desc'] ?></p>
                        </div>
                    </div>

                </div>

                <div class="lux-footer">
                    <a href="#" class="lux-btn">SHOP NOW</a>
                </div>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<style>
    body {
        font-family: "Poppins", sans-serif;
        background: #fff;
        overflow-x: hidden;
    }

    /* ================= SECTION SHIMMER ================= */
    .lux-section {
        position: relative;
        overflow: hidden;
        padding:0 50px;
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
        background:
            radial-gradient(circle at top, rgba(255, 255, 255, .08), transparent 45%),
            radial-gradient(circle at bottom, rgba(0, 0, 0, .9), #0d0d0d 70%);
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
        filter: drop-shadow(0 28px 38px rgba(0, 0, 0, .6));
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
        background: radial-gradient(circle, rgba(0, 0, 0, .5), rgba(0, 0, 0, 0.6));
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
        background: linear-gradient(180deg, #171717, #0d0d0d);
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
    @media (max-width:965px){
        .lux-section{
            padding:0px 30px;
        }
        .lux-gem-card{
            height:240px
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
    @media (max-width:540px){
        .lux-section{
            padding:0px 10px;
        }
        .lux-btn{
            padding:10px 30px;
        }
        .lux-footer{
            padding:7px 8px 7px;
        }
    }
    @media (max-width:400px){
        .lux-name{
            font-size:18px;
        }
        .lux-btn{
            padding:10px 0px;
        }
    }
</style>