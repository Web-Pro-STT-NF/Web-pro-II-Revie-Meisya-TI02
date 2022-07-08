<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <!-- Dashboard -->
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-heading">Dashboard</li>
    <li class="nav-item">
      <a class="nav-link collapsed" href="<?php echo base_url('index.php') ?>/dashboard">
        <i class="bi bi-person"></i>
        <span>Profile</span>
      </a>
    </li>

    <!-- Kelola Mobil -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#mobil-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-journal-text"></i><span>Kelola Mobil</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="mobil-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="
                <?php
                if ($this->session->userdata('bagian') == 'administrator') {
                  echo base_url('index.php/Admin/Kelola_mobil');
                } else {
                  echo base_url('index.php/Public/Data_mobil');
                }
                ?>">
            <i class="bi bi-circle"></i><span>Daftar Mobil</span>
          </a>
        </li>
        <li>
          <a href="
                <?php
                if ($this->session->userdata('bagian') == 'administrator') {
                  echo base_url('index.php/Admin/Kelola_merk');
                } else {
                  echo base_url('index.php/Public/Data_merk');
                }
                ?>">
            <i class="bi bi-circle"></i><span>Daftar Merk</span>
          </a>
        </li>
      </ul>
    </li>

    <!-- Kelola Perawatan -->
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#perawatan-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Kelola Perawatan</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="perawatan-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
        <li>
          <a href="
                 <?php
                  if ($this->session->userdata('bagian') == 'administrator') {
                    echo base_url('index.php/Admin/Kelola_perawatan');
                  } else {
                    echo base_url('index.php/Public/Data_perawatan');
                  }
                  ?>">
            <i class="bi bi-circle"></i><span>Daftar Perawatan</span>
          </a>
        </li>
        <li>
          <a href="
                 <?php
                  if ($this->session->userdata('bagian') == 'administrator') {
                    echo base_url('index.php/Admin/Kelola_jenis');
                  } else {
                    echo base_url('index.php/Public/Data_jenis');
                  }
                  ?>">
            <i class="bi bi-circle"></i><span>Tabel Jenis</span>
          </a>
        </li>
      </ul>
    </li>

    <?php 
      if($this->session->userdata('bagian') == 'administrator') {

    ?>
      <!-- Kelola Perawatan -->
        <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#sewa-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-clipboard-check"></i><span>Kelola Sewa</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="sewa-nav" class="nav-content collapse" data-bs-parent="#sidebar-nav">
            <li>
              <a href="<?php echo base_url('index.php') ?>/Admin/Data_sewa">
                <i class="bi bi-circle"></i><span>Daftar Sewa</span>
              </a>
            </li>
          </ul>
        </li>
    <?php
      }
    ?>

    <li class="nav-heading">Info</li>

    <!-- F.A.Q -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-question-circle"></i>
        <span>F.A.Q</span>
      </a>
    </li>

    <!-- Contact -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#">
        <i class="bi bi-envelope"></i>
        <span>Contact</span>
      </a>
    </li>

  </ul>

</aside>
<!-- End Sidebar-->