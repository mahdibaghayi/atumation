
function hide_popup2() {

    $('#pupop_admin_login').modal('hide');
    $("#rezult2").html("");
}


function hide_popup3() {

    $('#pupop_admin_register').modal('hide');
    $("#rezult3").html("");
}



$("#login-admin-form").submit(function (e) {
    e.preventDefault();
    var frm = $(this);
    $("#rezult2").html("");
    $('#pupop_admin_login').modal('show');
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function (response) {
            //  $("#rezult2").html(response);

            if (response == 1) {
                $("#rezult2").html("<h2 style='color='green'; '>خوش آمدید </h2>");
                location.href="index.php";
            }
            else {
                $("#rezult2").html("<h2>خطا</h2><p class='lead text-muted' style='display: block;'>نام کاربری یا پسورد اشتباه می باشد</p>" +
                    "<a onclick='hide_popup2()' class='forms_buttons-action'>تلاش مجدد</a>");
                //location.href="index.php";

            }

        }
    });
});




$("#register-admin-form").submit(function (e) {
    e.preventDefault();
    var frm = $(this);
    $("#rezult3").html("");
    $('#pupop_admin_register').modal('show');
    $.ajax({
        type: frm.attr('method'),
        url: frm.attr('action'),
        data: frm.serialize(),
        success: function (response) {
            //  $("#rezult3").html(response);

            if (response == 0) {
                $("#rezult3").html("<h2>خطا</h2><p class='lead text-muted' style='display: block;'>پسورد اشتباه است</p>" +
                    "<a onclick='hide_popup3()' class='forms_buttons-action'>تلاش مجدد</a>");
            }
            else if(response == 1){
                $("#rezult3").html("<h2>خطا</h2><p class='lead text-muted' style='display: block;'>تلفن موبایل قبلا استفاده شده است</p>" +
                    "<a onclick='hide_popup3()' class='forms_buttons-action'>تلاش مجدد</a>");

            }
            else if(response == 2){
                $("#rezult3").html("<h2>خطا</h2><p class='lead text-muted' style='display: block;'> ایمیل قبلا استفاده شده است</p>" +
                    "<a onclick='hide_popup3()' class='forms_buttons-action'>تلاش مجدد</a>");

            }
            else if(response == 3){
                $("#rezult3").html("<h2>خطا</h2><p class='lead text-muted' style='display: block;'>خطا در سیستم لطفا با پشتیبانی تماس حاصل نمایید</p>" +
                    "<a onclick='hide_popup3()' class='forms_buttons-action'>تلاش مجدد</a>");

            }
            else if(response == 4){
                $("#rezult3").html("<h2 style='color='green'; '>خوش آمدید </h2>");
                location.href="index.php?installer";

            }
            else {
                $("#rezult3").html("<h2>خطا</h2><p class='lead text-muted' style='display: block;'>خطا در سیستم لطفا با پشتیبانی تماس حاصل نمایید</p>" +
                    "<a onclick='hide_popup3()' class='forms_buttons-action'>تلاش مجدد</a>");

            }

        }
    });
});
