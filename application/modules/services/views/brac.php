<?php
$imgBase = base_url('assets/images/');

$bracelets = [
    // 1–6
    ['title' => 'Red Yamini Bracelet', 'badge' => 'Best Seller', 'rating' => 4.6, 'price' => 169, 'image' => 'c1.png'],
    ['title' => 'Firoz Bracelet', 'badge' => 'New', 'rating' => 4.9, 'price' => 179, 'image' => 'c2.png'],
    ['title' => 'Green Amencturi Bracelet', 'badge' => '', 'rating' => 4.5, 'price' => 179, 'image' => 'c3.png'],
    ['title' => 'Tiger Bracelet', 'badge' => 'Popular', 'rating' => 4.7, 'price' => 209, 'image' => 'c4.png'],
    ['title' => 'Amethyst Bracelet', 'badge' => '', 'rating' => 4.4, 'price' => 299, 'image' => 'c5.png'],
    ['title' => 'gun Metal Bracelet', 'badge' => 'New', 'rating' => 4.8, 'price' => 229, 'image' => 'c6.png'],

    // 7–12
    ['title' => 'Mariyam Bracelet', 'badge' => 'Best Seller', 'rating' => 4.6, 'price' => 229, 'image' => 'c1.png'],
    ['title' => 'Sun Stone Bracelet', 'badge' => '', 'rating' => 4.7, 'price' => 3199, 'image' => 'c2.png'],
    ['title' => 'Dhanyog Bracelet', 'badge' => '', 'rating' => 4.5, 'price' => 1799, 'image' => 'c3.png'],
    ['title' => 'Black Hakik Bracelet', 'badge' => 'Popular', 'rating' => 4.6, 'price' => 1999, 'image' => 'c4.png'],
    ['title' => 'Lapis Lazuli Bracelet', 'badge' => '', 'rating' => 4.4, 'price' => 1899, 'image' => 'c5.png'],
    ['title' => 'Moonstone Bracelet', 'badge' => 'New', 'rating' => 4.8, 'price' => 2599, 'image' => 'c6.png'],

    // 13–18
    ['title' => 'Rose Quartz Love Bracelet', 'badge' => 'Best Seller', 'rating' => 4.7, 'price' => 2199, 'image' => 'c1.png'],
    ['title' => 'Yellow Sapphire Bracelet', 'badge' => '', 'rating' => 4.6, 'price' => 2999, 'image' => 'c2.png'],
    ['title' => 'Onyx Protection Bracelet', 'badge' => '', 'rating' => 4.5, 'price' => 1899, 'image' => 'c3.png'],
    ['title' => 'Hessonite Garnet Bracelet', 'badge' => 'Popular', 'rating' => 4.7, 'price' => 2699, 'image' => 'c4.png'],
    ['title' => 'Pearl Energy Bracelet', 'badge' => '', 'rating' => 4.4, 'price' => 2099, 'image' => 'c5.png'],
    ['title' => 'Cat’s Eye Bracelet', 'badge' => 'New', 'rating' => 4.9, 'price' => 3499, 'image' => 'c6.png'],

    // 19–24
    ['title' => 'Clear Quartz Bracelet', 'badge' => '', 'rating' => 4.5, 'price' => 1799, 'image' => 'c1.png'],
    ['title' => 'Smoky Quartz Bracelet', 'badge' => '', 'rating' => 4.4, 'price' => 1899, 'image' => 'c2.png'],
    ['title' => 'Turquoise Bracelet', 'badge' => 'Best Seller', 'rating' => 4.6, 'price' => 2399, 'image' => 'c3.png'],
    ['title' => 'Bloodstone Bracelet', 'badge' => '', 'rating' => 4.5, 'price' => 1999, 'image' => 'c4.png'],
    ['title' => 'Amazonite Bracelet', 'badge' => '', 'rating' => 4.4, 'price' => 1899, 'image' => 'c5.png'],
    ['title' => 'Sodalite Bracelet', 'badge' => 'New', 'rating' => 4.7, 'price' => 2199, 'image' => 'c6.png'],

    // 25–30
    ['title' => 'Pyrite Wealth Bracelet', 'badge' => 'Popular', 'rating' => 4.6, 'price' => 2499, 'image' => 'c1.png'],
    ['title' => 'Malachite Bracelet', 'badge' => '', 'rating' => 4.5, 'price' => 2299, 'image' => 'c2.png'],
    ['title' => 'Rudraksha Bracelet', 'badge' => 'Best Seller', 'rating' => 4.8, 'price' => 1599, 'image' => 'c3.png'],
    ['title' => 'Tulsi Bead Bracelet', 'badge' => '', 'rating' => 4.4, 'price' => 1299, 'image' => 'c4.png'],
    ['title' => 'Navratna Bracelet', 'badge' => 'New', 'rating' => 4.9, 'price' => 3999, 'image' => 'c5.png'],
    ['title' => 'Gun Metal Magnetic Bracelet', 'badge' => '', 'rating' => 4.6, 'price' => 1899, 'image' => 'c6.png'],
];
?>

<!-- SECTION HEADING -->
<!-- SECTION HEADING (BOOTSTRAP) -->
<div class="text-center mb-5">
    <span class="d-block text-uppercase fw-semibold mb-2"
          style="letter-spacing:4px; color:#c9a14a; font-size:13px;">
        Handcrafted Jewellery
    </span>

    <h2 class="fw-bold mb-3"
        style="font-family:'Playfair Display', serif; font-size:44px;">
        Our Bracelet Collection
    </h2>

    <div class="mx-auto"
         style="width:90px; height:3px;
                background:linear-gradient(90deg,#d4af37,#f6e7b2,#d4af37);">
    </div>
</div>

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
                    <img src="<?= $imgBase . $item['image']; ?>"
                        alt="<?= $item['title']; ?>">
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

                    <button class="brx-btn">
                        <span>Add to Cart</span>
                        <i class="bi bi-cart"></i>
                    </button>
                </div>

            </div>
        </div>
    <?php endforeach; ?>

</div>

<!-- VIEW MORE BUTTON -->


<style>
    body{
    background:#f7ecdf;
    font-family: "Playfair Display","Inter","Segoe UI",sans-serif;
    color:#1f1f1f;
}
    /* ================= SECTION ================= */
    .brx-section {
        padding: 0 70px;
    }

    /* ================= CARD ================= */
    .brx-card {
        background:#f7ecdf;
        border-radius: 22px;
        position: relative;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: all .55s cubic-bezier(.19, 1, .22, 1);
        border: 1px solid rgba(200, 180, 120, .25);
        box-shadow: 0 14px 35px rgba(0, 0, 0, .08);
    }

    .brx-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 70px rgba(0, 0, 0, .14);
    }

    /* ================= BADGE ================= */
    .brx-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        padding: 7px 16px;
        border-radius: 30px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        color: #111;
        background: linear-gradient(135deg, #e7d18f, #d4af37);
        box-shadow: 0 6px 18px rgba(212, 175, 55, .35);
        z-index: 2;
    }

    /* ================= WISHLIST ================= */
    .brx-wishlist {
        position: absolute;
        top: 16px;
        right: 16px;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: rgba(255, 255, 255, .9);
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 8px 20px rgba(0, 0, 0, .12);
        z-index: 2;
    }

    .brx-wishlist i {
        color: #c9a14a;
        font-size: 16px;
    }

    /* ================= IMAGE ================= */
    .brx-image-wrap {
        background: radial-gradient(circle, #ffffff, #efefef);
        padding: 40px 24px 34px;
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .brx-image-wrap img {
        width: 100%;
        height: 240px;
        object-fit: contain;
        transition: transform .6s cubic-bezier(.19, 1, .22, 1);
    }

    .brx-card:hover .brx-image-wrap img {
        transform: scale(1.08);
    }

    /* ================= BODY ================= */
    .brx-body {
        padding: 28px 22px 32px;
        text-align: center;
        display: flex;
        flex-direction: column;
        flex-grow: 1;
    }

    .brx-title {
        font-size: 15.5px;
        font-weight: 600;
        color: #222;
        margin-bottom: 10px;
    }

    /* ================= RATING ================= */
    .brx-rating {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 4px;
        margin-bottom: 10px;
    }

    .brx-rating i {
        color: #f1b400;
        font-size: 14px;
    }

    .brx-rating small {
        font-size: 12px;
        color: #777;
        margin-left: 6px;
    }

    /* ================= PRICE ================= */
    .brx-price {
        font-size: 18px;
        font-weight: 700;
        color: #b89645;
        margin: 16px 0 26px;
    }

    /* ================= BUTTON ================= */
    .brx-btn {
        width: 100%;
        padding: 16px 0;
        border: none;
        border-radius: 35px;
        background: linear-gradient(135deg, #e6d08a, #d4af37);
        color: #111;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 2px;
        cursor: pointer;
        box-shadow: 0 12px 30px rgba(212, 175, 55, .35);
        transition: all .4s ease;
    }

    .brx-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 22px 45px rgba(212, 175, 55, .5);
    }

    /* ================= RESPONSIVE ================= */
    @media(max-width: 1000px) {
        .brx-section {
            padding: 0 30px;
        }

        .brx-image-wrap {
            min-height: 260px;
        }

        .brx-image-wrap img {
            height: 210px;
        }
    }

    @media(max-width: 575px) {
        .brx-section {
            padding: 0 10px;
        }

        .brx-image-wrap {
            min-height: 240px;
            padding: 30px 16px;
        }

        .brx-image-wrap img {
            height: 190px;
        }

        .brx-body {
            padding: 20px 14px 24px;
        }

        .brx-btn {
            padding: 14px 0;
            font-size: 13px;
            letter-spacing: normal;
        }
    }


    /* VIEW MORE */
</style>