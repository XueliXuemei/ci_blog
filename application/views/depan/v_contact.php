<?php
$b = $identias->row_array();
?>
<div class="site-section first-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-12 text-center" data-aos="fade">
                <img src="<?php echo base_url() . 'theme/images/icon/' . $b['favicon'] ?>" style="width:90px;">
                <span class="caption d-block mb-2 font-secondary font-weight-bold"><?php echo $b['nama_website']; ?> </span>
                <h2 class="site-section-heading text-uppercase text-center font-secondary"><?php echo $b['meta_keyword'] . 'Lantum Projects'; ?></h2>
            </div>
        </div>
    </div>
</div>


<div class="site-section first-section aos-init aos-animate" data-aos="fade">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">



                <form action="#" class="p-5 bg-white">

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Full Name</label>
                            <input type="text" id="fullname" class="form-control" placeholder="Full Name">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="email">Email</label>
                            <input type="email" id="email" class="form-control" placeholder="Email Address">
                        </div>
                    </div>


                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control" placeholder="Phone #">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <label class="font-weight-bold" for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Send Message" class="btn btn-primary text-white px-4 py-2">
                        </div>
                    </div>


                </form>
            </div>

            <div class="col-lg-4">
                <div class="p-4 mb-3 bg-white">
                    <h3 class="h5 text-black mb-3">Kontak Laporan</h3>
                    <p class="mb-0 font-weight-bold">Alamat</p>
                    <p class="mb-4">diatas bumi, dibawah langit</p>

                    <p class="mb-0 font-weight-bold">Phone</p>
                    <p class="mb-4"><a href="#">08121200212</a></p>

                    <p class="mb-0 font-weight-bold">Email Address</p>
                    <p class="mb-0"><a href="#">tes@gmail.com</a></p>

                </div>


            </div>
        </div>
    </div>
</div>