<?php
$bracelets = [
    [
        'title' => 'Red Yamini Bracelet',
        'badge' => 'Best Seller',
        'rating' => 4.6,
        'rating_text' => '★★★★☆',
        'price' => 169,
        'image' => 'assets/images/c1.png'
    ],
    [
        'title' => 'Firoz Bracelet',
        'badge' => 'New',
        'rating' => 4.9,
        'rating_text' => '★★★★★',
        'price' => 179,
        'image' => 'assets/images/c2.png'
    ],
    [
        'title' => 'Green Amencturi Bracelet',
        'badge' => '',
        'rating' => 4.5,
        'rating_text' => '★★★★☆',
        'price' => 179,
        'image' => 'assets/images/c3.png'
    ],
    [
        'title' => 'Tiger Bracelet',
        'badge' => 'Popular',
        'rating' => 4.7,
        'rating_text' => '★★★★☆',
        'price' => 209,
        'image' => 'assets/images/c4.png'
    ],
    [
        'title' => 'Amethyst Bracelet',
        'badge' => 'Best Seller',
        'rating' => 4.6,
        'rating_text' => '★★★★☆',
        'price' => 299,
        'image' => 'assets/images/c5.png'
    ],
    [
        'title' => 'gun Metal Bracelet',
        'badge' => 'New',
        'rating' => 4.9,
        'rating_text' => '★★★★★',
        'price' => 3499,
        'image' => 'assets/images/c6.png'
    ],
    [
        'title' => 'Mariyam Bracelet',
        'badge' => '',
        'rating' => 4.5,
        'rating_text' => '★★★★☆',
        'price' => 229,
        'image' => 'assets/images/k2.png'
    ],
    [
        'title' => 'Sun Stone Bracelet',
        'badge' => 'Popular',
        'rating' => 4.7,
        'rating_text' => '★★★★☆',
        'price' => 199,
        'image' => 'assets/images/c8.png'
    ],
    [
        'title' => 'Dhanyog Bracelet',
        'badge' => 'Best Seller',
        'rating' => 4.6,
        'rating_text' => '★★★★☆',
        'price' => 249,
        'image' => 'assets/images/c9.png'
    ],
    [
        'title' => 'Black Hakik Bracelet',
        'badge' => 'New',
        'rating' => 4.9,
        'rating_text' => '★★★★★',
        'price' => 159,
        'image' => 'assets/images/c10.png'
    ],
    [
        'title' => 'Mariyam Bracelet',
        'badge' => '',
        'rating' => 4.5,
        'rating_text' => '★★★★☆',
        'price' => 229,
        'image' => 'assets/images/k2.png'
    ],
    [
        'title' => 'Sodalite Bracelet',
        'badge' => 'Popular',
        'rating' => 4.7,
        'rating_text' => '★★★★☆',
        'price' => 149,
        'image' => 'assets/images/k3.png'
    ]
];
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
                    <img src="<?= $item['image']; ?>" alt="<?= $item['title']; ?>">
                </div>

                <div class="brx-body">
                    <h4 class="brx-title"><?= $item['title']; ?></h4>

                    <div class="brx-rating">
                        <?php for ($i = 1; $i <= 5; $i++): ?>
                            <i class="bi <?= $i <= round($item['rating']) ? 'bi-star-fill' : 'bi-star'; ?>"></i>
                        <?php endfor; ?>
                        <small>(<?= $item['rating']; ?>)</small>
                    </div>

                    <div class="brx-price">₹<?= number_format($item['price']); ?></div>

                    <a href="braclet" class="brx-btn">
                        <span>Shop</span>
                        <i class="bi bi-cart"></i>
                    </a>

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