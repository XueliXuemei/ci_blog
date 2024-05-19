<?php

$b = $identias->row_array();

?>

<!DOCTYPE html>

<html lang="en">



<head>

    <title><?php echo $b['nama_website']; ?></title>

    <link rel="shorcut icon" href="<?php echo base_url() . 'theme/images/icon/' . $b['favicon'] ?>">

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">





    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/fonts/icomoon/style.css' ?> ">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/font-awesome.min.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.min.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/magnific-popup.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/jquery-ui.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.carousel.min.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/owl.thema.default.min.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap-datepicker.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/jquery.fancybox.min.css' ?>">

    <link rel="stylesheet" href="<?php echo base_url() . 'theme/fonts/flaticon/font/flaticon.css' ?>">



    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/aos.css' ?>">



    <link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">



</head>



<body>





    <div class="site-wrap">

        <!-- bagian menu -->

        <?php include('menu.php') ?>

        <!-- bagain menu -->



        <div class="slide-one-item home-slider owl-carousel">

            <?php

            $slider = $this->m_datawebsite->getdata_slider();
            foreach ($slider->result_array() as $i) :

            ?>

                <div class="site-blocks-cover inner-page" data-aos="fade" data-stellar-background-ratio="0.5">

                    <img src="<?php echo base_url() . 'theme/images/slider/' . $i['gambar']; ?>">

                </div>



            <?php endforeach; ?>



        </div>

        <!-- bagian content -->





        <?php echo $contents ?>





        <!-- batan conten -->

        <footer class="site-footer bg-dark">

            <div class="col-md-12 text-center">


<!-- 
                <img class="mb-0 site-logo" src="<?php echo base_url() . '/theme/images/icon/' . $b['favicon'] ?>" style="width:50px;"> -->


<br>
                <p>

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                    Copyright &copy; <script>

                        document.write(new Date().getFullYear());

                    </script> by TheMyProjects , Lampung

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

                </p>

            </div>

        </footer>

    </div>



    <script src="<?php echo base_url() . 'theme/js/jquery-3.3.1.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/jquery-migrate-3.0.1.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/jquery-ui.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/popper.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/owl.carousel.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/jquery.stellar.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/jquery.fancybox.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/jquery.animateNumber.min.js' ?>"></script>

    <script src="<?php echo base_url() . 'theme/js/aos.js' ?>"></script>



    <script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>



</body>



</html>