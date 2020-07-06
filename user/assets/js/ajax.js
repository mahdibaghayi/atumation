
$('.outdate2').persianDatepicker({
    cellWidth: 30,
    cellHeight: 30,
    fontSize: 18,
    startDate: "today",
    endDate: "1499/1/1",
    formatDate: "YYYY/0M/0D|ND"
});

$(document).ready(function () {

    var max_fields3 = 10; //maximum input boxes allowed
    var wrapper3 = $("#items1"); //Fields wrapper
    var add_button2 = $(".add_field_button"); //Add button ID

    var x = 1; //initlal text box count


    $(add_button2).click(function (e) { //on add input button click
        e.preventDefault();


        x++; //text box increment
        $(wrapper3).append('     <div class="row">\n' +
            '                        <div class="col-md-12">\n' +
            '                            <label for="exampleInputEmail1">خدمات</label>\n' +
            '                            <div class="row">\n' +
            '                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">\n' +
            '                                    <input required="required" type="text"  name="services[]" class="form-control" id="exampleusername_'+x+'" placeholder="نام خدمات به انگلیسی">\n' +
            '                                                 ' +
            '   </div>\n' +
            '                                <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">\n' +
            '                                    <input required="required" type="text" name="name_services[]" class="form-control" id="exampleInputEmail1" placeholder="نام خدمات فارسی">\n' +
            '                                </div>\n' +


            '                                <div class="col-xs-2 col-sm-2 col-md-2  col-lg-2">\n' +
            '                                 <img id="" class="remove_field" src="assets/images/remove.png" width="40%" height="42px" />                                  </div>\n' +
            '                            </div>\n' +
            '                        </div>\n' +
            '                  </div>');

    });

    $(wrapper3).on("click", ".remove_field", function (e) { //user click on remove field
        e.preventDefault();
        $(this).parent('div').parent('div').parent('div').parent('div').remove();


    })




});


