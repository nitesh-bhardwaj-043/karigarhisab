<!-- ================= HERO SECTION ================= -->
<section class="lux-hero">
    <p class="lux-tagline">SIMPLE • PERSONAL • TRUSTED</p>
    <h1 class="lux-title">HOW TO ORDER</h1>
    <span class="lux-divider"></span>

    <p class="lux-subtext">
        At <strong>Ananya Gems & Jewels</strong>, we believe in personal guidance and
        transparent communication. Currently, all orders are accepted directly
        through WhatsApp for a seamless and assisted buying experience.
    </p>
</section>

<!-- ================= HOW TO ORDER CONTENT ================= -->
<div class="order-page">

    <!-- INTRO -->
    <section class="order-section">
        <p>
            Ordering from Ananya Gems & Jewels is simple and personalized.
            Our team assists you at every step — from gemstone selection
            to certification details and final confirmation.
        </p>
    </section>

    <!-- FLOWCHART -->
    <section class="order-section">
        <h2>Order Flow</h2>

        <div class="order-flow">
            <div class="flow-step">
                <span>1</span>
                <p>Browse our gemstone collection on the website</p>
            </div>

            <div class="flow-line"></div>

            <div class="flow-step">
                <span>2</span>
                <p>Contact us on WhatsApp with the gemstone you like</p>
            </div>

            <div class="flow-line"></div>

            <div class="flow-step">
                <span>3</span>
                <p>Receive gemstone details, images, price & certification info</p>
            </div>

            <div class="flow-line"></div>

            <div class="flow-step">
                <span>4</span>
                <p>Confirm your order after consultation</p>
            </div>

            <div class="flow-line"></div>

            <div class="flow-step">
                <span>5</span>
                <p>Secure payment & insured shipping</p>
            </div>
        </div>
    </section>

    <!-- DETAILS -->
    <section class="order-section">
        <h2>Why WhatsApp Ordering?</h2>
        <ul>
            <li>Personal assistance from gemstone experts</li>
            <li>Real images and videos of available stones</li>
            <li>Transparent pricing and certification details</li>
            <li>Custom recommendations based on your needs</li>
        </ul>
    </section>

    <!-- PAYMENT -->
    <section class="order-section">
        <h2>Payment & Shipping</h2>
        <p>
            Once the order is confirmed, payment details will be shared securely.
            All shipments are carefully packed and insured before dispatch.
        </p>
        <p>
            Orders are usually shipped within <strong>3–7 business days</strong>
            after payment confirmation.
        </p>
    </section>

    <!-- CONTACT -->
    <section class="order-section">
        <h2>Place Your Order</h2>
        <p>
            📲 <strong>WhatsApp:</strong> +91 99293 57718<br>
            📍 Johari Bazar, Jaipur – Rajasthan, India<br>
            📧 bijendra8181@gmail.com
        </p>
    </section>

</div>

<!-- ================= STYLES ================= -->
<style>
body{
    background:#f7ecdf;
    font-family:"Playfair Display","Inter","Segoe UI",sans-serif;
    color:#1f2d35;
}

/* HERO */
.lux-hero{
    text-align:center;
    padding:110px 20px 80px;
    max-width:1200px;
    margin:0 auto;
}

.lux-tagline{
    font-size:14px;
    letter-spacing:4px;
    color:#c9a14a;
    margin-bottom:22px;
}

.lux-title{
    font-size:64px;
    letter-spacing:4px;
    margin-bottom:22px;
    font-weight:600;
}

.lux-divider{
    width:80px;
    height:2px;
    background:#c9a14a;
    margin:0 auto 34px;
}

.lux-subtext{
    font-size:22px;
    line-height:2;
    max-width:900px;
    margin:0 auto;
    color:#3a4a52;
}

/* PAGE */
.order-page{
    max-width:1200px;
    margin:50px auto 100px;
    padding:0 20px;
}

.order-section{
    margin-bottom:70px;
}

.order-section h2{
    font-size:30px;
    margin-bottom:22px;
    position:relative;
}

.order-section h2::after{
    content:"";
    width:65px;
    height:2px;
    background:#c9a14a;
    position:absolute;
    left:0;
    bottom:-10px;
}

.order-section p,
.order-section li{
    font-size:21px;
    line-height:2;
    color:#3a4a52;
}

/* FLOWCHART */
.order-flow{
    margin-top:50px;
    display:flex;
    flex-direction:column;
    align-items:center;
}

.flow-step{
    background:#fff;
    border:1px solid rgba(0,0,0,.08);
    padding:28px 36px;
    border-radius:12px;
    max-width:520px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,.05);
}

.flow-step span{
    display:inline-block;
    width:42px;
    height:42px;
    line-height:42px;
    border-radius:50%;
    background:#c9a14a;
    color:#fff;
    font-size:18px;
    font-weight:600;
    margin-bottom:14px;
}

.flow-step p{
    font-size:20px;
    margin:0;
}

.flow-line{
    width:2px;
    height:40px;
    background:#c9a14a;
    margin:14px 0;
}

/* LIST */
.order-section ul{
    padding-left:24px;
    margin-top:16px;
}

.order-section ul li{
    margin-bottom:12px;
}

/* RESPONSIVE */
@media(max-width:768px){
    .lux-title{font-size:42px;}
    .lux-subtext{font-size:18px;}
    .order-section h2{font-size:24px;}
    .order-section p,
    .order-section li{font-size:17px;}
    .flow-step p{font-size:17px;}
}
</style>
