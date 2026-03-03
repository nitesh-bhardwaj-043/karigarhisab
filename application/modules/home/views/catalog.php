<?php
$catalogs = [
    [
        'title' => 'PRECIOUS GEMS',
        'description' => 'Ruby, Sapphire, Emerald & Diamond – certified and natural.',
        'image' => 'assets/images/d1.png',
        'link' => '#'
    ],
    [
        'title' => 'SEMI PRECIOUS',
        'description' => 'Amethyst, Peridot, Garnet, Citrine & more.',
        'image' => 'assets/images/d2.png',
        'link' => '#'
    ],
    [
        'title' => 'BIRTHSTONES',
        'description' => 'Month-wise gemstones for luck, success & harmony.',
        'image' => 'assets/images/d3.png',
        'link' => '#'
    ],
    [
        'title' => 'Bracelets',
        'description' => 'Rudraksha Bracelets.',
        'image' => 'assets/images/c1.png',
        'link' => '#'
    ]
];
?>

<section class="catalog-section">
    <div class="container-fluid px-lg-5">
        <div class="row g-4">
            <?php foreach ($catalogs as $catalog): ?>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="catalog-card">

                        <div class="catalog-img">
                            <img src="<?= base_url($catalog['image']); ?>" alt="<?= $catalog['title']; ?>">
                        </div>

                        <div class="catalog-body">
                            <h4><?= $catalog['title']; ?></h4>
                            <p><?= $catalog['description']; ?></p>
                            <a href="<?= $catalog['link']; ?>" class="catalog-btn">VIEW COLLECTION</a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<style>
    body{
    background:#f7ecdf;
    font-family: "Playfair Display","Inter","Segoe UI",sans-serif;
    color:#1f1f1f;
}
    .catalog-section {
        padding: 40px 20px;
         background: #f7ecdf;
    }

    /* CARD */
  .catalog-card {
    height: 100%;
    background: #f7ecdf;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.08);
    transition: .35s ease;
    border: 1px solid rgba(0,0,0,0.05);
}


    .catalog-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 28px 55px rgba(0, 0, 0, 0.12);
}


    /* IMAGE */
    .catalog-img {
    height: 200px;
    background: radial-gradient(circle, #ffffff, #f2f2f2);
    display: flex;
    align-items: center;
    justify-content: center;
}


    .catalog-img img {
        max-width: 70%;
        max-height: 70%;
        object-fit: contain;
        transition: .35s ease;
    }

    .catalog-card:hover .catalog-img img {
        transform: scale(1.1);
    }

    /* BODY */
    .catalog-body {
        padding: 22px;
        text-align: center;
    }

    .catalog-body h4 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #111;
    }

    .catalog-body p {
        font-size: 14px;
        line-height: 1.7;
        color: #666;
        margin-bottom: 18px;
    }

    /* BUTTON */
    .catalog-btn {
        display: inline-block;
        padding: 11px 34px;
        background: linear-gradient(135deg, #c9a14a, #e6c46a);
        color: #fff;
        font-size: 13px;
        font-weight: 600;
        border-radius: 40px;
        letter-spacing: 1px;
        text-decoration: none;
        transition: .3s ease;
    }

    .catalog-btn:hover {
        background: #b08d3c;
        transform: translateY(-3px);
        color: #fff;
    }

    /* RESPONSIVE */
    @media (max-width:900px) {
        .catalog-body {
            padding: 12px;
        }

        .catalog-body p {
            font-size: 13px;
        }
    }

    @media(max-width:768px) {
        .catalog-img {
            height: 170px;
        }

        .catalog-section {
            padding: 20px 0px;
        }
    }

    @media (max-width:500px) {
        .catalog-btn {
            padding: 11px 20px;
        }

        .catalog-body p {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    }

    @media(max-width:410px) {
        .catalog-body h4 {
            font-size: 16px
        }

        .catalog-btn {
            font-size: 12px;
            padding: 8px 8px
        }
    }
</style>