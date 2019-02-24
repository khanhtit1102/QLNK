$(document).ready(function () {
    $("#dc").keyup(function () {
        $.ajax({
            type: "POST",
            url: "http://localhost/QLNK/admin/GetCountryName",
            data: {
                keyword: $("#dc").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#dc').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#dc').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="displayCountries" ><a role="menuitem dropdownCountryli" class="dropdownlivalue">' + value['tendd'] + '</a></li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#dc').val($(this).text());
    });
});