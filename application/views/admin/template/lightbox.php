<body class="fix-header">
        <!-- /page content -->
    <?php 
      echo $nav;
    ?>
                <!-- .row -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Single image lightbox</h3> <code>&lt;a class="image-popup-no-margins" href="..." title="title will be apear here"&gt;&lt;img src="..."/&gt;&lt;/a&gt;</code>
                            <div class="row m-t-30">
                                <div class="col-sm-4">
                                    <a class="image-popup-vertical-fit" href="<?php echo base_url() ?>File/plugins/images/big/img1.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="<?php echo base_url() ?>File/plugins/images/big/img1.jpg" class="img-responsive" /> </a> <small>Fits horizontally and vertically</small> </div>
                                <div class="col-sm-4">
                                    <a class="image-popup-fit-width" href="<?php echo base_url() ?>File/plugins/images/big/img2.jpg" title="This image fits only horizontally."> <img src="<?php echo base_url() ?>File/plugins/images/big/img2.jpg" class="img-responsive" /> </a> <small>Only horizontally</small> </div>
                                <div class="col-sm-4">
                                    <a class="image-popup-no-margins" href="<?php echo base_url() ?>File/plugins/images/big/img3.jpg"> <img src="<?php echo base_url() ?>File/plugins/images/big/img3.jpg" class="img-responsive" /> </a> <small>Zoom animation, close on top-right.</small> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                    <div class="col-sm-6">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Lightbox gallery</h3> <code>&lt;a href="..." title="title will be apear here"&gt;&lt;img src="..."/&gt;&lt;/a&gt;</code>
                            <div class="popup-gallery m-t-30">
                                <a href="<?php echo base_url() ?>File/plugins/images/big/img5.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="<?php echo base_url() ?>File/plugins/images/big/img5.jpg" width="32.5%" /> </a>
                                <a href="<?php echo base_url() ?>File/plugins/images/big/img6.jpg" title="This image fits only horizontally."> <img src="<?php echo base_url() ?>File/plugins/images/big/img6.jpg" width="32.5%" /> </a>
                                <a href="<?php echo base_url() ?>File/plugins/images/big/img4.jpg"> <img src="<?php echo base_url() ?>File/plugins/images/big/img4.jpg" width="32.5%" /> </a>
                            </div> <small>just add code under class="popup-gallery".</small> </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-sm-12">
                        <div class="white-box">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3 class="box-title m-b-0">Zoom-gallery</h3>
                                    <div class="zoom-gallery m-t-30">
                                        <a href="<?php echo base_url() ?>File/plugins/images/big/img5.jpg" title="Caption. Can be aligned to any side and contain any HTML."> <img src="<?php echo base_url() ?>File/plugins/images/big/img5.jpg" width="32.5%" /> </a>
                                        <a href="<?php echo base_url() ?>File/plugins/images/big/img6.jpg" title="This image fits only horizontally."> <img src="<?php echo base_url() ?>File/plugins/images/big/img6.jpg" width="32.5%" /> </a>
                                        <a href="<?php echo base_url() ?>File/plugins/images/big/img4.jpg"> <img src="<?php echo base_url() ?>File/plugins/images/big/img4.jpg" width="32.5%" /> </a>
                                    </div>
                                </div>
                                <div class="col-sm-2"></div>
                                <div class="col-sm-3">
                                    <h3 class="box-title m-b-0">Popup with Youtube Video</h3> <small>You can use youtube video with popup just add class <code>popup-youtube</code></small>
                                    <br/>
                                    <br/> <a class="popup-youtube btn btn-danger" href="www.youtube.com/watch?v=sK7riqg2mr4">Open YouTube video</a>
                                    <br> </div>
                                <div class="col-sm-3">
                                    <h3 class="box-title m-b-0">Google map</h3> <small>You can use Googlemap with popup just add class with <code>popup-gmaps</code></small>
                                    <br/>
                                    <br/> <a class="popup-gmaps btn btn-info" href="https://maps.google.com/maps?q=221B+Baker+Street,+London,+United+Kingdom&amp;hl=en&amp;t=v&amp;hnear=221B+Baker+St,+London+NW1+6XE,+United+Kingdom">Open Google Map</a> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Css Animation</h3>
                            <div id="image-popups" class="row">
                                <div class="col-sm-2">
                                    <a href="<?php echo base_url() ?>File/plugins/images/big/img1.jpg" data-effect="mfp-zoom-in"><img src="<?php echo base_url() ?>File/plugins/images/big/img1.jpg" class="img-responsive" />
                                        <br/>Zoom</a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?php echo base_url() ?>File/plugins/images/big/img2.jpg" data-effect="mfp-newspaper"><img src="<?php echo base_url() ?>File/plugins/images/big/img2.jpg" class="img-responsive" />
                                        <br/>Newspaper</a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?php echo base_url() ?>File/plugins/images/big/img3.jpg" data-effect="mfp-move-horizontal"><img src="<?php echo base_url() ?>File/plugins/images/big/img3.jpg" class="img-responsive" />
                                        <br/>Horizontal move</a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?php echo base_url() ?>File/plugins/images/big/img4.jpg" data-effect="mfp-move-from-top"><img src="<?php echo base_url() ?>File/plugins/images/big/img4.jpg" class="img-responsive" />
                                        <br/>Move from top</a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?php echo base_url() ?>File/plugins/images/big/img5.jpg" data-effect="mfp-3d-unfold"><img src="<?php echo base_url() ?>File/plugins/images/big/img5.jpg" class="img-responsive" />
                                        <br/>3d unfold</a>
                                </div>
                                <div class="col-sm-2">
                                    <a href="<?php echo base_url() ?>File/plugins/images/big/img6.jpg" data-effect="mfp-zoom-out"><img src="<?php echo base_url() ?>File/plugins/images/big/img5.jpg" class="img-responsive" />
                                        <br/>Zoom-out</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .col -->
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <!-- .col -->
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title m-b-0">Form Popup</h3> <a class="popup-with-form btn btn-success" href="#test-form">Open form</a>
                            <!-- form itself -->
                            <form id="test-form" class="mfp-hide white-popup-block">
                                <h1>Form</h1>
                                <fieldset style="border:0;">
                                    <p>Lightbox has an option to automatically focus on the first input. It's strongly recommended to use <code>inline</code> popup type for lightboxes with form instead of <code>ajax</code> (to keep entered data if the user accidentally refreshed the page).</p>
                                    <div class="form-group">
                                        <label class="control-label" for="inputName">Name</label>
                                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required=""> </div>
                                    <div class="form-group">
                                        <label class="control-label" for="inputEmail">Email</label>
                                        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="example@domain.com" required=""> </div>
                                    <div class="form-group">
                                        <label class="control-label" for="inputPhone">Phone</label>
                                        <input type="tel" class="form-control" id="inputPhone" name="phone" placeholder="Eg. +447500000000" required=""> </div>
                                    <div class="form-group">
                                        <label class="control-label" for="textarea">Textarea</label>
                                        <br>
                                        <textarea class="form-control" id="textarea">Try to resize me to see how popup CSS-based resizing works.</textarea>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <!-- .col -->
                </div>
                <!-- /.row -->

     <?php 
      echo $footer;
    ?>