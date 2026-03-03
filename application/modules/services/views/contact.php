<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

<style>
body{
    background:#f7ecdf;
    font-family:'Inter',sans-serif;
    color:#222;
}

/* SECTION */
.contact-section{
    padding:80px 0;
}

/* CARD */
.contact-card{
    background:#ffffff;
    border-radius:22px;
    padding:40px;
    box-shadow:0 25px 60px rgba(0,0,0,.12);
    height:100%;
}

/* TYPO */
.contact-title{
    font-family:'Playfair Display',serif;
    font-size:42px;
    font-weight:700;
}

.contact-sub{
    color:#c9a14a;
    letter-spacing:3px;
    font-size:13px;
    font-weight:600;
}

/* INFO */
.contact-info i{
    color:#c9a14a;
    font-size:18px;
    margin-top:3px;
}

/* BUTTON */
.contact-btn{
    background:linear-gradient(135deg,#e6d08a,#d4af37);
    border:none;
    color:#111;
    font-weight:700;
    letter-spacing:2px;
    padding:14px 0;
    border-radius:40px;
    transition:.4s;
}

.contact-btn:hover{
    box-shadow:0 20px 40px rgba(212,175,55,.45);
    transform:translateY(-2px);
}

/* MAP */
.contact-map iframe{
    width:100%;
    height:100%;
    min-height:420px;
    border:0;
    border-radius:22px;
    box-shadow:0 25px 60px rgba(0,0,0,.12);
}
</style>

<!-- ================= CONTACT SECTION ================= -->
<section class="contact-section">
    <div class="container">

        <!-- HEADING -->
        <div class="text-center mb-5">
            <span class="contact-sub d-block mb-2">GET IN TOUCH</span>
            <h2 class="contact-title mb-3">Contact Us</h2>
            <p class="text-muted">
                We’re here to help you with gemstone certification, jewellery enquiries,
                and custom orders.
            </p>
        </div>

        <div class="row g-5 align-items-stretch">

            <!-- LEFT : MAP -->
            <div class="col-lg-6">
                <div class="contact-map h-100">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3557.44638932152!2d75.82247837367206!3d26.921059559735067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396db74f4af3d13b%3A0x7af50669a41b444c!2sAnanya%20Gems%20and%20Jewels!5e0!3m2!1sen!2sin!4v1767945906861!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        loading="lazy">
                    </iframe>
                </div>
            </div>

            <!-- RIGHT : CONTACT CARD -->
            <div class="col-lg-6">
                <div class="contact-card">

                    <div class="row g-5">

                        <!-- INFO -->
                        <div class="col-md-5">
                            <h5 class="fw-bold mb-4">Reach Us</h5>

                            <div class="contact-info mb-4 d-flex gap-3">
                                <i class="bi bi-geo-alt"></i>
                                <div>
                                    <strong>Address</strong><br>
                                    Jaipur, Rajasthan, India
                                </div>
                            </div>

                            <div class="contact-info mb-4 d-flex gap-3">
                                <i class="bi bi-telephone"></i>
                                <div>
                                    <strong>Phone / WhatsApp</strong><br>
                                    +91 78770 40552
                                </div>
                            </div>

                            <div class="contact-info mb-4 d-flex gap-3">
                                <i class="bi bi-envelope"></i>
                                <div>
                                    <strong>Email</strong><br>
                                    info@ananyagamslab.com
                                </div>
                            </div>

                            <a href="https://wa.me/917877040552"
                               target="_blank"
                               class="btn contact-btn w-100 mt-3">
                               CHAT ON WHATSAPP
                            </a>
                        </div>

                        <!-- FORM -->
                        <div class="col-md-7">
                            <h5 class="fw-bold mb-4">Send a Message</h5>

                            <form method="post" action="<?= site_url('contact/submit'); ?>">
                                <div class="row g-3">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control"
                                               placeholder="Your Name" required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="tel" name="phone" class="form-control"
                                               placeholder="Phone Number" required>
                                    </div>

                                    <div class="col-12">
                                        <input type="email" name="email" class="form-control"
                                               placeholder="Email Address">
                                    </div>

                                    <div class="col-12">
                                        <textarea name="message" rows="5"
                                                  class="form-control"
                                                  placeholder="Your Message" required></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn contact-btn w-100">
                                            SEND MESSAGE
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</section>
