<style>
body{
    background:#f7ecdf;
    font-family: "Playfair Display","Inter","Segoe UI",sans-serif;
    color:#1f1f1f;
}

.product-section{
    padding:40px 0;
}

/* IMAGE BOX */
.product-image-box{
    background:#ffffff;
    padding:22px;
    border-radius:18px;
    position:relative;
    box-shadow:0 12px 30px rgba(0,0,0,0.08);
}

/* MAIN IMAGE */
.product-image-box .main-img{
    width:100%;
    border-radius:14px;
    margin-bottom:14px;
}

/* THUMB IMAGES */
.thumb-box{
    display:flex;
    gap:12px;
}

.thumb-box img{
    width:48%;
    border-radius:12px;
    border:2px solid #eee;
    cursor:pointer;
    transition:0.3s;
}

.thumb-box img:hover{
    border-color:#d4af37;
    transform:scale(1.03);
}

/* BADGE */
.best-selling{
    position:absolute;
    top:18px;
    right:18px;
    background:#b71c1c;
    color:#fff;
    padding:7px 14px;
    font-size:12px;
    font-weight:700;
    border-radius:6px;
    letter-spacing:0.5px;
}

/* BRAND */
.brand{
    font-size:15px;
    letter-spacing:3px;
    color:#000;
    font-weight:700;
    margin-bottom:10px;
    text-transform:uppercase;
    border-bottom:2px solid #d4af37;
    display:inline-block;
    padding-bottom:6px;
}

/* TITLE */
.product-title{
    font-size:30px;
    font-weight:700;
    line-height:1.35;
    margin-bottom:18px;
}

/* PRICE */
.price del{
    color:#9e9e9e;
    font-size:17px;
    font-weight:500;
}

.price span{
    font-size:28px;
    font-weight:700;
    margin-left:8px;
}

.sale-badge{
    background:#000;
    color:#fff;
    font-size:12px;
    padding:5px 14px;
    border-radius:20px;
    margin-left:12px;
    font-weight:600;
}

/* QTY */
.qty-box{
    display:inline-flex;
    border:1px solid #aaa;
    border-radius:8px;
    overflow:hidden;
}

.qty-box button{
    width:44px;
    background:#fff;
    border:none;
    font-size:20px;
    font-weight:600;
}

.qty-box input{
    width:64px;
    border:none;
    text-align:center;
    font-size:16px;
    font-weight:600;
}

/* PREMIUM SHOP BUTTON */
.shop-btn{
    display:inline-block;
    margin-top:22px;
    background:linear-gradient(135deg,#d4af37,#b8962e);
    color:#111;
    padding:16px 42px;
    border-radius:50px;
    font-size:15px;
    font-weight:800;
    text-decoration:none;
    letter-spacing:1px;
    box-shadow:0 10px 25px rgba(212,175,55,0.45);
    transition:0.35s;
}

.shop-btn:hover{
    background:linear-gradient(135deg,#000,#000);
    color:#fff;
    transform:translateY(-2px);
}

/* DESCRIPTION */
.product-desc{
    margin-top:34px;
    font-size:15px;
    line-height:1.9;
    color:#444;
    font-weight:500;
}

/* SPECS */
.specs{
    margin-top:40px;
    background:#fff;
    padding:22px;
    border-radius:14px;
    box-shadow:0 8px 22px rgba(0,0,0,0.06);
}

.specs h6{
    font-weight:800;
    letter-spacing:1px;
    margin-bottom:16px;
}

.spec-row{
    display:flex;
    justify-content:space-between;
    padding:14px 0;
    border-bottom:1px dashed #ddd;
    font-size:14px;
}

.spec-row:last-child{
    border-bottom:none;
}

.spec-row span:first-child{
    font-weight:700;
    color:#555;
}

.spec-row span:last-child{
    font-weight:800;
    color:#000;
}

/* MOBILE */
@media(max-width:768px){
    .product-title{
        font-size:24px;
    }

    .price span{
        font-size:22px;
    }

    .shop-btn{
        width:100%;
        text-align:center;
    }

    .product-section{
        padding:25px 15px;
    }
}
</style>

<div class="container product-section">
    <div class="row g-4">

        <!-- IMAGE -->
        <div class="col-md-6">
            <div class="product-image-box">
                <span class="best-selling">BEST SELLING</span>

                <img class="main-img" src="<?= base_url('assets/images/c1.png'); ?>" alt="Money Magnet Bracelet">

                <div class="thumb-box">
                    <img src="<?= base_url('assets/images/c1.png'); ?>" alt="">
                    <img src="<?= base_url('assets/images/c1.png'); ?>" alt="">
                </div>
            </div>
        </div>

        <!-- DETAILS -->
        <div class="col-md-6">
            <div class="brand">Ananya Gems & Jewels</div>

            <h1 class="product-title">
                Red Yamini Bracelet – Energized & Certified
            </h1>

            <div class="price mb-3">
                <del>Rs. 999.00</del>
                <span>Rs. 499.00</span>
                <span class="sale-badge">Sale</span>
            </div>

            <!-- QUANTITY -->
            <div class="mb-3">
                <label class="mb-1 fw-semibold">Quantity</label><br>
                <div class="qty-box">
                    <button>-</button>
                    <input type="text" value="1">
                    <button>+</button>
                </div>
            </div>

            <!-- SHOP NOW -->
            <a href="https://wa.me/917549225345" class="shop-btn">
                BUY NOW ON WHATSAPP
            </a>

            <!-- DESCRIPTION -->
            <div class="product-desc">
                <p>
                    The <strong>Red Yamini Bracelet</strong> is crafted using premium,
                    energized natural beads designed to attract
                    <strong>wealth, prosperity, and financial stability</strong>.
                </p>
                <p>
                    Each bracelet is <strong>energized, certified, and blessed</strong>,
                    ideal for entrepreneurs, professionals, and success seekers.
                </p>
            </div>

            <!-- SPECIFICATIONS -->
            <div class="specs">
                <h6>SPECIFICATIONS</h6>

                <div class="spec-row">
                    <span>Brand</span>
                    <span>Ananya Gems & Jewels</span>
                </div>

                <div class="spec-row">
                    <span>Size</span>
                    <span>8 MM</span>
                </div>

                <div class="spec-row">
                    <span>Type</span>
                    <span>Bracelet</span>
                </div>

                <div class="spec-row">
                    <span>Color</span>
                    <span>Multi Color</span>
                </div>

                <div class="spec-row">
                    <span>Material</span>
                    <span>Natural Beads</span>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="brx-heading-wrap">
    <h2 class="brx-heading">See More Collection</h2>
</div>

<?php
$imgBase = base_url('assets/images/');

$bracelets = [
    // 1–6
    ['title'=>'Ruby Energy Bracelet','badge'=>'Best Seller','rating'=>4.6,'price'=>2999,'image'=>'c1.png'],
    ['title'=>'Emerald Healing Bracelet','badge'=>'New','rating'=>4.9,'price'=>3499,'image'=>'c2.png'],
    ['title'=>'Amethyst Calm Bracelet','badge'=>'','rating'=>4.5,'price'=>1999,'image'=>'c3.png'],
    ['title'=>'Tiger Eye Power Bracelet','badge'=>'Popular','rating'=>4.7,'price'=>2499,'image'=>'c4.png'],
    ['title'=>'Sun Stone Bracelet','badge'=>'','rating'=>4.4,'price'=>1899,'image'=>'c5.png'],
    ['title'=>'Black Hakik Bracelet','badge'=>'New','rating'=>4.8,'price'=>2799,'image'=>'c6.png'],
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
/* ================= HEADING ================= */
.brx-heading-wrap{
    padding: 0 70px;
    margin-bottom: 24px;
}

.brx-heading{
    font-size: 28px;
    font-weight: 700;
    letter-spacing: 1px;
    color: #1f1f1f;
    position: relative;
    display: inline-block;
    padding-bottom: 10px;
}

.brx-heading::after{
    content:'';
    position:absolute;
    left:0;
    bottom:0;
    width:70px;
    height:3px;
    background: linear-gradient(135deg,#e6d08a,#d4af37);
    border-radius:2px;
}

/* Responsive */
@media(max-width:1000px){
    .brx-heading-wrap{
        padding: 0 30px;
    }
}

@media(max-width:575px){
    .brx-heading-wrap{
        padding: 0 10px;
    }

    .brx-heading{
        font-size: 22px;
    }
}


/* ================= SECTION ================= */
.brx-section{
    padding: 0 70px;
}

/* ================= CARD ================= */
.brx-card{
    background: linear-gradient(180deg, #ffffff, #f9f9f9);
    border-radius: 22px;
    position: relative;
    overflow: hidden;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: all .55s cubic-bezier(.19,1,.22,1);
    border: 1px solid rgba(200,180,120,.25);
    box-shadow: 0 14px 35px rgba(0,0,0,.08);
}

.brx-card:hover{
    transform: translateY(-10px);
    box-shadow: 0 30px 70px rgba(0,0,0,.14);
}

/* ================= BADGE ================= */
.brx-badge{
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
    background: linear-gradient(135deg,#e7d18f,#d4af37);
    box-shadow: 0 6px 18px rgba(212,175,55,.35);
    z-index: 2;
}

/* ================= WISHLIST ================= */
.brx-wishlist{
    position: absolute;
    top: 16px;
    right: 16px;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255,255,255,.9);
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    box-shadow: 0 8px 20px rgba(0,0,0,.12);
    z-index: 2;
}

.brx-wishlist i{
    color: #c9a14a;
    font-size: 16px;
}

/* ================= IMAGE ================= */
.brx-image-wrap{
    background: radial-gradient(circle, #ffffff, #efefef);
    padding: 40px 24px 34px;
    min-height: 300px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.brx-image-wrap img{
    width: 100%;
    height: 240px;
    object-fit: contain;
    transition: transform .6s cubic-bezier(.19,1,.22,1);
}

.brx-card:hover .brx-image-wrap img{
    transform: scale(1.08);
}

/* ================= BODY ================= */
.brx-body{
    padding: 28px 22px 32px;
    text-align: center;
    display: flex;
    flex-direction: column;
    flex-grow: 1;
}

.brx-title{
    font-size: 15.5px;
    font-weight: 600;
    color: #222;
    margin-bottom: 10px;
}

/* ================= RATING ================= */
.brx-rating{
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 4px;
    margin-bottom: 10px;
}

.brx-rating i{
    color: #f1b400;
    font-size: 14px;
}

.brx-rating small{
    font-size: 12px;
    color: #777;
    margin-left: 6px;
}

/* ================= PRICE ================= */
.brx-price{
    font-size: 18px;
    font-weight: 700;
    color: #b89645;
    margin: 16px 0 26px;
}

/* ================= BUTTON ================= */
.brx-btn{
    width: 100%;
    padding: 16px 0;
    border: none;
    border-radius: 35px;
    background: linear-gradient(135deg,#e6d08a,#d4af37);
    color: #111;
    font-weight: 700;
    font-size: 14px;
    letter-spacing: 2px;
    cursor: pointer;
    box-shadow: 0 12px 30px rgba(212,175,55,.35);
    transition: all .4s ease;
}

.brx-btn:hover{
    transform: translateY(-3px);
    box-shadow: 0 22px 45px rgba(212,175,55,.5);
}

/* ================= RESPONSIVE ================= */
@media(max-width: 1000px){
    .brx-section{
        padding: 0 30px;
    }

    .brx-image-wrap{
        min-height: 260px;
    }

    .brx-image-wrap img{
        height: 210px;
    }
}

@media(max-width: 575px){
    .brx-section{
        padding: 0 10px;
    }

    .brx-image-wrap{
        min-height: 240px;
        padding: 30px 16px;
    }

    .brx-image-wrap img{
        height: 190px;
    }

    .brx-body{
        padding: 20px 14px 24px;
    }

    .brx-btn{
        padding: 14px 0;
        font-size: 13px;
        letter-spacing: normal;
    }
}


/* VIEW MORE */

</style>