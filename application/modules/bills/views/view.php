<div class="lux-cert-body">

    <!-- LEFT : DETAILS -->
    <div class="lux-cert-details">

        <?php if (!empty($bill['c_no'])) : ?>
        <div class="lux-cert-row lux-cert-no">
            <span>Certificate No : </span>
            <span><?php echo html_escape($bill['c_no']); ?></span>
        </div>
        <?php endif; ?>
        <?php if (!empty($bill['l_no'])) : ?>
        <div class="lux-cert-row lux-cert-no">
            <span>Certificate No : </span>
            <span><?php echo html_escape($bill['l_no']); ?></span>
        </div>
        <?php endif; ?>

        <table class="lux-cert-table">
            <?php if (!empty($bill['weight'])) : ?>
           <tr>
                <td>Weight</td>
                <td><?php echo html_escape($bill['weight']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['shape'])) : ?>
             <tr>
                <td>Shape / Cut</td>
                <td><?php echo html_escape($bill['shape']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['dimensions'])) : ?>
             <tr>
                <td>Dimensions</td>
                <td><?php echo html_escape($bill['dimensions']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['gravity'])) : ?>
             <tr>
                <td>Specific Gravity</td>
                <td><?php echo html_escape($bill['gravity']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['r_index'])) : ?>
              <tr>
                <td>Refractive Index</td>
                <td><?php echo html_escape($bill['r_index']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['variety'])) : ?>
              <tr>
                <td>Variety</td>
                <td><?php echo html_escape($bill['variety']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['species'])) : ?>
              <tr>
                <td>Species</td>
                <td><?php echo html_escape($bill['species']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['origin'])) : ?>
              <tr>
                <td>Origin</td>
                <td><?php echo html_escape($bill['origin']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['t_category'])) : ?>
              <tr>
                <td>Testing category</td>
                <td><?php echo html_escape($bill['t_category']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['specimen'])) : ?>
              <tr>
                <td>Specimen</td>
                <td><?php echo html_escape($bill['specimen']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['comments'])) : ?>
              <tr>
                <td>Comments</td>
                <td><?php echo html_escape($bill['comments']); ?></td>
            </tr>
            <?php endif; ?>
            <?php if (!empty($bill['conclusion'])) : ?>
              <tr>
                <td>Conclusion</td>
                <td><?php echo html_escape($bill['conclusion']); ?></td>
            </tr>
            <?php endif; ?>
        </table>

    </div>

    <!-- RIGHT : IMAGES -->
    <div class="lux-cert-media">

        <div class="lux-stone-image">
            <img src="<?php echo base_url('assets/uploads/gems/' . $bill['image']); ?>" alt="Gemstone">
        </div>

        <div class="lux-qr-box">
            <img src="<?php echo base_url('assets/qrcodes/' . $bill['qr_image']); ?>" alt="QR Code">
            <span>VERIFIED DIGITAL CERTIFICATE</span>
        </div>

    </div>

</div>
<style>
    .lux-cert-body {
    display: flex;
    gap: 40px;
    flex-wrap: wrap;
    padding: 30px 0;
}

/* LEFT SIDE */
.lux-cert-details {
    flex: 1;
    margin-left: 10px;
}

.lux-cert-no {
    margin-bottom: 20px;
    font-size: 13px;
    letter-spacing: 2px;
    color: #c9a14a;
}

.lux-cert-no strong {
    display: block;
    color: #fff;
    font-size: 15px;
    margin-top: 4px;
}

.lux-cert-table {
    width: 100%;
    border-collapse: collapse;
}

.lux-cert-table td {
    padding: 10px 0;
    font-size: 14px;
    vertical-align: top;
}

.lux-cert-table td:first-child {
    width: 45%;
    color: #c9a14a;
    letter-spacing: 1.5px;
}

.lux-cert-table tr:not(:last-child) {
    border-bottom: 1px solid rgba(201,161,74,.15);
}

.lux-comments td {
    padding-top: 16px;
}

/* RIGHT SIDE */
.lux-cert-media {
    width: 260px;
    text-align: center;
}

.lux-stone-image {
    background: #111;
    padding: 14px;
    border-radius: 12px;
    border: 1px solid rgba(201,161,74,.35);
    margin-bottom: 20px;
}

.lux-stone-image img {
    width: 100%;
    object-fit: contain;
}

.lux-qr-box {
    padding: 14px;
    background: #0d0d0d;
    border-radius: 12px;
    border: 1px solid rgba(201,161,74,.35);
}

.lux-qr-box img {
    width: 100%;
}

.lux-qr-box span {
    display: block;
    margin-top: 10px;
    font-size: 11px;
    letter-spacing: 2px;
    color: #f1d27a;
}

</style>