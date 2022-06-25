<!-- ============================================================== -->
<!-- footer -->
<!-- ============================================================== -->
<footer class="footer text-center"><b>Rex Digitizing</b> © 2022 </footer>
<!-- ============================================================== -->
<!-- End footer -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Page wrapper  -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../assets/node_modules/jquery/jquery.min.js"></script>
<script src="../assets/node_modules/morrisjs/morris.min.js"></script>
<!-- <script src="https://unpkg.com/fullcalendar@5.3.2/main.min.js"></script> -->

<!-- Bootstrap popper Core JavaScript -->
<script src="../assets/node_modules/bootstrap/js/popper.min.js"></script>
<script src="../assets/node_modules/image-uploader/dist/image-uploader.min.js"></script>
<script src="../assets/node_modules/bootstrap/js/bootstrap.min.js"></script>
<!-- slimscrollbar scrollbar JavaScript -->
<script src="../assets/node_modules/ps/perfect-scrollbar.jquery.min.js"></script>
<!--Wave Effects -->
<script src="../assets/js/waves.js"></script>
<!--Menu sidebar -->
<script src="../assets/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../assets/js/custom.min.js"></script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->
<!--morris JavaScript -->
 <!-- Calendar JavaScript -->
 <script src="../assets/node_modules/calendar/jquery-ui.min.js"></script>
    <script src="../assets/node_modules/moment/moment.js"></script>
    <script src='../assets/node_modules/calendar/dist/fullcalendar.min.js'></script>
    <script src="../assets/node_modules/calendar/dist/cal-init.js"></script>
    <!-- ============================================================== -->
<script src="../assets/node_modules/raphael/raphael-min.js"></script>

<!--c3 JavaScript -->
<script src="../assets/node_modules/d3/d3.min.js"></script>
<script src="../assets/node_modules/c3-master/c3.min.js"></script>
<!-- Popup message jquery -->
<script src="../assets/node_modules/toast-master/js/jquery.toast.js"></script>
<!-- Chart JS -->
<script src="../assets/js/dashboard1.js"></script>
<!-- ============================================================== -->
<!-- Dropzone Plugin JavaScript -->
<script src="../assets/node_modules/dropzone-master/dist/dropzone.js"></script>

<!-- Style switcher -->
<!-- ============================================================== -->
<script src="../assets/node_modules/styleswitcher/jQuery.style.switcher.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- This is data table -->
<script src="../assets/node_modules/datatables/jquery.dataTables.min.js"></script>
<!-- <script src="../assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup.min.js"></script>
    <script src="../assets/node_modules/Magnific-Popup-master/dist/jquery.magnific-popup-init.js"></script> -->
<!-- start - This is for export functionality only -->
<script src="../assets/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
<script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>

</body>
<!-- <script src="../assets/js/calender.min.js"></script> -->
<script>

// Datatable start

$(".card_order").first().addClass("active");
$(".table-responsive.no-wrap").first().addClass("active");
$(".table-responsive.no-wrap").hide();
$(".table-responsive.no-wrap").first().show();
$(".card_order").click(function(){
    $(".table-responsive.no-wrap").hide();
    $(".card_order").removeClass("active");
    $(".table-responsive.no-wrap").removeClass("active");
    var elemt_id=$(this).attr("data-id");
    $("#"+elemt_id).addClass("active");
    $(this).addClass("active");
    $("#"+elemt_id).fadeToggle(500);
})

$('#daterange').daterangepicker();
$('#myTable').DataTable();
$('#myTable1').DataTable();
$('#myTable2').DataTable();
$('#myTable3').DataTable();
$('#myTable4').DataTable();
    var table = $('#example').DataTable({
        "columnDefs": [{
            "visible": false,
            "targets": 2
        }],
        "order": [
            [2, 'asc']
        ],
        "displayLength": 25,
        "drawCallback": function(settings) {
            var api = this.api();
            var rows = api.rows({
                page: 'current'
            }).nodes();
            var last = null;
            api.column(2, {
                page: 'current'
            }).data().each(function(group, i) {
                if (last !== group) {
                    $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                    last = group;
                }
            });
        }
    });
    // Order by the grouping
    $('#example tbody').on('click', 'tr.group', function() {
        var currentOrder = table.order()[0];
        if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
            table.order([2, 'desc']).draw();
        } else {
            table.order([2, 'asc']).draw();
        }
    });


$('#example23').DataTable({
dom: 'Bfrtip',
buttons: [
    'copy', 'csv', 'excel', 'pdf', 'print'
]
});

// Datatable End

$(function() {
    // Switchery
    var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
    $('.js-switch').each(function() {
        new Switchery($(this)[0], $(this).data());
    });
    // For select 2
    $(".select2").select2();
    $('.selectpicker').selectpicker();
    //Bootstrap-TouchSpin
    $(".vertical-spin").TouchSpin({
        verticalbuttons: true,
        verticalupclass: 'ti-plus',
        verticaldownclass: 'ti-minus'
    });
    var vspinTrue = $(".vertical-spin").TouchSpin({
        verticalbuttons: true
    });
    if (vspinTrue) {
        $('.vertical-spin').prev('.bootstrap-touchspin-prefix').remove();
    }
    $("input[name='tch1']").TouchSpin({
        min: 0,
        max: 100,
        step: 0.1,
        decimals: 2,
        boostat: 5,
        maxboostedstep: 10,
        postfix: '%'
    });
    $("input[name='tch2']").TouchSpin({
        min: -1000000000,
        max: 1000000000,
        stepinterval: 50,
        maxboostedstep: 10000000,
        prefix: '$'
    });
    $("input[name='tch3']").TouchSpin();
    $("input[name='tch3_22']").TouchSpin({
        initval: 40
    });
    $("input[name='tch5']").TouchSpin({
        prefix: "pre",
        postfix: "post"
    });
    // For multiselect
    $('#pre-selected-options').multiSelect();
    $('#optgroup').multiSelect({
        selectableOptgroup: true
    });
    $('#public-methods').multiSelect();
    $('#select-all').on('click', function() {
        $('#public-methods').multiSelect('select_all');
        return false;
    });
    $('#deselect-all').on('click', function() {
        $('#public-methods').multiSelect('deselect_all');
        return false;
    });
    $('#refresh').on('click', function() {
        $('#public-methods').multiSelect('refresh');
        return false;
    });
    $('#add-option').on('click', function() {
        $('#public-methods').multiSelect('addOption', {
            value: 42,
            text: 'test 42',
            index: 0
        });
        return false;
    });
    $(".ajax").select2({
        ajax: {
            url: "https://api.github.com/search/repositories",
            dataType: 'json',
            delay: 250,
            data: function(params) {
                return {
                    q: params.term, // search term
                    page: params.page
                };
            },
            processResults: function(data, params) {
                // parse the results into the format expected by Select2
                // since we are using custom formatting functions we do not need to
                // alter the remote JSON data, except to indicate that infinite
                // scrolling can be used
                params.page = params.page || 1;
                return {
                    results: data.items,
                    pagination: {
                        more: (params.page * 30) < data.total_count
                    }
                };
            },
            cache: true
        },
        escapeMarkup: function(markup) {
            return markup;
        }, // let our custom formatter work
        minimumInputLength: 1,
        templateResult: formatRepo, // omitted for brevity, see the source of this page
        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
    });
});

$('.input-images').imageUploader({
    label: 'Drag & Drop files here or click to browse',
    imagesInputName: 'galleryimages',
    });


  $('#calendar').fullCalendar({
        defaultDate: new Date(),
    });

    var calendar = new FullCalendar.Calendar(calendarEl, {
      themeSystem: 'standstone',
      timeZone: 'UTC',
    });

                        
// document.addEventListener('DOMContentLoaded', function() {
// var calendarEl = $('#calendar');

// var calendar = new FullCalendar.Calendar(calendarEl, {
// headerToolbar: {


// right: "prev,next"
// },
// buttonText: {
// dayGridWeek: 'Week',
// dayGridMonth: 'Month',
// },
// height: 300,
// initialView: 'dayGridMonth',
// height: '70%',
// dayHeaders: true,
// initialDate: "{{date('Y-m-d')}}",
// showNonCurrentDates: false,
// eventDidMount: function( e ) {
// var title = e.el.querySelectorAll('.fc-event-title')[0];
// title.innerHTML = title.innerText;
// }

// });

// calendar.render();
// });

</script>

</html>
