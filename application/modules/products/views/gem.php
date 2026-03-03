<?php
$imgBase = base_url('assets/uploads/product/');
$imgBase2 = base_url('assets/uploads/moreitems/');
$item = isset($item) ? $item : null;
$related = isset($related) && is_array($related) ? $related : [];
$categories = isset($categories) && is_array($categories) ? $categories : [];
?>

<?php if (!$item): ?>
    <div class="container">
        <p>Item not found.</p>
    </div>
<?php else: ?>

    <div class="container product-section">
        <div class="row g-4">

            <!-- IMAGE -->
            <div class="col-md-6">
                <div class="product-image-box">

                    <img class="main-img"
                        src="<?= $imgBase . ($item['image'] ?? ''); ?>"
                        alt="<?= htmlspecialchars($item['title']); ?>">

                </div>

                <div class="product-desc">
                    <?= !empty($item['description']) ? nl2br(htmlspecialchars($item['description'])) : ''; ?>
                </div>
            </div>

            <!-- DETAILS -->
            <div class="col-md-6">
                <div class="brand">Ananya Gems & Jewels</div>

                <h1 class="product-title"><?= htmlspecialchars($item['title']); ?></h1>

                <a href="https://wa.me/917877040552?text=I%20am%20interested%20in%20<?= urlencode($item['title']); ?>"
                    class="shop-btn">
                    INQUIRE ON WHATSAPP
                </a>

                <!-- SPECIFICATIONS -->
                <div class="specs">
                    <h6>SPECIFICATIONS</h6>

                    <div class="spec-row">
                        <span>Gemstone</span>
                        <span><?= htmlspecialchars($item['title']); ?></span>
                    </div>

                    <div class="spec-row">
                        <span>Category</span>
                        <span>Natural Gemstone</span>
                    </div>

                    <div class="spec-row">
                        <span>Certification</span>
                        <span>Lab Certified</span>
                    </div>

                    <div class="spec-row">
                        <span>Origin</span>
                        <span>Natural</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php if (!empty($categories)): ?>


        <div class="brx-heading-wrap">
            <h2 class="brx-heading">Categories</h2>
        </div>

        <div class="row g-4 brx-section">

            <?php if (!empty($categories)): foreach ($categories as $r): ?>
                    <div class="col-md-4 col-6">

                        <div class="brx-card">

                            <div class="brx-image-wrap">
                                <img src="<?= $imgBase2 . ($r['image'] ?? ''); ?>"
                                    alt="<?= htmlspecialchars($r['title']); ?>">
                            </div>

                            <div class="brx-body">
                                <h4 class="brx-title"><?= htmlspecialchars($r['title']); ?></h4>
                                <p>Price : <?= htmlspecialchars($r['price']); ?></p>
                                <?php if (!empty($r['origin'])): ?>
                                    <p>Origin : <?= htmlspecialchars($r['origin']); ?></p>
                                <?php endif; ?>

                                <a class="brx-btn"
                                    href="https://wa.me/917549225345?text=I%20am%20interested%20in%20<?= urlencode($r['title']); ?>">
                                    <span>Inquire</span>
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                        </div>
                    </div>
                <?php endforeach; endif; ?>

        </div>
    <?php endif; ?>

    <!-- ================= RELATED ================= -->

    <div class="brx-heading-wrap">
        <h2 class="brx-heading">Related Gems</h2>
    </div>

    <div class="row g-4 brx-section">

        <?php if (!empty($related)): foreach ($related as $r): ?>
                <div class="col-md-4 col-6">

                    <div class="brx-card">

                        <div class="brx-image-wrap">
                            <img src="<?= $imgBase . ($r['image'] ?? ''); ?>"
                                alt="<?= htmlspecialchars($r['title']); ?>">
                        </div>

                        <div class="brx-body">
                            <h4 class="brx-title"><?= htmlspecialchars($r['title']); ?></h4>

                            <a class="brx-btn"
                                href="<?= base_url('gem/' . ($r['g_key'] ?? '')); ?>">
                                <span>View</span>
                                <i class="bi bi-arrow-right"></i>
                            </a>
                        </div>

                    </div>
                </div>
            <?php endforeach;
        else: ?>
            <div class="col-12">No related gems found.</div>
        <?php endif; ?>

    </div>

<?php endif; ?>
<style>
    /* ================= BASE ================= */
    body {
        background: #f7ecdf;
        font-family: "Playfair Display", "Inter", "Segoe UI", sans-serif;
        color: #1f1f1f;
    }

    /* ================= PRODUCT SECTION ================= */
    .product-section {
        padding: 40px 0;
    }

    /* IMAGE BOX */
    .product-image-box {
        background: #fff;
        padding: 22px;
        border-radius: 18px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, .08);
    }

    /* MAIN IMAGE */
    .product-image-box .main-img {
        width: 100%;
        border-radius: 14px;
    }

    /* BRAND */
    .brand {
        font-size: 15px;
        letter-spacing: 3px;
        font-weight: 700;
        text-transform: uppercase;
        border-bottom: 2px solid #d4af37;
        display: inline-block;
        padding-bottom: 6px;
        margin-bottom: 12px;
    }

    /* TITLE */
    .product-title {
        font-size: 30px;
        font-weight: 700;
        line-height: 1.35;
        margin-bottom: 22px;
    }

    /* DESCRIPTION */
    .product-desc {
        margin-top: 30px;
        font-size: 15px;
        line-height: 1.9;
        color: #444;
    }

    /* SHOP BUTTON */
    .shop-btn {
        display: inline-block;
        margin-top: 24px;
        background: linear-gradient(135deg, #d4af37, #b8962e);
        color: #111;
        padding: 16px 42px;
        border-radius: 50px;
        font-size: 15px;
        font-weight: 800;
        text-decoration: none;
        letter-spacing: 1px;
        box-shadow: 0 10px 25px rgba(212, 175, 55, .45);
        transition: .35s;
    }

    .shop-btn:hover {
        background: #000;
        color: #fff;
        transform: translateY(-2px);
    }

    /* ================= SPECS ================= */
    .specs {
        margin-top: 40px;
        background: #fff;
        padding: 22px;
        border-radius: 14px;
        box-shadow: 0 8px 22px rgba(0, 0, 0, .06);
    }

    .specs h6 {
        font-weight: 800;
        letter-spacing: 1px;
        margin-bottom: 16px;
    }

    .spec-row {
        display: flex;
        justify-content: space-between;
        padding: 14px 0;
        border-bottom: 1px dashed #ddd;
        font-size: 14px;
    }

    .spec-row:last-child {
        border-bottom: none;
    }

    .spec-row span:first-child {
        font-weight: 700;
        color: #555;
    }

    .spec-row span:last-child {
        font-weight: 800;
        color: #000;
    }

    /* ================= RELATED HEADING ================= */
    .brx-heading-wrap {
        padding: 0 70px;
        margin: 40px 0 24px;
    }

    .brx-heading {
        font-size: 28px;
        font-weight: 700;
        letter-spacing: 1px;
        position: relative;
        padding-bottom: 10px;
    }

    .brx-heading::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 70px;
        height: 3px;
        background: linear-gradient(135deg, #e6d08a, #d4af37);
    }

    /* ================= RELATED SECTION ================= */
    .brx-section {
        padding: 0 70px;
    }

    /* CARD */
    .brx-card {
        background: linear-gradient(180deg, #fff, #f9f9f9);
        border-radius: 22px;
        overflow: hidden;
        height: 100%;
        transition: .55s cubic-bezier(.19, 1, .22, 1);
        border: 1px solid rgba(200, 180, 120, .25);
        box-shadow: 0 14px 35px rgba(0, 0, 0, .08);
    }

    .brx-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 70px rgba(0, 0, 0, .14);
    }

    /* IMAGE */
    .brx-image-wrap {
        background: radial-gradient(circle, #fff, #efefef);
        padding: 40px 24px;
        min-height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .brx-image-wrap img {
        width: 100%;
        height: 240px;
        object-fit: contain;
        transition: .6s cubic-bezier(.19, 1, .22, 1);
    }

    .brx-card:hover .brx-image-wrap img {
        transform: scale(1.08);
    }

    /* BODY */
    .brx-body {
        padding: 28px 22px 32px;
        text-align: center;
    }

    .brx-title {
        font-size: 15.5px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    /* BUTTON */
    .brx-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        width: 100%;
        padding: 16px 0;
        border-radius: 35px;
        background: linear-gradient(135deg, #e6d08a, #d4af37);
        color: #111;
        font-weight: 700;
        font-size: 14px;
        letter-spacing: 2px;
        text-decoration: none;
        box-shadow: 0 12px 30px rgba(212, 175, 55, .35);
        transition: .4s;
    }

    .brx-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 22px 45px rgba(212, 175, 55, .5);
    }

    /* ================= RESPONSIVE ================= */
    @media(max-width:1000px) {

        .brx-section,
        .brx-heading-wrap {
            padding: 0 30px
        }
    }

    @media(max-width:575px) {

        .brx-section,
        .brx-heading-wrap {
            padding: 0 10px
        }

        .product-title {
            font-size: 24px
        }

        .shop-btn {
            width: 100%;
            text-align: center
        }
    }
</style>