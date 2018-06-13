<script src="<?php echo base_url()?>File/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url()?>File/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="<?php echo base_url()?>File/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="<?php echo base_url()?>File/js/admin/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="<?php echo base_url()?>File/js/admin/waves.js"></script>
<script src="<?php echo base_url()?>File/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
    <script src="<?php echo base_url()?>File/js/admin/toastr.js"></script>
    <script type="text/javascript">
    //Alerts
    $(".myadmin-alert .closed").click(function(event) {
        $(this).parents(".myadmin-alert").fadeToggle(350);
        return false;
    });
    /* Click to close */
    $(".myadmin-alert-click").click(function(event) {
        $(this).fadeToggle(350);
        return false;
    });
    $(".showtop").click(function() {
        $(".alerttop").fadeToggle(350);
    });
    $(".showtop2").click(function() {
        $(".alerttop2").fadeToggle(350);
    });
    /** Alert Position Bottom  **/
    $(".showbottom").click(function() {
        $(".alertbottom").fadeToggle(350);
    });
    $(".showbottom2").click(function() {
        $(".alertbottom2").fadeToggle(350);
    });
    /** Alert Position Top Left  **/
    $("#showtopleft").click(function() {
        $("#alerttopleft").fadeToggle(350);
    });
    /** Alert Position Top Right  **/
    $("#showtopright").click(function() {
        $("#alerttopright").fadeToggle(350);
    });
    /** Alert Position Bottom Left  **/
    $("#showbottomleft").click(function() {
        $("#alertbottomleft").fadeToggle(350);
    });
    /** Alert Position Bottom Right  **/
    $("#showbottomright").click(function() {
        $("#alertbottomright").fadeToggle(350);
    });
    </script>
<!-- Custom Theme JavaScript -->
<script src="<?php echo base_url()?>File/js/admin/custom.min.js"></script>
<!--Style Switcher -->
<script src="<?php echo base_url()?>File/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>
</html>