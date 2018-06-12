   <body class="fix-header">
        <!-- /page content -->
    <?php 
      echo $nav;
    ?>     
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Simple Basic Map</h3>
                            <div id="gmaps-simple" class="gmaps"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Market with Info window</h3>
                            <div id="markermap" class="gmaps"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Over Layer Map</h3>
                            <div id="overlayermap" class="gmaps"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Polygonal Map</h3>
                            <div id="polymap" class="gmaps"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Routes Map</h3>
                            <div id="routesmap" class="gmaps-panaroma"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Styled Map</h3>
                            <div id="styledmap" class="gmaps"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
  <?php 
      echo $footer;
    ?>