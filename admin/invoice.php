<?php include 'header.php'; ?>
<div class="page-wrapper">
    <div class="container-fluid">

<!-- Breadcrumb Start -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Invoice</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
            <li class="breadcrumb-item active">Invoice</li>
        </ol>
    </div>
    <div class="col-md-7 align-self-center text-right d-none d-md-block">
    <button id="print" class="btn btn-info" type="submit"> <span><i class="fa fa-print"></i> Print</span> </button>
  </div>
 </div>
<!-- Breadcrumb End -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-body printableArea">
                            <div class="image_area_absolute">
                            <div class="d-flex justify-content-center mb-4">
                            <img src="../assets/images/logo-icon-2.png" class="img-fluid" style="width:10%">
                            <img src="../assets/images/logo-text-2.png" class="img-fluid" style="width:45%">
                            </div>
                            </div>
                        <div class="image_area">
                        <div class="d-flex justify-content-center mb-4">
                        <img src="../assets/images/logo-icon-2.png" class="img-fluid" style="width:10%">
                        <img src="../assets/images/logo-text-2.png" class="img-fluid" style="width:45%">
                    </div>
                        </div>
                            <h3><b>INVOICE</b> <span class="pull-right">#INV-078</span></h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="pull-left">
                                        <address>
                                            <h3> &nbsp;<b class="text-danger">Rex Digitizing</b></h3>
                                            <p class="text-muted m-l-5">16306 Place Wood Houston,TX 77084 United States</p>
                                        </address>
                                    </div>
                                    <div class="pull-right text-right">
                                        <address>
                                            <h3>To,</h3>
                                            <h4 class="font-bold">Nexus,</h4>
                                            <p class="text-muted m-l-30"></p>
                                            <p class="m-t-30"><b>Invoice Date :</b> <i class="fa fa-calendar"></i> May 15, 2022</p>
                                        </address>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="table-responsive m-t-40" style="clear: both;">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">S.No</th>
                                                    <th>Order Name</th>
                                                    <th class="text-right">Category</th>
                                                    <th class="text-right">Amount</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="pull-right m-t-30 text-right">
                                        <p>Sub - Total amount: $0.00</p>
                                        <hr>
                                        <h3><b>Total :</b> $0.00</h3>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                </div>
            </div>
<?php include 'footer.php'; ?>

<script src="https://demo.techflixsolutions.com/public/Template/js/jquery.PrintArea.js" type="text/JavaScript"></script>
<script>
      $("#print").on('click', function() {
      var mode = 'iframe'; //popup
      var close = mode == "popup";
      var options = {
          mode: mode,
          popClose: close
      };
      $("div.printableArea").printArea(options);
  });
</script>