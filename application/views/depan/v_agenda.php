<?php

$b = $identias->row_array();

?>

<div class="site-section first-section">

    <div class="container">

        <div class="row mb-5">

            <div class="col-md-12 text-center" data-aos="fade">

                <img src="<?php echo base_url() . 'theme/images/icon/' . $b['favicon'] ?>" style="width:90px;">

                <span class="caption d-block mb-2 font-secondary font-weight-bold"><?php echo $b['nama_website']; ?> </span>

                <h2 class="site-section-heading text-uppercase text-center font-secondary"><?php echo $b['meta_keyword'] . 'Daftar agenda'; ?></h2>

            </div>

        </div>

        <br>

        <br>

        <div class="pb-3 site-section first-section">

            <div class="container">
<!-- 
                <div class="row mb-5">

                    <div class="col-md-12 aos-init aos-animate" data-aos="fade">

                        <h2 class="site-section-heading text-center text-uppercase">Daftar Agenda Kegiatan</h2>

                    </div>

                </div> -->

                <div class="row">

                    <?php foreach ($data->result() as $row) : ?>

                        <div class="col-md-6 col-lg-6 mb-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">

                            <h4 class="d-flex align-items-center"><span class="circle-icon-wrap mr-3"><span class="fa fa-calendar"></span></span> <?php echo date("d", strtotime($row->agenda_tanggal)) . ', ' . date("M Y", strtotime($row->agenda_tanggal)) . '- Jam: ' . $row->agenda_waktu; ?></h4>

                            <h5><?php echo $row->agenda_nama; ?></h5>

                            <p><?php echo $row->agenda_deskripsi; ?></p>

                        </div>

                    <?php endforeach; ?>



                </div>



            </div>

        </div>

    </div>

</div>