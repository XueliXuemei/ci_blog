<?php

$b = $identias->row_array();



?>

<div class="site-section first-section">

    <div class="container">

        <div class="row mb-5">

            <div class="col-md-12 text-center" data-aos="fade">

                <img src="<?php echo base_url() . 'theme/images/icon/' . $b['favicon'] ?>" style="width:90px;">

                <span class="caption d-block mb-2 font-secondary font-weight-bold"><?php echo $b['nama_website']; ?> </span>

                <h2 class="site-section-heading text-uppercase text-center font-secondary"><?php echo $b['meta_keyword'] . 'GALERY PROJECTS'; ?></h2>

            </div>

        </div>

    </div>

</div>



<div class="site-section first-section">

    <div class="container">

        <!-- <div class="row mb-5">

            <div class="col-md-12 text-center aos-init aos-animate" data-aos="fade">

                <span class="caption d-block mb-2 font-secondary font-weight-bold">Foto Galeri</span>

            </div>

        </div> -->

        <div class="row">

            <?php foreach ($all_galeri->result() as $row) : ?>

                <div class="col-md-6 col-lg-3 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="">

                    <a href="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" data-fancybox="gallery"><img src="<?php echo base_url() . 'assets/images/' . $row->galeri_gambar; ?>" alt="Image" class="img-fluid"></a>

                </div>

            <?php endforeach; ?>

        </div>

    </div>