<!--contact us-->
<section class="section pt-50">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Contact us</h5>
                    </div>
                </div>
            </div>

            <div class="row mb-20">
                <div class="col-lg-8 mt-30">
                    <div class="contact">
                        <form action="assets/php/mail.php" class="widget-form contact_form " method="POST" id="main_contact_form">
                            <h6>Feel free to contact any time.</h6>
                            <div class="alert alert-success contact_msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name*" required="required">
                            </div>

                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your Email*" required="required">
                            </div>

                            <div class="form-group">
                                <input type="text" name="subject" id="subject" class="form-control" placeholder="Your Subject*" required="required">
                            </div>

                            <div class="form-group">
                                <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Your Message*" required="required"></textarea>
                            </div>

                            <button type="submit" name="submit" class="btn-custom">Send Message</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 max-width">
                <?= $this->element('sidebar'); ?>
                </div>
            </div>

        </div>
    </section>
