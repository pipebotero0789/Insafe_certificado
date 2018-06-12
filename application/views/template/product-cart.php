<body class="fix-header">
        <!-- /page content -->
    <?php 
      echo $nav;
    ?>
                <div class="row">
                    <div class="col-md-9 col-lg-9 col-sm-7">
                        <div class="panel panel-info">
                            <div class="panel-heading"> Your Cart (5 items)</div>
                            <div class="panel-wrapper collapse in" aria-expanded="true">
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table product-overview">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Product info</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th style="text-align:center">Total</th>
                                                    <th style="text-align:center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td width="150"><img src="<?php echo base_url() ?>File/plugins/images/chair.jpg" alt="iMac" width="80"></td>
                                                    <td width="550">
                                                        <h5 class="font-500">Rounded Chair</h5>
                                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                                                    </td>
                                                    <td>$153</td>
                                                    <td width="70">
                                                        <input type="text" class="form-control" placeholder="1">
                                                    </td>
                                                    <td width="150" align="center" class="font-500">$153</td>
                                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="<?php echo base_url() ?>File/plugins/images/chair2.jpg" alt="iMac" width="80"></td>
                                                    <td>
                                                        <h5 class="font-500">Rounded Chair</h5>
                                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                                                    </td>
                                                    <td>$153</td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="1">
                                                    </td>
                                                    <td class="font-500" align="center">$153</td>
                                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="<?php echo base_url() ?>File/plugins/images/chair3.jpg" alt="iMac" width="80"></td>
                                                    <td>
                                                        <h5 class="font-500">Rounded Chair</h5>
                                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                                                    </td>
                                                    <td>$153</td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="1">
                                                    </td>
                                                    <td class="font-500" align="center">$153</td>
                                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td><img src="<?php echo base_url() ?>File/plugins/images/chair4.jpg" alt="iMac" width="80"></td>
                                                    <td>
                                                        <h5 class="font-500">Rounded Chair</h5>
                                                        <p>Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look</p>
                                                    </td>
                                                    <td>$153</td>
                                                    <td>
                                                        <input type="text" class="form-control" placeholder="1">
                                                    </td>
                                                    <td class="font-500" align="center">$153</td>
                                                    <td align="center"><a href="javascript:void(0)" class="text-inverse" title="" data-toggle="tooltip" data-original-title="Delete"><i class="ti-trash text-dark"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <hr>
                                        <button class="btn btn-danger pull-right"><i class="fa fa fa-shopping-cart"></i> Checkout</button>
                                        <button class="btn btn-default btn-outline"><i class="fa fa-arrow-left"></i> Continue shopping</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-5">
                        <div class="white-box">
                            <h3 class="box-title">Cart Summary</h3>
                            <hr> <small>Total Price</small>
                            <h2>$612</h2>
                            <hr>
                            <button class="btn btn-success">Checkout</button>
                            <button class="btn btn-default btn-outline">Cancel</button>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-5">
                        <div class="white-box">
                            <h3 class="box-title">For Any Support</h3>
                            <hr>
                            <h4><i class="ti-mobile"></i> 9998979695 (Toll Free)</h4> <small>Please contact with us if you have any questions. We are avalible 24h.</small> </div>
                    </div>
                </div>
     <?php 
      echo $footer;
    ?>