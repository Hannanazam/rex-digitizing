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

