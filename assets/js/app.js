$(".password_field .icon").click(function(){
    $(this).find(".fa-eye").toggleClass("fa-eye-slash");
    var input = $('.password_field').find('input');
    if (input.attr("type") == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
    // $(this).find("i.fas.fa-eye-splash").toggleClass("i.fas.fa-eye");
});

$('.input-images').imageUploader({
  label: 'Drag & Drop files here or click to browse',
  imagesInputName: 'attachments',
  maxFiles: 3
});

function printDiv() {

    var divToPrint = document.getElementById('printableArea');

    var newWin = window.open('', 'Print-Window');

    newWin.document.open();

    newWin.document.write('<html><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <link rel="stylesheet" href="../assets/css/style.css"><body onload="window.print()">' + divToPrint.innerHTML + '</body></html>');

    newWin.document.close();


}