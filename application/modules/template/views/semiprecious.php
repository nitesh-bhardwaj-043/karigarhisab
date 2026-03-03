<?php
$gems = [
    ["img" => "e8.png", "name" => "AQUAMARINE",   "title" => "AQUAMARINE",   "desc" => "Calm • Clarity • Courage"],
    ["img" => "e7.png", "name" => "GARNET",       "title" => "GARNET",       "desc" => "Strength • Energy • Protection"],
    ["img" => "e.png",  "name" => "LAPIS LAZULI", "title" => "LAPIS LAZULI", "desc" => "Wisdom • Truth • Awareness"],
    ["img" => "e5.png", "name" => "TURQUOISE",    "title" => "TURQUOISE",    "desc" => "Healing • Protection • Balance"],
    ["img" => "e4.png", "name" => "PERIDOT",      "title" => "PERIDOT",      "desc" => "Growth • Positivity • Renewal"],
    ["img" => "e3.png", "name" => "MOONSTONE",    "title" => "MOONSTONE",    "desc" => "Calm • Balance • Emotions"],
    ["img" => "e2.png", "name" => "ROSE QUARTZ",  "title" => "ROSE QUARTZ",  "desc" => "Love • Harmony • Healing"],
    ["img" => "e6.png", "name" => "SPINEL",       "title" => "SPINEL",       "desc" => "Vitality • Passion • Strength"],
    ["img" => "e1.png", "name" => "TOURMALINE",   "title" => "TOURMALINE",   "desc" => "Protection • Balance • Energy"]
];
?>


<div class="agx-gem-section container-fluid">
    <div class="row">

        <?php foreach ($gems as $gem): ?>
            <div class="col-6 col-md-4 mb-3">

                <div class="agx-gem-card">

                    <div class="agx-gem-visual">

                        <div class="agx-gem-aura"></div>

                        <img src="<?= $gem['image']; ?>" alt="<?= $gem['name']; ?>">

                        <div class="agx-gem-label">
                            <?= $gem['name']; ?>
                        </div>

                    </div>

                    <div class="agx-gem-hover">
                        <span class="agx-gem-tag"><?= $gem['title']; ?></span>
                        <p><?= $gem['description']; ?></p>
                        <a href="#" class="agx-gem-btn">SHOP NOW</a>
                    </div>

                </div>

            </div>
        <?php endforeach; ?>

    </div>
</div>

<style>
    /* SECTION */
    .agx-gem-section {
        padding: 10px 50px;
    }

    /* CARD */
    .agx-gem-card {
        position: relative;
        background: radial-gradient(circle at top, #3b3b3b, #1f1f1f);
        border-radius: 20px;
        padding: 42px 32px;
        height: 100%;
        text-align: center;
        overflow: hidden;
        box-shadow: 0 30px 60px rgba(0, 0, 0, .25);
        transition: transform .7s cubic-bezier(.19, 1, .22, 1),
            box-shadow .7s cubic-bezier(.19, 1, .22, 1);
    }

    .agx-gem-card:hover {
        transform: translateY(-12px);
        box-shadow: 0 55px 110px rgba(0, 0, 0, .45);
    }

    /* VISUAL */
    .agx-gem-visual {
        position: relative;
        height: 260px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    /* IMAGE */
    .agx-gem-visual img {
        max-width: 80%;
        max-height: 100%;
        object-fit: contain;
        /* z-index: 2; */
        transition: transform .9s cubic-bezier(.19, 1, .22, 1),
            filter .6s ease;
    }

    .agx-gem-card:hover img {
        transform: scale(1.06);
        filter: saturate(1.1);
    }

    /* AURA SHINE */
    .agx-gem-aura {
        position: absolute;
        width: 240px;
        height: 240px;
        border-radius: 50%;
        background: radial-gradient(circle,
                rgba(201, 161, 74, .35),
                rgba(201, 161, 74, .15),
                transparent 70%);
        filter: blur(30px);
        animation: agxBreath 6s ease-in-out infinite;
        z-index: 1;
    }

    .agx-gem-card:hover .agx-gem-aura {
        transform: scale(1.15);
        opacity: .9;
    }

    .agx-gem-card:hover .agx-gem-label {
        display: none;
    }

    /* NAME PILL */
    .agx-gem-label {
        position: absolute;
        bottom: -18px;
        background: #fff;
        padding: 10px 24px;
        border-radius: 40px;
        font-size: 13px;
        letter-spacing: 2px;
        font-weight: 600;
        color: #111;
        box-shadow: 0 12px 30px rgba(0, 0, 0, .35);
        z-index: 3;
    }

    /* HOVER GLASS */
    .agx-gem-hover {
        position: absolute;
        inset: 0;
        background: radial-gradient(circle,
                rgba(255, 255, 255, .12),
                rgba(0, 0, 0, .65) 70%);
        backdrop-filter: blur(10px);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 40px;
        opacity: 0;
        transform: translateY(30px);
        transition: opacity .6s ease,
            transform .6s ease;
    }

    .agx-gem-card:hover .agx-gem-hover {
        opacity: 1;
        transform: translateY(0);
    }

    /* STAGGERED REVEAL */
    .agx-gem-tag,
    .agx-gem-hover p,
    .agx-gem-btn {
        opacity: 0;
        transform: translateY(12px);
        transition: all .6s ease;
    }

    .agx-gem-card:hover .agx-gem-tag {
        opacity: 1;
        transform: translateY(0);
        transition-delay: .15s;
    }

    .agx-gem-card:hover .agx-gem-hover p {
        opacity: 1;
        transform: translateY(0);
        transition-delay: .3s;
    }

    .agx-gem-card:hover .agx-gem-btn {
        opacity: 1;
        transform: translateY(0);
        transition-delay: .45s;
    }

    /* TAG */
    .agx-gem-tag {
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 3px;
        color: #d2b46c;
        margin-bottom: 14px;
    }

    /* TEXT */
    .agx-gem-hover p {
        font-size: 15px;
        line-height: 1.8;
        color: #f1f1f1;
        margin-bottom: 22px;
        max-width: 280px;
    }

    /* BUTTON */
    .agx-gem-btn {
        position: relative;
        display: inline-block;
        padding: 13px 36px;
        border-radius: 40px;
        background: linear-gradient(135deg, #c9a14a, #f3d37a);
        color: #111;
        font-size: 12px;
        letter-spacing: 3px;
        font-weight: 600;
        text-decoration: none;
        overflow: hidden;
    }

    .agx-gem-btn::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(120deg,
                transparent 30%,
                rgba(255, 255, 255, .6),
                transparent 70%);
        transform: translateX(-100%);
    }

    .agx-gem-btn:hover::before {
        transform: translateX(100%);
        transition: transform .9s ease;
    }

    /* BREATH ANIMATION */
    @keyframes agxBreath {

        0%,
        100% {
            transform: scale(1);
            opacity: .6;
        }

        50% {
            transform: scale(1.08);
            opacity: .9;
        }
    }

    /* MOBILE */
    @media(max-width:768px) {
        .agx-gem-section {
            padding: 10px 20px;
        }
        .agx-gem-visual {
            height: 220px;
        }
    }

    @media (max-width:650px) {
        .agx-gem-label {
            padding: 10px 12px;
        }

        .agx-gem-tag {
            font-size: 14px;
            line-height: 1.1;
        }

        .agx-gem-hover p {
            line-height: 1.2;
        }

        .agx-gem-btn {
            padding: 10px 20px;
        }
    }

    @media (max-width:480px) {
        .agx-gem-section {
            padding: 10px 10px;
        }
        .agx-gem-label {
            bottom: -10px;
            letter-spacing: normal;
        }

        .agx-gem-card {
            padding: 25px 10px;
        }

        .agx-gem-hover {
            padding: 10px;
        }
    }
</style>