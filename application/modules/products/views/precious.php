<?php
$imgBase = base_url('assets/uploads/product/');
$items = isset($items) && is_array($items) ? $items : [];
?>

<div class="container-fluid py-5 lux-section">
    <div class="lux-particles"></div>

    <!-- HEADING -->
    <div class="text-center mb-5 position-relative" style="z-index:2;">
        <span style="
            font-size:13px;
            letter-spacing:4px;
            color:#c9a14a;
            font-weight:600;
            text-transform:uppercase;
            display:block;
            margin-bottom:12px;">
            Collection
        </span>

        <h2 style="
            font-family:'Playfair Display', serif;
            font-size:46px;
            font-weight:700;
            color:#111;
            margin-bottom:14px;">
            Precious Gems
        </h2>

        <div style="
            width:90px;
            height:3px;
            margin:0 auto;
            background:linear-gradient(90deg,#c9a14a,#f6e7b2,#c9a14a);">
        </div>
    </div>

    <!-- CARDS -->
    <div class="row g-4 position-relative">

        <?php if (!empty($items)): foreach ($items as $item): ?>
            <div class="col-6 col-md-4">

                <div class="lux-gem-card">
                    <img src="<?= $imgBase . ($item['image'] ?? ''); ?>"
                         alt="<?= htmlspecialchars($item['title'] ?? ''); ?>">

                    <div class="lux-overlay">
                        <span class="lux-name">
                            <?= htmlspecialchars($item['title'] ?? ''); ?>
                        </span>

                        <div class="lux-hover">
                            <div class="lux-line"></div>
                            <h3><?= htmlspecialchars($item['title'] ?? ''); ?></h3>
                            <p>Premium Certified Gemstone</p>
                        </div>
                    </div>
                </div>

                <div class="lux-footer">
                    <a href="<?= base_url('gem/' . ($item['g_key'] ?? '')); ?>"
                       class="lux-btn">
                        VIEW DETAILS
                    </a>
                </div>

            </div>
        <?php endforeach; else: ?>
            <div class="col-12 text-center">
                No precious gems found.
            </div>
        <?php endif; ?>

    </div>
</div>

<style>
    .lux-gem-card{
    position:relative;
    height:300px;
    border-radius:14px;
    background:#f7ecdf;
    box-shadow:inset 0 0 0 1px rgba(0,0,0,.06),0 14px 32px rgba(0,0,0,.12);
    overflow:hidden;
    cursor:pointer;
    z-index:1;
}

.lux-gem-card img{
    width:100%;
    height:100%;
    object-fit:contain;
    transform:translateY(10px);
    transition:.9s cubic-bezier(.19,1,.22,1);
    filter:drop-shadow(0 28px 38px rgba(108,94,94,.6));
}

/* OVERLAY */
.lux-overlay{
    position:absolute;
    inset:0;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:30px;
}

.lux-overlay::after{
    content:"";
    position:absolute;
    inset:0;
    background:radial-gradient(circle,rgba(0,0,0,.25),rgba(0,0,0,.55));
    opacity:0;
    transition:.6s;
    z-index:-1;
}

.lux-name{
    color:#fff;
    font-size:22px;
    letter-spacing:4px;
    text-shadow:0 2px 16px rgba(0,0,0,.8);
    transition:.5s;
}

.lux-hover{
    position:absolute;
    opacity:0;
    transform:translateY(30px);
    transition:.6s cubic-bezier(.19,1,.22,1);
}

.lux-hover h3{color:#fff;letter-spacing:3px;}
.lux-hover p{font-size:14px;color:#eee;}

.lux-line{
    width:0;
    height:2px;
    background:linear-gradient(90deg,#c9a14a,#f6e7b2,#c9a14a);
    margin:0 auto 14px;
    transition:.6s;
}

/* HOVER */
.lux-gem-card:hover img{transform:translateY(-14px) scale(1.05);}
.lux-gem-card:hover .lux-overlay::after{opacity:1;}
.lux-gem-card:hover .lux-name{opacity:0;transform:translateY(-20px);}
.lux-gem-card:hover .lux-hover{opacity:1;transform:translateY(0);}
.lux-gem-card:hover .lux-line{width:80px;}

/* FOOTER */
.lux-footer{text-align:center;padding:26px 10px 36px;}

/* BUTTON */
.lux-btn{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    padding:14px 60px;
    border-radius:50px;
    background:linear-gradient(180deg,#f6e7b2,#c9a14a);
    border:1px solid #c9a14a;
    color:#3a2a00;
    font-size:13px;
    letter-spacing:3px;
    font-weight:700;
    text-decoration:none;
    transition:.4s;
}

.lux-btn:hover{
    transform:translateY(-3px);
    box-shadow:0 18px 36px rgba(201,161,74,.55);
    color:#000;
}

/* RESPONSIVE */
@media(max-width:965px){.lux-section{padding:0 30px}.lux-gem-card{height:240px}}
@media(max-width:540px){.lux-section{padding:0 10px}.lux-btn{width:100%}}
</style>