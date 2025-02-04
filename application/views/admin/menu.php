<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">Menu Utama</li>
            <li>
                <a href="<?php echo base_url() . 'admin/dashboard' ?>">
                    <i class="fa fa-home"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'admin/HalamanStatis' ?>">
                    <i class="fa fa-chrome"></i> <span>Halaman Statis</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="<?php echo base_url() . 'admin/identitas' ?>">
                    <i class="fa fa-tv"></i> <span>Identitas</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'admin/data_website/slider' ?>">
                    <i class="fa fa-tv"></i> <span>Data slider</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-newspaper-o"></i>
                    <span>Berita</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo base_url() . 'admin/tulisan' ?>"><i class="fa fa-list"></i> List Berita</a></li>
                    <li><a href="<?php echo base_url() . 'admin/tulisan/add_tulisan' ?>"><i class="fa fa-thumb-tack"></i> Post Berita</a></li>
                    <li><a href="<?php echo base_url() . 'admin/kategori' ?>"><i class="fa fa-wrench"></i> Kategori</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url() . 'admin/pengguna' ?>">
                    <i class="fa fa-users"></i> <span>Pengguna</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>
            <li>
                <a href="<?php echo base_url() . 'admin/agenda' ?>">
                    <i class="fa fa-calendar"></i> <span>Agenda</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-camera"></i>
                    <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url() . 'admin/album' ?>"><i class="fa fa-clone"></i> Album</a></li>
                    <li><a href="<?php echo base_url() . 'admin/galeri' ?>"><i class="fa fa-picture-o"></i> Photos</a></li>
                </ul>
            </li>


            <li>
                <a href="<?php echo base_url() . 'admin/inbox' ?>">
                    <i class="fa fa-envelope"></i> <span>Inbox</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green"><?php echo $jum_pesan; ?></small>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url() . 'admin/komentar' ?>">
                    <i class="fa fa-comments"></i> <span>Komentar</span>
                    <span class="pull-right-container">
                        <small class="label pull-right bg-green"><?php echo $jum_comment; ?></small>
                    </span>
                </a>
            </li>

            <li>
                <a href="<?php echo base_url() . 'admin/login/logout' ?>">
                    <i class="fa fa-sign-out"></i> <span>Sign Out</span>
                    <span class="pull-right-container">
                        <small class="label pull-right"></small>
                    </span>
                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>