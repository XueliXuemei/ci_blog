<!--Counter Inbox-->

<?php

error_reporting(0);

$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");

$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");

$jum_comment = $query2->num_rows();

$jum_pesan = $query->num_rows();

?>

<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>TK IT Teladan Kota Agung</title>

    <!-- Tell the browser to be responsive to screen width -->

    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

    <!-- Bootstrap 3.3.6 -->

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/bootstrap/css/bootstrap.min.css' ?>">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/font-awesome/css/font-awesome.min.css' ?>">

    <!-- DataTables -->

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.css' ?>">

    <!-- Theme style -->

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/AdminLTE.min.css' ?>">

    <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" />

    <?php

    /* Mengambil query report*/

    foreach ($visitor as $result) {

        $bulan[] = $result->tgl; //ambil bulan

        $value[] = (float) $result->jumlah; //ambil nilai

    }

    /* end mengambil query*/



    ?>



    <?php

    function limit_words($string, $word_limit)

    {

        $words = explode(" ", $string);

        return implode(" ", array_splice($words, 0, $word_limit));

    }



    ?>

</head>



<body class="hold-transition skin-blue sidebar-mini">





    <div class="wrapper">



        <!--Header-->

        <?php

        $this->load->view('admin/v_header');

        ?>



        <!-- Left side column. contains the logo and sidebar -->

        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->

            <section class="sidebar">



                <!-- /.search form -->

                <!-- sidebar menu: : style can be found in sidebar.less -->

                <ul class="sidebar-menu">

                    <li class="header">Menu Utama</li>

                    <li class="active">

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

                    <li>

                        <a href="<?php echo base_url() . 'admin/identitas' ?>">

                            <i class="fa fa-tv"></i> <span>Identitas</span>

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

                            <li><a href="<?php echo base_url() . 'admin/tulisan' ?>"><i class="fa fa-list"></i> List Berita</a></li>

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

                    <li>

                        <a href="<?php echo base_url() . 'admin/pengumuman' ?>">

                            <i class="fa fa-volume-up"></i> <span>Pengumuman</span>

                            <span class="pull-right-container">

                                <small class="label pull-right"></small>

                            </span>

                        </a>

                    </li>

                    <li>

                        <a href="<?php echo base_url() . 'admin/files' ?>">

                            <i class="fa fa-download"></i> <span>Download</span>

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

                        <a href="<?php echo base_url() . 'admin/guru' ?>">

                            <i class="fa fa-graduation-cap"></i> <span>Data Guru</span>

                            <span class="pull-right-container">

                                <small class="label pull-right"></small>

                            </span>

                        </a>

                    </li>



                    <li class="treeview">

                        <a href="#">

                            <i class="fa fa-user"></i>

                            <span>Kesiswaan</span>

                            <span class="pull-right-container">

                                <i class="fa fa-angle-left pull-right"></i>

                            </span>

                        </a>

                        <ul class="treeview-menu">

                            <li><a href="<?php echo base_url() . 'admin/siswa' ?>"><i class="fa fa-users"></i> Data Siswa</a></li>

                            <li><a href="#"><i class="fa fa-star-o"></i> Prestasi Siswa</a></li>



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

                        <a href="<?php echo base_url() . 'administrator/logout' ?>">

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



        <?php echo $contents ?>



        <footer class="main-footer">

            <div class="pull-right hidden-xs">

                <b>Version</b> 1.0

            </div>

            <strong>Copyright &copy; 2024 <a href="#"> TheMyProjects</a>.</strong> All rights reserved.

        </footer>





    </div>

    <!-- ./wrapper -->



    <!-- jQuery 2.2.3 -->

    <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>

    <!-- Bootstrap 3.3.6 -->

    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>

    <!-- Select2 -->

    <script src="<?php echo base_url() . 'assets/plugins/select2/select2.full.min.js' ?>"></script>

    <!-- InputMask -->

    <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.js' ?>"></script>

    <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.date.extensions.js' ?>"></script>

    <script src="<?php echo base_url() . 'assets/plugins/input-mask/jquery.inputmask.extensions.js' ?>"></script>

    <!-- date-range-picker -->

    <script src="<?php echo base_url() . 'assets/plugins/daterangepicker/daterangepicker.js' ?>"></script>

    <!-- bootstrap datepicker -->

    <script src="<?php echo base_url() . 'assets/plugins/datepicker/bootstrap-datepicker.js' ?>"></script>

    <!-- bootstrap color picker -->

    <script src="<?php echo base_url() . 'assets/plugins/colorpicker/bootstrap-colorpicker.min.js' ?>"></script>

    <!-- bootstrap time picker -->

    <script src="<?php echo base_url() . 'assets/plugins/timepicker/bootstrap-timepicker.min.js' ?>"></script>

    <!-- SlimScroll 1.3.0 -->

    <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>

    <!-- iCheck 1.0.1 -->

    <script src="<?php echo base_url() . 'assets/plugins/iCheck/icheck.min.js' ?>"></script>

    <!-- FastClick -->

    <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>

    <!-- AdminLTE App -->

    <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>

    <!-- AdminLTE for demo purposes -->

    <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>



    <!-- Page script -->









</body>



</html>