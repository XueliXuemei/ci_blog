<div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div> <!-- .site-mobile-menu -->

<div class="site-navbar-wrap js-site-navbar bg-gelora">

    <div class="container">
        <div class="site-navbar">
            <div class="row align-items-center">
                <div class="col-2">
                    <img class="mb-0 site-logo" src="<?php echo base_url() . '/theme/images/icon/icon_pdip-2.png' ?>" style="width:250px;">
                </div>
                <div class="col-10">
                    <nav class="site-navigation text-right" role="navigation">
                        <div class="container">
                            <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                            <ul class="site-menu js-clone-nav d-none d-lg-block">
                                <li><a href="<?= site_url('') ?>">Beranda</a></li>
                                <li class="has-children">
                                    <a href="#">Profil</a>
                                    <ul class="dropdown arrow-top">
                                        <?php
                                        foreach ($menu->result_array() as $i) :
                                            $judul = $i['judul'];
                                            $id_halaman =  $i['id_halaman'];
                                        ?>
                                            <li>
                                                <a href="<?php echo base_url() . 'profil/halamanstatis/' . $id_halaman; ?>">
                                                    <?= $judul; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </li>
                                <li><a href="<?= site_url('blog') ?>">Info Terbaru</a></li>
                                <li class="has-children">
                                    <a href="#">Pendaftaran</a>
                                    <ul class="dropdown arrow-top">
                                        <li><a href="<?= site_url('pendaftaran/kader') ?>">Pendaftaran Kader</a></li>
                                        <li><a href="<?= site_url('pendaftaran/anggota') ?>">Pendaftaran Anggota</a></li>
                                    </ul>
                                </li>
                                <!-- <li><a href="<?= site_url('agenda') ?>">Agenda kegiatan</a></li> -->
                                <!-- <li><a href="<?= site_url('galeri') ?>">Galeri</a></li> -->
                                
                                <li><a href="<?= site_url('contact') ?>">Hubung Kami</a></li>
                            </ul>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>