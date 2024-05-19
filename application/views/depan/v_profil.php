<?php

$b = $identias->row_array();

$h = $data->row_array();

?>

<div class="site-section first-section">

    <div class="container">

        <div class="row mb-5">

            <div class="col-md-12 text-center" data-aos="fade">

                <img src="<?php echo base_url() . 'theme/images/icon/' . $b['favicon'] ?>" style="width:90px;">

                <span class="caption d-block mb-2 font-secondary font-weight-bold"><?php echo $b['nama_website']; ?> </span>

                <h2 class="site-section-heading text-uppercase text-center font-secondary"><?php echo $b['meta_keyword'] . ''; ?></h2>

            </div>

        </div>

        <div class="row no-gutters align-items-stretch">

            <div class="col-lg-12 ml-lg-auto  py-12">

                <span class="caption d-block mb-2 text-center font-secondary font-weight-bold">PROFIL</span>

                <h2 class="site-section-heading  text-center text-uppercase font-secondary mb-5"><?php echo $h['judul']; ?></h2>

                <?php

                if (empty($h['isi_halaman'])) { ?>

                    <img src="<?php echo base_url() . 'assets/images/' . $h['gambar']; ?>" class="img-fluid" alt="#">

                <?php } elseif (empty($h['gambar'])) { ?>

                    <?php echo $h['isi_halaman']; ?>

                <?php } else { ?>

                    <?php echo $h['isi_halaman']; ?>

                <?php } ?>

            </div>

        </div>

    </div>

</div>