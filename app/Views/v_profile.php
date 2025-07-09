<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
Owner
<link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

<section class="section profile">
  <div class="row">
    <!-- ❶ Kartu foto & identitas singkat -->
    <div class="col-xl-4">
      <div class="card">
        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
          <img src="<?= base_url('NiceAdmin/assets/img/profile-image.jpg') ?>"" alt="Profile" class="rounded-circle">
          <h2>John</h2>
          <h3>(Nama Samaran)</h3>

          <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- ❷ Kartu detail & tab -->
    <div class="col-xl-8">
      <div class="card">
        <div class="card-body pt-3">
          <!-- Tabs -->
          <ul class="nav nav-tabs nav-tabs-bordered">
            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
            </li>
          </ul>

          <div class="tab-content pt-2">
            <!-- Overview -->
            <div class="tab-pane fade show active profile-overview" id="profile-overview">
              <!-- … isi Overview sama seperti di template lengkap … -->
            </div>

            <!-- Edit Profile -->
            <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
              <!-- … form edit profil … -->
            </div>

            <!-- Settings -->
            <div class="tab-pane fade pt-3" id="profile-settings">
              <!-- … form pengaturan … -->
            </div>

            <!-- Change Password -->
            <div class="tab-pane fade pt-3" id="profile-change-password">
              <!-- … form ganti password … -->
            </div>
          </div><!-- End tab-content -->
        </div>
      </div>
    </div>
  </div>
</section>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<?= $this->endSection() ?>