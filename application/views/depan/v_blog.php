<?php

$b = $identias->row_array();



?>

<div class="site-section first-section">

    <div class="container">

        <div class="row mb-5">

            <div class="col-md-12 text-center" data-aos="fade">

                <img src="<?php echo base_url() . 'theme/images/icon/' . $b['favicon'] ?>" style="width:90px;">

                <span class="caption d-block mb-2 font-secondary font-weight-bold"><?php echo $b['nama_website']; ?> </span>

                <h2 class="site-section-heading text-uppercase text-center font-secondary"><?php echo $b['meta_keyword'] . 'Daftar artikel'; ?></h2>

            </div>

        </div>

    </div>

</div>



<div class="site-section first-section" data-aos="fade">

    <div class="container">

        <!-- <div class="row">

            <div class="col-md-12 text-center">

                <span class="caption d-block mb-2 font-secondary font-weight-bold">Kanal Berita</span>

                <h2 class="site-section-heading text-uppercase text-center font-secondary">Daftar Berita</h2>

            </div>

        </div> -->


        <div class="row mb-5">

            <?php foreach ($berita->result() as $row) : ?>

                <div class="col-md-6 col-lg-4 mb-5">

                    <div class="media-image">

                        <a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>"> <img src="<?php echo base_url() . 'assets/images/berita/' . $row->tulisan_gambar; ?>" alt="Image" class="img-fluid"></a>

                        <div class="media-image-body">

                            <h2 class="font-secondary text-uppercase"><a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>"><?= $row->tulisan_judul ?></a></h2>

                            <span class="d-block mb-3"> <?= 'by-' . $row->penulis ?>&mdash; <?= $row->tanggal ?></span>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</div>