<?php
$b = $identias->row_array();
$s = $sambutan->row_array();
$bt = $berita_terkini->row_array();
$terkini = substr($bt['tulisan_isi'], 0, -2000);

?>
<div class="site-section first-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center" data-aos="fade">
                <img src="<?php echo base_url() . 'theme/images/icon/' . $b['favicon'] ?>" style="width:90px;">
                <span class="caption d-block mb-2 font-secondary font-weight-bold"><?php echo $b['nama_website']; ?> </span>
                <h2 class="site-section-heading text-uppercase text-center font-secondary"><?php echo $b['meta_keyword'] . 'BERANDA'; ?></h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 ml-auto">
                <h4 class="site-section-heading mb-3 font-secondary text-uppercase">SELAMAT DATANG DI CI BLOG</h4>
                <p class="mb-5"><?= $s['isi_halaman'] ?></p>
            </div>
            <div class="col-lg-4">
                <p class="mb-5 text-center"><img src="<?= base_url() . 'assets/images/' . $s['gambar'] ?>" alt="Image" class="img-fluid"></p>
            </div>
        </div>
    </div>



    </br>
    </br>

    <div class="site-section ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <span class="caption d-block mb-2 font-secondary font-weight-bold">List</span>
                    <h2 class="site-section-heading text-uppercase text-center font-secondary">DAFTAR ARTIKEL</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 block-13 nav-direction-white">
                    <div class="nonloop-block-13 owl-carousel">
                        <?php foreach ($berita->result() as $row) : ?>
                            <div class="media-image">
                                <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                    <img src="<?php echo base_url() . 'assets/images/berita/' . $row->tulisan_gambar; ?>" alt="Image" class="img-fluid">
                                </a>
                                <div class="media-image-body">
                                    <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>">
                                        <h2 class="font-secondary text-uppercase"><?= $row->tulisan_judul ?></h2>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>