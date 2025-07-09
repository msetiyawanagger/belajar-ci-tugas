<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<!-- ======= Contact Section ======= -->
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

<section class="section contact">
  <div class="row gy-4">

    <!-- Info kotak (alamat, telp, email, jam buka) -->
    <div class="col-xl-6">
      <div class="row">
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-geo-alt"></i>
            <h3>Address</h3>
            <p>A108 Adam Street,<br>New York, NY 535022</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-telephone"></i>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-envelope"></i>
            <h3>Email Us</h3>
            <p>info@example.com<br>contact@example.com</p>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="info-box card">
            <i class="bi bi-clock"></i>
            <h3>Open Hours</h3>
            <p>Monday – Friday<br>9:00 AM – 5:00 PM</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Form kontak -->
    <div class="col-xl-6">
      <div class="card p-4">
        <form action="forms/contact.php" method="post" class="php-email-form">
          <div class="row gy-4">

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-md-6">
              <input type="email" name="email" class="form-control" placeholder="Your Email" required>
            </div>

            <div class="col-md-12">
              <input type="text" name="subject" class="form-control" placeholder="Subject" required>
            </div>

            <div class="col-md-12">
              <textarea name="message" rows="6" class="form-control" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>

              <button type="submit">Send Message</button>
            </div>

          </div>
        </form>
      </div>
    </div>

  </div>
</section>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- tambahkan validate.js jika Anda memakai validasi PHP‑Email‑Form -->
<script src="assets/vendor/php-email-form/validate.js"></script>
<!-- ======= End Contact Section ======= -->

<?= $this->endSection() ?>