<?php

$b = $identias->row_array();

function limit_words($string, $word_limit)

{

    $words = explode(" ", $string);

    return implode(" ", array_splice($words, 0, $word_limit));

}

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

<div class="slant-1"></div>







<div class="site-section first-section">

    <div class="container">
<!-- 
        <div class="row">

            <div class="col-md-12 text-center">

                <span class="caption d-block mb-2 font-secondary font-weight-bold">Kanal Berita</span>

                <h2 class="site-section-heading text-uppercase text-center font-secondary">Daftar Berita</h2>

            </div>

        </div> -->

        </br>

        </br>

        <div class="row">

            <div class="col-md-8 blog-content">

                <p><img src="<?php echo base_url() . 'assets/images/berita/' . $image ?>" alt="Image" class="img-fluid"></p>

                <h4><span class="d-block mb-3"><?php echo $title; ?></span></h4>

                <h6>

                    <a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> <span><?php echo $tanggal; ?></span> </a> |

                    <a href="#"><i class="fa fa-user" aria-hidden="true"></i> <span><?php echo $author; ?></span> </a> | <a href="#"><i class="fa fa-tags" aria-hidden="true"></i> <span><?php echo $kategori; ?></span></a></h6>

                <?php echo $blog; ?>

                <ul class="nav nav-tabs blogpost-tab-wrap" role="tablist">

                    <li class="nav-item blogpost-nav-tab">

                        <a class="nav-link active" data-toggle="tab" href="#comments" role="tab">Komentar</a>

                    </li>

                    <li class="nav-item blogpost-nav-tab">

                        <a class="nav-link" data-toggle="tab" href="#write-comment" role="tab">Tinggalkan Komentar</a>

                    </li>

                </ul>



                <div class="pt-5

                <?php echo $this->session->flashdata('msg'); ?>">

                    <div class="tab-content">

                        <div class="tab-pane active" id="comments" role="tabpanel">

                            <ul class="comment-list">

                                <?php

                                $colors = array(

                                    '#ff9e67',

                                    '#10bdff',

                                    '#14b5c7',

                                    '#f98182',

                                    '#8f9ce2',

                                    '#ee2b33',

                                    '#d4ec15',

                                    '#613021',

                                );

                                foreach ($show_komentar->result() as $row) :

                                    shuffle($colors);

                                ?>



                                    <li class="comment">

                                        <div class="vcard bio" style="background-color:<?php echo reset($colors); ?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">

                                            <center>

                                                <h2 style="padding-top:20%;color:#fff;"><?php echo substr($row->komentar_nama, 0, 1); ?></h2>

                                            </center>

                                        </div>

                                        <div class="comment-body">

                                            <h3><?php echo $row->komentar_nama; ?></h3>

                                            <div class="meta"><em><?php echo date("d M Y H:i", strtotime($row->komentar_tanggal)); ?></em></div>

                                            <p><?php echo $row->komentar_isi; ?></p>

                                        </div>

                                        <?php

                                        $komentar_id = $row->komentar_id;

                                        $query = $this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='1' AND komentar_parent='$komentar_id' ORDER BY komentar_id ASC");

                                        foreach ($query->result() as $res) :

                                            shuffle($colors);

                                        ?>

                                            <ul class="children">

                                                <li class="comment">

                                                    <div class="vcard bio" style="background-color:<?php echo reset($colors); ?>;width: 65px;height: 65px;border-radius:50px 50px 50px 50px;">

                                                        <center>

                                                            <h2 style="padding-top:20%;color:#fff;"><?php echo substr($res->komentar_nama, 0, 1); ?></h2>

                                                        </center>

                                                    </div>

                                                    <div class="comment-body">

                                                        <h3><?php echo $res->komentar_nama; ?></h3>

                                                        <div class="meta"><em><?php echo date("d M Y H:i", strtotime($res->komentar_tanggal)); ?></em></div>

                                                        <p><?php echo $res->komentar_isi; ?></p>

                                                    </div>

                                                </li>

                                            </ul>

                                    </li>

                                <?php endforeach; ?>

                            <?php endforeach; ?>

                            </ul>

                        </div>

                        <div class="tab-pane" id="write-comment" role="tabpanel">

                            <form action="<?php echo site_url('blog/komentar'); ?>" method="post">

                                <div class="row">

                                    <div class="col-6">

                                        <div class="form-group">

                                            <label>Nama</label>

                                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required>

                                        </div>

                                        <!-- // end .form-group -->

                                    </div>

                                    <div class="col-6">

                                        <div class="form-group">

                                            <label>Email</label>

                                            <input type="email" class="form-control" name="email" placeholder="Email" required>

                                        </div>

                                        <!-- // end .form-group -->

                                    </div>

                                    <div class="col-12">

                                        <div class="form-group">

                                            <label>Komentar Anda</label>

                                            <textarea class="form-control" name="komentar" rows="6" required> </textarea>

                                        </div>

                                        <!-- // end .form-group -->

                                    </div>

                                    <div class="col-12">

                                        <input type="hidden" name="id" value="<?php echo $id; ?>" required>

                                        <button type="submit" class="btn btn-warning" />Kirim Komentar</button>

                                    </div>

                                    <!-- // end .col-12 -->

                                </div>

                            </form>

                        </div>

                    </div>

                    <!-- END comment-list -->

                </div>

            </div>

            <div class="col-md-4 sidebar">

                <div class="sidebar-box">

                    <div class="categories">

                        <h3 class="text-uppercase">Kategori Berita</h3>

                        <?php foreach ($category->result() as $row) : ?>

                            <li>

                                <a href="<?php echo site_url('blog/kategori/' . str_replace(" ", "-", $row->nama)); ?>"> <i class="fa fa-genderless"></i> <?php echo $row->nama; ?> <span>(<?php echo $row->jum; ?>)</span></a>

                                <hr>

                            </li>

                        <?php endforeach; ?>



                    </div>



                </div>

                <div class="sidebar-box">

                    <h3 class="text-uppercase">berita Populer</h3>

                    <?php foreach ($populer->result() as $row) : ?>

                        <div class="blog-featured-img_block">

                            <img width="35%" src="<?php echo base_url() . 'assets/images/berita/' . $row->tulisan_gambar; ?>" class="img-fluid" alt="blog-featured-img">

                            <h5><a href="<?php echo site_url('artikel/' . $row->tulisan_slug); ?>"><?php echo limit_words($row->tulisan_judul, 3) . '...'; ?></a></h5>

                            <p><?php echo limit_words($row->tulisan_isi, 5) . '...'; ?></p>

                        </div>

                        <hr>

                    <?php endforeach; ?>

                </div>



                <div class="sidebar-box">

                    <img src="<?php echo base_url() . 'theme/images/icon/icon_pdip-2.png' ?>" alt="Image placeholder" class="img-fluid mb-4">



                </div>

            </div>

        </div>

    </div>

</div>