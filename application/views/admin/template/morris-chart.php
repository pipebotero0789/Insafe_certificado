<body class="fix-header">
        <!-- /page content -->
    <?php 
      echo $nav;
    ?>
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Product line Chart</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>iPhone</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>iPad</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #9675ce;"></i>iPod</h5> </li>
                            </ul>
                            <div id="morris-area-chart"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Site visit Chart</h3>
                            <ul class="list-inline text-right">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #00bfc7;"></i>Site A View</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>Site B View</h5> </li>
                            </ul>
                            <div id="morris-area-chart2"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Line Chart</h3>
                            <div id="morris-line-chart"></div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Donute Chart</h3>
                            <div id="morris-donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Bar Chart</h3>
                            <div id="morris-bar-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Extra Area Chart</h3>
                            <ul class="list-inline text-center m-t-40">
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #444b4c;"></i>Site A</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #fdc006;"></i>Site B</h5> </li>
                                <li>
                                    <h5><i class="fa fa-circle m-r-5" style="color: #808f8f;"></i>Site C</h5> </li>
                            </ul>
                            <div id="extra-area-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
     <?php 
      echo $footer;
    ?>