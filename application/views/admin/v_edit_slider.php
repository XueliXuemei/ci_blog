<!--Counter Inbox-->

<?php

$query = $this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");

$query2 = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");

$jum_comment = $query2->num_rows();

$jum_pesan = $query->num_rows();

$b = $identias->row_array();

?>

<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title><?php echo $b['nama_website']; ?></title>

    <!-- Tell the browser to be responsive to screen width -->

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



    <link rel="stylesheet" href="<?php echo base_url() . 'assets/dist/css/skins/_all-skins.min.css' ?>">

    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.css' ?>" /> -->

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/build/toastr.css' ?>" />

    <link href="" rel="stylesheet" type="text/css" />

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

                    <li>

                        <a href="<?php echo base_url() . 'admin/identitas' ?>">

                            <i class="fa fa-tv"></i> <span>Identitas</span>

                            <span class="pull-right-container">

                                <small class="label pull-right"></small>

                            </span>

                        </a>

                    </li>

                    <li class="active">

                        <a href="<?php echo base_url() . 'admin/data_website/slider' ?>">

                            <i class="fa fa-image"></i> <span>Data Slider</span>

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



        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <h1>

                    Edit Data Gambar Slider

                    <small></small>

                </h1>

                <ol class="breadcrumb">

                    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

                    <li><a href="#">data slider</a></li>

                </ol>

            </section>



            <!-- Main content -->

            <section class="content">

                <div class="row">

                    <div class="col-xs-12">

                        <div class="box">



                            <div class="box">

                                <?php

                                $b = $data->row_array();

                                ?>

                                <div class="box-body">

                                    <form action="<?php echo base_url() . 'admin/data_website/edit_slider' ?>" method="post" enctype="multipart/form-data">

                                        <div class="row">

                                            <div class="col-md-8">

                                                <div class="form-group">

                                                    <label>Title Slider</label>

                                                    <input type="hidden" name="id" value="<?php echo $b['id_slider']; ?>">

                                                    <textarea id="ckeditor" name="a" required><?php echo $b['title']; ?></textarea>

                                                </div>



                                                <div class="form-group">



                                                    <img class="img-thumbnail" style="height:100px" src="<?php echo base_url() . 'theme/images/slider/' . $b['gambar']; ?>">

                                                    </br></br>

                                                    <label>Gambar</label>

                                                    <input type="file" name="filefoto" style="width: 100%;">

                                                    <small style="color: red">*gambar Tidak di ganti kosangkan saja</small>





                                                </div>



                                                <div class="form-group">

                                                    <button type="submit" name="submit" class="btn btn-primary btn-flat"><span class="fa fa-pencil"></span>Simpan</button>

                                                </div>

                                            </div>

                                        </div>

                                    </form>

                                </div>

                                <!-- /.box-body -->

                            </div>

                            <!-- /.box -->

                        </div>

                        <!-- /.col -->

                    </div>

                    <!-- /.row -->

            </section>

            <!-- /.content -->

        </div>

        <!-- /.content-wrapper -->

        <footer class="main-footer">

            <div class="pull-right hidden-xs">

            </div>

            <strong>Copyright &copy; 2024 <a href="">

                    <?php echo $b['THE MY PROJECTS']; ?>

                </a>.</strong> All rights reserved.

        </footer>



        <!-- Control Sidebar -->

        <aside class="control-sidebar control-sidebar-dark">

            <!-- Create the tabs -->

            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">

                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>

                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>

            </ul>

            <!-- Tab panes -->

            <div class="tab-content">

                <!-- Home tab content -->

                <div class="tab-pane" id="control-sidebar-home-tab">

                    <h3 class="control-sidebar-heading">Recent Activity</h3>

                    <ul class="control-sidebar-menu">

                        <li>

                            <a href="javascript:void(0)">

                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>



                                <div class="menu-info">

                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>



                                    <p>Will be 23 on April 24th</p>

                                </div>

                            </a>

                        </li>

                        <li>

                            <a href="javascript:void(0)">

                                <i class="menu-icon fa fa-user bg-yellow"></i>



                                <div class="menu-info">

                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>



                                    <p>New phone +1(800)555-1234</p>

                                </div>

                            </a>

                        </li>

                        <li>

                            <a href="javascript:void(0)">

                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>



                                <div class="menu-info">

                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>



                                    <p>nora@example.com</p>

                                </div>

                            </a>

                        </li>

                        <li>

                            <a href="javascript:void(0)">

                                <i class="menu-icon fa fa-file-code-o bg-green"></i>



                                <div class="menu-info">

                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>



                                    <p>Execution time 5 seconds</p>

                                </div>

                            </a>

                        </li>

                    </ul>

                    <!-- /.control-sidebar-menu -->



                    <h3 class="control-sidebar-heading">Tasks Progress</h3>

                    <ul class="control-sidebar-menu">

                        <li>

                            <a href="javascript:void(0)">

                                <h4 class="control-sidebar-subheading">

                                    Custom Template Design

                                    <span class="label label-danger pull-right">70%</span>

                                </h4>



                                <div class="progress progress-xxs">

                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>

                                </div>

                            </a>

                        </li>

                        <li>

                            <a href="javascript:void(0)">

                                <h4 class="control-sidebar-subheading">

                                    Update Resume

                                    <span class="label label-success pull-right">95%</span>

                                </h4>



                                <div class="progress progress-xxs">

                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>

                                </div>

                            </a>

                        </li>

                        <li>

                            <a href="javascript:void(0)">

                                <h4 class="control-sidebar-subheading">

                                    Laravel Integration

                                    <span class="label label-warning pull-right">50%</span>

                                </h4>



                                <div class="progress progress-xxs">

                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>

                                </div>

                            </a>

                        </li>

                        <li>

                            <a href="javascript:void(0)">

                                <h4 class="control-sidebar-subheading">

                                    Back End Framework

                                    <span class="label label-primary pull-right">68%</span>

                                </h4>



                                <div class="progress progress-xxs">

                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>

                                </div>

                            </a>

                        </li>

                    </ul>

                    <!-- /.control-sidebar-menu -->



                </div>

                <!-- /.tab-pane -->

                <!-- Stats tab content -->

                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>

                <!-- /.tab-pane -->

                <!-- Settings tab content -->

                <div class="tab-pane" id="control-sidebar-settings-tab">

                    <form method="post">

                        <h3 class="control-sidebar-heading">General Settings</h3>



                        <div class="form-group">

                            <label class="control-sidebar-subheading">

                                Report panel usage

                                <input type="checkbox" class="pull-right" checked>

                            </label>



                            <p>

                                Some information about this general settings option

                            </p>

                        </div>

                        <!-- /.form-group -->



                        <div class="form-group">

                            <label class="control-sidebar-subheading">

                                Allow mail redirect

                                <input type="checkbox" class="pull-right" checked>

                            </label>



                            <p>

                                Other sets of options are available

                            </p>

                        </div>

                        <!-- /.form-group -->



                        <div class="form-group">

                            <label class="control-sidebar-subheading">

                                Expose author name in posts

                                <input type="checkbox" class="pull-right" checked>

                            </label>



                            <p>

                                Allow the user to show his name in blog posts

                            </p>

                        </div>

                        <!-- /.form-group -->



                        <h3 class="control-sidebar-heading">Chat Settings</h3>



                        <div class="form-group">

                            <label class="control-sidebar-subheading">

                                Show me as online

                                <input type="checkbox" class="pull-right" checked>

                            </label>

                        </div>

                        <!-- /.form-group -->



                        <div class="form-group">

                            <label class="control-sidebar-subheading">

                                Turn off notifications

                                <input type="checkbox" class="pull-right">

                            </label>

                        </div>

                        <!-- /.form-group -->



                        <div class="form-group">

                            <label class="control-sidebar-subheading">

                                Delete chat history

                                <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>

                            </label>

                        </div>

                        <!-- /.form-group -->

                    </form>

                </div>

                <!-- /.tab-pane -->

            </div>

        </aside>

        <!-- /.control-sidebar -->

        <!-- Add the sidebar's background. This div must be placed

       immediately after the control sidebar -->

        <div class="control-sidebar-bg"></div>

    </div>

    <!-- ./wrapper -->











    <!-- jQuery 2.2.3 -->

    <script src="<?php echo base_url() . 'assets/plugins/jQuery/jquery-2.2.3.min.js' ?>"></script>

    <!-- Bootstrap 3.3.6 -->

    <script src="<?php echo base_url() . 'assets/bootstrap/js/bootstrap.min.js' ?>"></script>

    <!-- DataTables -->

    <script src="<?php echo base_url() . 'assets/plugins/datatables/jquery.dataTables.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'assets/plugins/datatables/dataTables.bootstrap.min.js' ?>"></script>

    <!-- SlimScroll -->

    <script src="<?php echo base_url() . 'assets/plugins/slimScroll/jquery.slimscroll.min.js' ?>"></script>

    <!-- FastClick -->

    <script src="<?php echo base_url() . 'assets/plugins/fastclick/fastclick.js' ?>"></script>

    <!-- AdminLTE App -->

    <script src="<?php echo base_url() . 'assets/dist/js/app.min.js' ?>"></script>

    <!-- AdminLTE for demo purposes -->

    <script src="<?php echo base_url() . 'assets/dist/js/demo.js' ?>"></script>

    <!-- <script type="text/javascript" src="<?php echo base_url() . 'assets/plugins/toast/jquery.toast.min.js' ?>"></script> -->

    <script type="text/javascript" src="<?php echo base_url() . 'assets/toastr.js' ?>"></script>

    <script src="<?php echo base_url() . 'assets/ckeditor/ckeditor.js' ?>"></script>

    <!-- page script -->

    <script>

        $(function() {

            // Replace the <textarea id="editor1"> with a CKEditor

            // instance, using default configuration.



            CKEDITOR.replace('ckeditor');





        });

    </script>



    <script>

        $(function() {

            $("#example1").DataTable();

            $('#example2').DataTable({

                "paging": true,

                "lengthChange": false,

                "searching": false,

                "ordering": true,

                "info": true,

                "autoWidth": false

            });

        });



        toastr.options = {

            "closeButton": false,

            "debug": false,

            "newestOnTop": false,

            "progressBar": false,

            "rtl": true,

            "positionClass": "toast-bottom-right",

            "preventDuplicates": false,

            "onclick": null,

            "showDuration": 300,

            "hideDuration": 100,

            "timeOut": 3000,

            "extendedTimeOut": 1000,

            "showEasing": "swing",

            "hideEasing": "linear",

            "showMethod": "fadeIn",

            "hideMethod": "fadeOut"

        };

    </script>



    <?php if ($this->session->flashdata('msg') == 'success') : ?>

        <script type="text/javascript">

            toastr["success"]("Berhasil diTambahkan Kedalam database")

        </script>

    <?php elseif ($this->session->flashdata('msg') == 'info') : ?>

        <script type="text/javascript">

            toastr["info"]("Berhasil Terupdate Kedalam database")

        </script>

    <?php elseif ($this->session->flashdata('msg') == 'warning') : ?>

        <script type="text/javascript">

            toastr["warning"]("Berhasil Terupdate Kedalam database")

        </script>



    <?php elseif ($this->session->flashdata('msg') == 'success-hapus') : ?>

        <script type="text/javascript">

            toastr["error"]("Berhasil Terhapus Kedalam database")

        </script>

    <?php else : ?>



    <?php endif; ?>

</body>



</html>