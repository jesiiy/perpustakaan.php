<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
      <a class="nav-link" href="dashboard">
        <i class="bi bi-house"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-people-fill"></i><span>Pengguna</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('home/siswa') ?>">
            <i class="bi bi-folder2-open"></i><span>siswa</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('home/petugas') ?>">
            <i class="bi bi-folder2-open"></i><span>petugas</span>
          </a>
        </li>
                <li>
          <a href="<?= base_url('home/user') ?>">
            <i class="bi bi-folder2-open"></i><span>user</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-filter-square"></i><span>Angkatan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('home/kelas') ?>">
            <i class="bi bi-cash-coin"></i><span>Kelas</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('home/jurusan') ?>">
            <i class="bi bi-cash-coin"></i><span>Jurusan</span>
          </a>
        </li>
      </ul>
    </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i><span>Data</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="<?= base_url('home/buku') ?>">
              <i class="bi bi-circle"></i><span>Buku</span>
            </a>
          </li>
          <li>
            <a href="<?= base_url('home/peminjaman') ?>">
              <i class="bi bi-circle"></i><span>Peminjaman</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->


    <li class="nav-item">
      <a class="nav-link " data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-file-earmark-post"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="tables-nav" class="nav-content collapse show" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('home/lp') ?>" class="active">
            <i class="bi bi-journal-text"></i><span>Peminjaman</span>
          </a>
        </li>
      </ul>
    </li><!-- End Tables Nav -->

    <li class="nav-heading">Pages</li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('home/profile') ?>">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li><!-- End Profile Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('home/faq') ?>">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li><!-- End F.A.Q Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('home/contact') ?>">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li><!-- End Contact Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-register.html">
        <i class="bi bi-card-list"></i>
        <span>Register</span>
      </a>
    </li><!-- End Register Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="<?= base_url('home/aksi_login') ?>">
        <i class="bi bi-box-arrow-left"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Login Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-error-404.html">
        <i class="bi bi-dash-circle"></i>
        <span>Error 404</span>
      </a>
    </li><!-- End Error 404 Page Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" href="pages-blank.html">
        <i class="bi bi-file-earmark"></i>
        <span>Blank</span>
      </a>
    </li><!-- End Blank Page Nav -->

  </ul>

  </aside><!-- End Sidebar-->