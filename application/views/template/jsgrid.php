<body class="fix-header">
        <!-- /page content -->
    <?php 
      echo $nav;
    ?>
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title">Editable with Datatable</h3>
                            <div id="basicgrid"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title">Static</h3>
                            <div id="staticgrid"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            <h3 class="box-title">Soarting</h3>
                            <div class="col-md-2 row">
                                <select id="sortingField" class="form-control input-sm m-b-10">
                                    <option>Name</option>
                                    <option>Age</option>
                                    <option>Address</option>
                                    <option>Country</option>
                                    <option>Married</option>
                                </select>
                            </div>
                            <div id="exampleSorting"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
      <?php 
      echo $footer;
    ?>