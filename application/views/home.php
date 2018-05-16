<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Login Page - Now Ui Kit by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url('vendor/fortawesome/font-awesome/css/font-awesome.min.css')?>" />
    <!-- CSS Files -->
    <link href="/assets/css/bootstrap_mod.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
</head>

<body class="login-page">
    <div class="page-header" filter-color="orange">
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form id="loginForm" class="form">
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="/assets/img/default-avatar.png" alt="">
                            </div>
                        </div>
                        <div class="content">
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_single-02"></i>
                                </span>
                                <input name="login" type="text" class="form-control" placeholder="User Mail...">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons objects_key-25"></i>
                                </span>
                                <input name="pass" type="password" placeholder="User Password..." class="form-control" />
                            </div>
                        </div>
                        <div class="footer text-center">
                            <button id="form-submit-button" class="btn btn-primary btn-round btn-lg btn-block" data-container="body" data-toggle="popover" data-color="popover-warning" data-trigger="manual" data-placement="top" data-content="Wrong login / pass. Try again.">Let me in...</button>
                        </div>
                        <div class="pull-left">
                            <h6>
                                <a href="#pablo" class="link">Create Account</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#pablo" class="link">Need Help?</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Coded by
                    <a href="mailto:julien@marusi.fr" target="_blank">Jules</a>.
                </div>
            </div>
        </footer>
    </div>
</body>
<!--   Core JS Files   -->
<script src="<?php echo base_url('vendor/components/jquery/jquery.min.js')?>" type="text/javascript"></script>
<!-- <script src="/assets/js/core/popper.min.js" type="text/javascript"></script> -->
<script src="<?php echo base_url('vendor/twbs/bootstrap/dist/js/bootstrap.bundle.min.js')?>" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo base_url('vendor/nostalgiaz/bootstrap-switch/dist/js/bootstrap-switch.min.js')?>"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url('vendor/leongersen/nouislider/distribute/nouislider.min.js')?>" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo base_url('vendor/rcn3rdparty/bootstrap-datepicker-dist/js/bootstrap-datepicker.js')?>" type="text/javascript"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="/assets/js/now-ui-kit.js?v=1.1.0" type="text/javascript"></script>

<script type="text/javascript"> 
    $(document).ready(function() {

        $(function () {
            $('[data-toggle="popover"]').popover()
        })

        $('#form-submit-button').on('click', function (e) {
            e.preventDefault();
            var dataString = $("#loginForm").serialize();
            var url="Login/connect"
            $.ajax({
                method:"POST",
                url:"<?php echo base_url() ?>"+url,
                data:dataString,
                dataType:"text",
                success:function (data) {
                    $('#form-submit-button').attr("data-content", data)
                    $('#form-submit-button').popover('show')
                }
            })
        })

        $("[name='login'").on('click', function (e) {
            $('#form-submit-button').popover('hide')
        })

        $("[name='pass'").on('click', function (e) {
            $('#form-submit-button').popover('hide')
        })
    })
</script>
</html>