<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title>AdminWrap - Easy to Customize Bootstrap 4 Admin Template</title>
    <!-- Bootstrap Core CSS -->
    <link href="assets/node_modules/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" crossorigin="anonymous" />
    <!-- page css -->
    <link href="./assets/css/pages/login-register-lock.css" rel="stylesheet">
    <link href="./assets/css/pages/icon-page.css" rel="stylesheet" />
    <link href="./assets/css/aaintlTelInput.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/node_modules/select2/dist/css/select2.min.css" rel="stylesheet" type="text/css" />
    
    <!-- You can change the theme colors from here -->
    <link href="assets/css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<style>
  .select2-container .select2-selection--single{
      height:38px;
  }
  .intl-tel-input{
    width: 100% !important;
    }
  .select2-container .select2-selection--single .select2-selection__rendered{
      top:4px;
      position:relative;
  }
  .select2-container--default .select2-selection--single .select2-selection__arrow{
      top:5px;
  }
  .select2-container--default .select2-selection--single{
      border-color:#ced4da;
  }
</style>
<body class="card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Admin Wrap</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <section id="wrapper">
        <div class="login-register" style="background:#eaeaea;">
            <div class="login-box card">
                <div class="card-body">
                    <form class="" id="loginform" action="index.html">
                        <h3 class="box-title m-b-20 float-left">Sign Up</h3>
                        <div class="d-flex justify-content-end mb-4">
                        <img src="assets/images/logo-icon-2.png" class="img-fluid" style="width: 15%;">
                        <img src="assets/images/logo-text-2.png" class="img-fluid" style="width: 65%;height:0%;">
                    </div>

                        <div class="form-group bordered-form">
                            <label class="control-label text-left">Account Type</label>
                            <div class="d-flex mt-2">
                            <div class="custom-control custom-radio mr-3">
                                <input type="radio" id="customRadio1" value="hide" checked name="companytypeRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio1">Individual</label>
                            </div>
                            <div class="custom-control custom-radio mx-3">
                                <input type="radio" id="customRadio2" value="show" name="companytypeRadio" class="custom-control-input">
                                <label class="custom-control-label" for="customRadio2">Company</label>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            
                        <label>Name </label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12 ">
                            <label>Email </label>
                            <input type="email" class="form-control shadow-none" required>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <div class="password_field">
                        <label>Password </label>
                            <input type="password" class="form-control shadow-none" required>
                            <span class="icon f-icon"><i class="fas fa-eye"></i></span>
                        </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label>Phone </label>
                            <input type="number" id="phone" class="form-control shadow-none" required>
                        </div>
                        <div class="company_section col-lg-12 col-md-12 col-sm-12 px-0">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <label>Company Name </label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label>Company Website </label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label>Select City </label>
                                        <select class="select2 form-control custom-select">
                                            <option selected disabled value="">Select City</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label>Select State </label>
                                    <select class="select2 form-control custom-select">
                                            <option selected disabled value="">Select State</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <label>Zip Code </label>
                            <input type="text" class="form-control shadow-none" required>
                        </div>
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <div class="col-xs-12">
                            <textarea class="form-control shadow-none" rows="2" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row col-lg-12 col-md-12 col-sm-12">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-success p-t-0">
                                    <input id="checkbox-signup" type="checkbox"  class="filled-in chk-col-light-blue">
                                    <label for="checkbox-signup"> I agree to all <a href="javascript:void(0)">Terms</a></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center p-b-20 col-lg-12 col-md-12 col-sm-12">
                            <div class="col-xs-12">
                            <button class="btn btn-block btn-lg btn-info btn-rounded set-btn" type="submit">Sign UP</button>
                            </div>
                        </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                Already have an account? <a href="login.php" class="text-info m-l-5"><b>Sign In</b></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/bootstrap/js/popper.min.js"></script>
    <script src="assets/node_modules/select2/dist/js/select2.full.min.js" type="text/javascript"
    ></script>
    <script src="assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $(".preloader").fadeOut();
        });
    $(".select2").select2();
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        });
        // ============================================================== 
        // Login and Recover Password 
        // ============================================================== 
        $('#to-recover').on("click", function() {
            $("#loginform").slideUp();
            $("#recoverform").fadeIn();
        });
$('.company_section').hide();
$(document).ready(function(){
            $('input[name="companytypeRadio"]').on('click',function(){
                if($(this).val() === 'show'){
                    $('.company_section').show();
                }else{
                    $('.company_section').hide();
                }
            });
        });
    </script>
</body>


<script src="assets/js/aaintlTelInput.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"></script>
<script>
    function callcode(element_id) {
                var telInput = $("#"+element_id),

                errorMsg = $("#error-msg"),
                validMsg = $("#valid-msg");

            // initialise plugin
                telInput.intlTelInput({

                    allowExtensions: true,
                    formatOnDisplay: true,
                    autoFormat: true,
                    autoHideDialCode: true,
                    autoPlaceholder: true,
                    defaultCountry: "auto",
                    ipinfoToken: "yolo",

                    nationalMode: false,
                    numberType: "MOBILE",
                    //onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
                    preferredCountries: ['sa', 'ae', 'qa','om','bh','kw','ma'],
                    preventInvalidNumbers: true,
                    separateDialCode: true,
                    initialCountry: "us",
                    geoIpLookup: function(callback) {
                    $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                    });
                },
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
                });

            var reset = function() {
                telInput.removeClass("error");
                errorMsg.addClass("hide");
                validMsg.addClass("hide");
            };

            // on blur: validate
            telInput.blur(function() {
                reset();
                if ($.trim(telInput.val())) {
                if (telInput.intlTelInput("isValidNumber")) {
                    validMsg.removeClass("hide");
                } else {
                    telInput.addClass("error");
                    errorMsg.removeClass("hide");
                }
                }
            });

            // on keyup / change flag: reset
            telInput.on("keyup change", reset);

        }
        callcode("phone");
</script>
</html>